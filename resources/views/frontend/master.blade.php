<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 21:08:50 GMT -->
<head>
    @include('frontend.partials.main-header')

    @yield('styles')
</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        {{-- <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div> --}}
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="section header-section">

            <div class="container">

                <!-- Header Wrap Start  -->
             @include('frontend.partials.navbar-header')
        <!-- Header End -->

        <!-- Offcanvas Start-->
       @include('frontend.partials.main-offcanvas')
        <!-- Offcanvas End -->


        <!-- Page Banner Start -->
        <div style="position: relative !important; top:90px !important;" class="section page-banner-section" style="background-image: url({{asset('frontend/assets/images/bg/page-banner.jpg')}});">
              @yield('content')
        </div>
        <!-- Page Banner End -->


        <div style="margin-top: 140px;" class="section footer-section footer-section-03" style="background-image: url(assets/images/bg/footer-bg.jpg);">



            <!-- Footer Copyright Start -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="footer-copyright-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- Footer Copyright Text Start -->
                                <div class="copyright-text text-center">
                                    <p style="color:rgb(98, 137, 237);">Copyright &copy; {{ date('Y') }} <span >GloriaCrypt</span></p>
                                </div>
                                <!-- Footer Copyright Text End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>







        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

    </div>

   @include('frontend.partials.main-script')

</body>


<!-- Mirrored from thepixelcurve.com/html/techwix/techwix/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2024 21:08:51 GMT -->
</html>
