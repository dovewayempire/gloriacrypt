<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Customize the appearance of the error page */
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            margin-top: 50px;
            text-align: center;
        }
        .error-code {
            font-size: 10em;
            font-weight: bold;
            color: #dc3545; /* Bootstrap danger color */
        }
        .error-message {
            margin-top: 20px;
            font-size: 2em;
            font-weight: bold;
        }
        .error-description {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 error-container">
                <div class="error-code">500</div>
                <div class="error-message">Oops! Internal Server Error</div>
                <div class="error-description">
                    Sorry, something went wrong on our end. Please try again later.
                </div>
                <div class="error-description">
                    Page Expired
                </div>
                <div class="error-action mt-4">
                    <a href="{{route('welcome')}}" class="btn btn-primary">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
