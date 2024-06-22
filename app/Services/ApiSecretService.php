<?php
namespace App\Services;

use App\Models\Secret;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SecretLinkJob;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ApiSecretRequest;
class ApiSecretService
{
    // public function userSecret(array $requestData)
    // {
    //     $this->validateUserSecretRequest($requestData);

    //     $secretData = $this->prepareSecretData($requestData);

    //     $secretData['users_id'] = Auth::id();

    //     $secret = $this->saveSecret($secretData);

    //     if (isset($requestData['email'])) {
    //         $this->dispatchSecretLinkJob($requestData['email'], $secret);
    //     }

    //     return $this->generateResponse($secret);
    // }

    // private function validateUserSecretRequest(array $requestData)
    // {
    //     $validator = Validator::make($requestData, [
    //         'content' => 'required|string',
    //         'expires_at' => 'required|string',
    //         'email' => 'nullable|email',
    //     ]);

    //     if ($validator->fails()) {
    //         throw new \Exception($validator->errors()->first());
    //     }
    // }

    // private function prepareSecretData(array $requestData)
    // {
    //     $uniqueString = Str::random(16);
    //     $uuid = (string) Str::uuid();
    //     $shortUuid = substr(base64_encode($uuid), 0, 16);

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
    //     $expiresAt = $expirationMapping[$requestData['expires_at']]->toDateTimeString();

    //     return [
    //         'content' => Crypt::encryptString($requestData['content']),
    //         'phasepass' => $requestData['phasepass'] ?? null,
    //         'expires_at' => $expiresAt,
    //         'unique_string' => $uniqueString,
    //         'uuid' => $shortUuid,
    //     ];
    // }

    // private function saveSecret(array $secretData)
    // {
    //     return Secret::create($secretData);
    // }

    // private function dispatchSecretLinkJob($email, $secret)
    // {
    //     $link = route('api.view.secret', ['uuid' => $secret->unique_string]);
    //     SecretLinkJob::dispatch($email, $link);
    // }

    // private function generateResponse($secret)
    // {
    //     $link = route('api.view.secret', ['uuid' => $secret->unique_string]);
    //     return response()->json(['success' => true, 'link' => $link, 'uuid' => $secret->uuid], 201);
    // }



    public function store(array $validatedData)
    {
        return $this->processSecret($validatedData);
    }

    public function userSecret(array $validatedData)
    {
        $validatedData['users_id'] = Auth::id();
        return $this->processSecret($validatedData);
    }

    private function processSecret(array $validatedData)
    {
        $secretData = $this->prepareSecretData($validatedData);
        $secret = $this->saveSecret($secretData);

        if (isset($validatedData['email'])) {
            $this->dispatchSecretLinkJob($validatedData['email'], $secret);
        }

        return $this->generateResponse($secret);
    }

    private function prepareSecretData(array $validatedData)
    {
        $uniqueString = Str::random(16);
        $uuid = (string) Str::uuid();
        $shortUuid = substr(base64_encode($uuid), 0, 16);

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
        $expiresAt = $expirationMapping[$validatedData['expires_at']]->toDateTimeString();

        return [
            'content' => Crypt::encryptString($validatedData['content']),
            'phasepass' => $validatedData['phasepass'] ?? null,
            'expires_at' => $expiresAt,
            'unique_string' => $uniqueString,
            'uuid' => $shortUuid,
            'users_id' => $validatedData['users_id'] ?? null, // Add users_id if present
        ];
    }

    private function saveSecret(array $secretData)
    {
        return Secret::create($secretData);
    }

    private function dispatchSecretLinkJob($email, $secret)
    {
        $link = route('api.view.secret', ['uuid' => $secret->unique_string]);
        SecretLinkJob::dispatch($email, $link);
    }

    private function generateResponse($secret)
    {
        $link = route('api.view.secret', ['uuid' => $secret->unique_string]);
        return response()->json(['success' => true, 'link' => $link, 'uuid' => $secret->uuid], 201);
    }
}
