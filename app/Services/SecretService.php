<?php
namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Secret;
use App\Jobs\SecretLinkJob;
use App\Http\Requests\CreateSecretRequest;
class SecretService
{
    public function createSecret(CreateSecretRequest $request)
    {
        // Generate unique identifiers
        $uniqueString = Str::random(16);
        $uuid = (string) Str::uuid();
        $shortUuid = substr(base64_encode($uuid), 0, 16);

        // Encrypt the content
        $encryptedContent = Crypt::encryptString($request->input('content'));

        // Map expiration times
        $expirationMapping = [
            '7d' => Carbon::now()->addDays(7),
            '2d' => Carbon::now()->addDays(2),
            '1d' => Carbon::now()->addDay(),
            '12h' => Carbon::now()->addHours(12),
            '4h' => Carbon::now()->addHours(4),
            '1h' => Carbon::now()->addHour(),
            '30m' => Carbon::now()->addMinutes(30),
            '5m' => Carbon::now()->addMinutes(5),
        ];
        $expiresAt = $expirationMapping[$request->input('expires_at')]->toDateTimeString();

        // Create the secret
        $secret = new Secret();
        $secret->content = $encryptedContent;
        $secret->phasepass = $request->input('phasepass');
        $secret->expires_at = $expiresAt;
        $secret->unique_string = $uniqueString;
        $secret->uuid = $shortUuid;
        $secret->is_read = false;
        $secret->save();

        // Generate the secret link
        $link = route('view.secret', ['uuid' => $uniqueString]);

        // Flash the link and content to the session
        session()->flash('secret_link', $link);
        session()->flash('secret_content', $request->input('content'));

        // Dispatch the job to send the secret link via email
        if ($request->filled('email')) {
            $email = $request->input('email');
            SecretLinkJob::dispatch($email, $link); // Dispatching the job with email and link
        }

        // Return the created secret
        return $secret;
    }
    // public function createSecret($requestData)
    // {
    //     $requestData->validate([
    //         'content' => 'required|string',
    //         'phasepass' => 'nullable|string',
    //         'expires_at' => 'required|in:7d,2d,1d,12h,4h,1h,30m,5m',
    //     ]);

    //     $uniqueString = Str::random(16);
    //     $uuid = (string) Str::uuid();
    //     $shortUuid = substr(base64_encode($uuid), 0, 16);

    //     $encryptedContent = Crypt::encryptString($requestData->input('content'));

    //     $expirationMapping = [
    //         '7d' => Carbon::now()->addDays(7),
    //         '2d' => Carbon::now()->addDays(2),
    //         '1d' => Carbon::now()->addDay(),
    //         '12h' => Carbon::now()->addHours(12),
    //         '4h' => Carbon::now()->addHours(4),
    //         '1h' => Carbon::now()->addHour(),
    //         '30m' => Carbon::now()->addMinutes(30),
    //         '5m' => Carbon::now()->addMinutes(5),
    //     ];
    //     $expiresAt = $expirationMapping[$requestData->input('expires_at')]->toDateTimeString();

    //     $secret = new Secret();
    //     $secret->content = $encryptedContent;
    //     $secret->phasepass = $requestData->input('phasepass');
    //     $secret->expires_at = $expiresAt;
    //     $secret->unique_string = $uniqueString;
    //     $secret->uuid = $shortUuid;
    //     $secret->is_read = false;
    //     $secret->save();

    //     $link = route('view.secret', ['uuid' => $uniqueString]);

    //     session()->flash('secret_link', $link);
    //     session()->flash('secret_content', $requestData->input('content'));

    //     // Dispatch the job to send the secret link via email
    //     if ($requestData->filled('email')) {
    //         $email = $requestData->input('email');
    //         SecretLinkJob::dispatch($email, $link); // Dispatching the job with email and link
    //     }

    //     return $secret;
    // }
}
