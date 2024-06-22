<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Secret;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Jobs\SecretLinkJob ;
use App\Mail\SecretLinkMail;
use App\Http\Requests\ApiSecretRequest;
use App\Services\ApiSecretService;
class SecretController extends Controller
{

    protected $apiSecretService;

    public function __construct(ApiSecretService $apiSecretService)
    {
        $this->apiSecretService = $apiSecretService;
        $this->middleware('auth:sanctum');
    }


    // public function store(Request $request)
    // {
    //     try {
    //         $result = $this->apiSecretService->store($request->all());

    //         return $result;
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
    //     }
    // }

public function secret(Secret $secret)
{
    $secretLink = session('secret_link');
    $secretContent = session('secret_content');

    return response()->json([
        'secretLink' => $secretLink,
        'secretContent' => $secretContent,
        'uuid' => $secret
    ]);
}

public function generatelink($id)
{
    $secret = Secret::where('unique_string', $id)->firstOrFail();

    // Check if the secret has expired
    if (Carbon::now()->greaterThan($secret->expires_at)) {
        return response()->json([
            'expired' => true,
            'message' => 'This secret has expired.'
        ]);
    }

    // Check if the secret has a phasepass
    $phasepassRequired = !is_null($secret->phasepass);

    // Decrypt the content
    $decryptedContent = Crypt::decryptString($secret->content);

    // Generate the link with the '/api' prefix
    $link = route('api.view.secret', ['uuid' => $secret->unique_string]);

    // Store the link in the session flash data
    session()->flash('secret_link', $link);

    // Calculate the expiration time in a human-readable format
    $expiration = $secret->expires_at->diffForHumans();

    return response()->json([
        'expired' => false,
        'secret' => $secret,
        'decryptedContent' => $decryptedContent,
        'expiration' => $expiration,
        'phasepassRequired' => $phasepassRequired
    ]);
}



// public function userSecret(Request $request)
//     {
//         try {
//             $result = $this->apiSecretService->userSecret($request->all());

//             return $result;
//         } catch (\Exception $e) {
//             return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
//         }
//     }


public function store(ApiSecretRequest $request)
    {
        try {
            $result = $this->apiSecretService->store($request->validated());

            return $result;
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }

    public function userSecret(ApiSecretRequest $request)
    {
        try {
            $result = $this->apiSecretService->userSecret($request->validated());

            return $result;
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 400);
        }
    }
public function clearSecretLink(Request $request)
{
    $request->session()->forget('secret_link');
    return response()->json(['status' => 'success']);
}

public function maskSecretContent(Request $request, $id)
{
    $secret = Secret::where('unique_string', $id)->firstOrFail();

    if (!$secret->is_read) {
        $secretContent = Crypt::decryptString($secret->content);
        $secret->is_read = true;
        $secret->save();

        return response()->json(['success' => true, 'content' => $secretContent]);
    }

    return response()->json(['success' => false, 'message' => 'Secret has already been read'], 410);
}

public function checkPhasepass(Request $request, $id)
{
    $request->validate([
        'phasepass' => 'required|string',
    ]);

    try {
        $secret = Secret::where('unique_string', $id)->firstOrFail();

        if ($secret->phasepass && $secret->phasepass === $request->input('phasepass')) {
            if ($secret->is_read) {
                return response()->json(['success' => false, 'message' => 'Content has already been read'], 410);
            }

            $secret->is_read = true;
            $secret->save();
            $decryptedContent = Crypt::decryptString($secret->content);

            return response()->json(['success' => true, 'content' => $decryptedContent]);
        } else {
            return response()->json(['success' => false, 'message' => 'Incorrect phasepass'], 403);
        }
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
    }
}
}
