<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'default, keywords')">
    <meta name="author" content="Your Name">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/flaticon.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @stack('styles')
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
<style>
    #secret-content {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            resize: none; /* Prevent resizing */
        }




        #secret-content {
            display: none;
        }
        #secret-content {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            resize: none; /* Prevent resizing */
        }



        .btn-very-small {
        padding: 2px 5px;
        font-size: 13px;
        width: 90px;
        height: 25px;
    }

    .link-bg{
              color: white;
                 font-family: Arial, Helvetica, sans-serif;
                 font-size: 20px;
                background-color: blue;
                padding: 4px 5px;
                border-radius: 3px;
                text-decoration: none;
               height: 40px;
               width: 75%;
               text-align: center;
    }

    @media (max-width: 767px) {
        .link-bg {
            font-size: 8px; /* Adjust to desired size for mobile */
            width: 100%; /* Adjust width for better mobile display */
            padding: 6px 3px; /* Adjust padding for better mobile display */
        }
    }
</style>
