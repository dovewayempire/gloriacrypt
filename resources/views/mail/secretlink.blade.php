<!DOCTYPE html>
<html>
<head>
    <title>Your Secret Link</title>
</head>
<body>
    {{-- <h6>We have a secret for you from </h6>
    <p>Here is your secret link: <a style="color: red;" href="{{ $link }}">{{ $link }}</a></p> --}}

    <p>You have a new secret message. Click the link below to view it:</p>
    <p><a href="{{ $link }}">{{ $link }}</a></p>


    <p>This link is only valid for a single use.</p>


    <p>Best Regards </p>

    <p>GloriaCrypt</p>
</body>
</html>
