<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 08:48:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GloriaCrypt || Password Reset </title>
    {{-- <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon--> --}}

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/ebazar.style.min.css')}}">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5 ">

            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">




                        <div class="col-lg-12 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                                <!-- Form -->
                                <form action="{{route('admin.forget.password.link')}}" method="POST" class="row g-1 p-3 p-md-4">
                                     @csrf
                                    <div class="col-12 text-center mb-5">
                                        <h1>Forgot password?</h1>

                                    </div>

                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="admin@example.com">
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12 text-center mt-4">
                                            <button  class="btn btn-lg btn-block btn-primary lift text-uppercase" atl="signin">Send Reset Link</button>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span class="text-muted"><a href="{{route('admin.login')}}" class="text-secondary">Back to Sign in</a></span>
                                    </div>


                                </form>
                                <!-- End Form -->

                            </div>
                        </div>


                </div>a
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 08:48:59 GMT -->
</html>
