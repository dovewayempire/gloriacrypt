<div class="header-wrap" >

    <div class="header-logo">
        <a href="{{route('welcome')}}"><img src="{{asset('frontend/assets/images/gloriacrypt.jpg')}}" alt=""></a>
    </div>

    <div class="header-menu d-none d-lg-block">
        <ul class="main-menu">
            <li>
                <a href="{{route('welcome')}}">Home</a>

            </li>
            <li>
                <a href="{{route('frontend.aboutus')}}">About Us</a>
            </li>

            <li class="active-menu"><a href="{{route('frontend.contactus')}}">Contact</a></li>
        </ul>
    </div>

    <!-- Header Meta Start -->
    <div class="header-meta">
        <!-- Header Cart Start -->

        <!-- Header Cart End -->
        <!-- Header Search Start -->
        <div class="header-search">
            <div class="header-btn d-none d-xl-block">
                <a class="btn" href="{{route('getRegister')}}">Register</a>
            </div>
        </div>
        <!-- Header Search End -->

        <div class="header-btn d-none d-xl-block">
            <a class="btn" href="{{route('getLogin')}}">Login</a>
        </div>
        <!-- Header Toggle Start -->
        <div class="header-toggle d-lg-none">
            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- Header Toggle End -->
    </div>
    <!-- Header Meta End  -->

</div>
<!-- Header Wrap End  -->

</div>
</div>
