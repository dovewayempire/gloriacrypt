<nav class="navbar py-4">
    <div class="container-xxl">

        <!-- header rightbar icon -->
        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
            {{-- <div class="d-flex">
                <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                    <i style="rgb(98, 137, 237);" class="icofont-user fs-5"></i>
                </a>
            </div> --}}
            {{-- <div class="dropdown zindex-popover">
                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                    <img src="{{asset("backend/assets/images/flag/GB.png")}}" alt="">
                </a>

            </div> --}}



                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                    <div class="u-info me-2">
                        {{-- <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{auth()->user()->email}}</span></p> --}}

                    </div>
                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                        <img class="avatar lg rounded-circle img-thumbnail" src="{{asset('backend/assets/images/profile_av.svg')}}" alt="profile">
                    </a>
                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                        <div class="card border-0 w280">
                            <div class="card-body pb-0">
                                {{-- <div class="d-flex py-1">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{auth()->user()->email}}</span></p>
                                </div> --}}

                             {{-- <div><hr class="dropdown-divider border-dark"></div> --}}
                            </div>
                            <div class="list-group m-2 ">
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button type="submit" class="m-link active" style="background:none; border:none; color: var(--secondary-color) !important; cursor:pointer;">
                                        <i  class=" navbar-icon icofont-logout fs-5"></i> <span class="navbar-text">Logout</span>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


        </div>

        <!-- menu toggler -->
        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
            <span class="icofont-navigation-menu fs-5"></span>
        </button>

        <!-- main menu Search-->
        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">

        </div>

    </div>
</nav>
