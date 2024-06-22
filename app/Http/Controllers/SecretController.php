<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secret;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SecretLinkJob ;
use App\Mail\SecretLinkMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\SecretService;
use App\Http\Requests\CreateSecretRequest;
class SecretController extends Controller

{
    protected $secretService;

    public function __construct(SecretService $secretService)
    {
        $this->secretService = $secretService;
    }


    public function dashboard(){
       
        $secrets = Secret::where('users_id', "=", auth()->user()->id)->get();

    return view('backend.user.pages.dasboard', compact('secrets'));
    }

    public function support(){
        return view('backend.user.pages.support');
    }
    public function store(CreateSecretRequest $request)
    {
        // Create the secret using the SecretService
        $secret = $this->secretService->createSecret($request);

        // Redirect to the secret view with a success message
        return redirect()->route('secret', ['secret' => $secret->uuid])
                         ->with('success', 'Secret created successfully');
    }

    public function secret(Secret $uuid){

     $secretLink = session('secret_link');
    $secretContent = session('secret_content');
    return view('frontend.pages.secretlink', compact('secretLink', 'secretContent','uuid'));

   }
    public function generatelink($id)
{


    $secret = Secret::where('unique_string', $id)->firstOrFail();

    // Check if the secret has expired
    if (Carbon::now()->greaterThan($secret->expires_at)) {
        return view('frontend.pages.generatedlink', [
            'expired' => true,
            'message' => 'This secret has expired.',
        ]);
    }

    // Check if the secret has a phasepass
    $phasepassRequired = !is_null($secret->phasepass);

    // Decrypt the content
    $decryptedContent = Crypt::decryptString($secret->content);

    // Generate the link
    $link = route('view.secret', ['uuid' => $secret->unique_string]);

    // Store the link in the session flash data
    session()->flash('secret_link', $link);

    // Calculate the expiration time in a human-readable format
    $expiration = $secret->expires_at->diffForHumans();

    return view('frontend.pages.generatedlink', [
        'expired' => false,
        'secret' => $secret,
        'decryptedContent' => $decryptedContent,
        'expiration' => $expiration,
        'phasepassRequired' => $phasepassRequired
    ]);
}


public function userSecret(CreateSecretRequest  $request)
{
    $secret = $this->secretService->createSecret($request);

    return redirect()->route('user.dashboard')
    ->with('success', 'Secret has been created and the link has been sent.');
}


    public function clearSecretLink(Request $request)
    {
        $request->session()->forget('secret_link');
        return response()->json(['status' => 'success']);
    }

    public function maskSecretContent(Request $request, $id)
    {

        $secret = Secret::where('unique_string', $id)->firstOrFail();

        // Check if the secret has already been read
        if (!$secret->is_read) {
            // Decrypt the content
            $secretContent = Crypt::decryptString($secret->content);

            // Mark the secret as read
            $secret->is_read = true;
            $secret->save();

            // Return the decrypted content as JSON
            return response()->json(['success' => true, 'content' => $secretContent]);
        }
        return response()->json(['success' => false, 'message' => 'Secret has already been read']);

    }



    public function checkPhasepass(Request $request, $id)
{
      // Validate the phasepass input
      $request->validate([
        'phasepass' => 'required|string',
    ]);

    try {
        // Retrieve the Secret model by unique_string
        $secret = Secret::where('unique_string', $id)->firstOrFail();

        // Check if the phasepass matches
        if ($secret->phasepass && $secret->phasepass === $request->input('phasepass')) {
            // Check if the content has already been read
            if ($secret->is_read) {
                return redirect()->back()->withErrors(['phasepass' => 'Content has already been read.']);
            }

            // Mark the content as read
            $secret->is_read = true;
            $secret->save();

            // Decrypt the content before returning
            $decryptedContent = Crypt::decryptString($secret->content);

            return redirect()->back()->with('content', $decryptedContent);
        } else {
            return redirect()->back()->withErrors(['phasepass' => 'Incorrect phasepass.']);
        }
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }
}
}
