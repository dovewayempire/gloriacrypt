<div class="offcanvas offcanvas-start" id="offcanvasExample">
    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="index.html"><img src="assets/images/logo-white.png" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
    </div>

    <!-- Offcanvas Body Start -->
    <div class="offcanvas-body">
        <div class="offcanvas-menu">
            <ul class="main-menu">
                <li>
                    <a href="{{route('welcome')}}">Home</a>

                </li>
                <li>
                    <a href="#">About Us</a>
                </li>

                <li class=""><a href="#">Contact</a></li>
                <li class=""><a class="" href="{{route('getLogin')}}">Login</a></li>
                <li class=""> <a class="" href="{{route('getRegister')}}">Register</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Body End -->
</div>
