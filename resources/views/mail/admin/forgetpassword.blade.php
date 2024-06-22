<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password Email</title>
</head>
<body>
    <h1>Admin Forget Password Email</h1>

    Click to
    <p>Click the link below to reset your password:</p>
    <a href="{{ url('admin/password/reset/' . $token) }}">Reset Password</a>

</body>
</html>
