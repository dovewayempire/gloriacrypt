<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 08:47:26 GMT -->
<head>
      @include('backend.user.patials.main-header')
</head>
<body>
    <div id="ebazar-layout" class="theme-blue" >

        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0" style="background: white;">
            <div class="d-flex flex-column h-100">
                <a href="{{route('user.dashboard')}}" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <img  style="width:100px; background:" src="{{asset('frontend/assets/images/gloriacrypt.jpg')}}" alt="">
                </a>
                <!-- Menu: main ul -->
                   @include('backend.user.patials.main-sidebar')
                <!-- Menu: menu collepce btn -->

                <button style=""  type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
                    <p style="color:rgb(98, 137, 237);">Copyright &copy; {{ date('Y') }} <span >GloriaCrypt</span></p>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                @include('backend.user.patials.main-navbar')
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                   @yield('content')
            </div>



        </div>

    </div>

    @include('backend.user.patials.main-script')
</body>


</html>
