@extends('frontend.master')
@section('content')
<div class="section login-register-section section-padding-02" style="position:relative; top: 1px !important; padding-top:2px !important;">
    <div class="container">

        <!-- Login & Register Wrapper Start -->
        <div class="login-register-wrap">
            <div class="container">
                <div class="container col-lg-6">

                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title" style="color: rgb(67, 129, 222);">Login</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <form class="form" action="{{route('postLogin')}}" method="POST">
                                @csrf
                                <div class="single-form">
                                    <input type="text" name="email" class="form-control" placeholder="Email ">
                                </div>
                                <div class="single-form">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-btn">
                                    <button class="btn">Login</button>
                                </div>
                                <div class="single-form">
                                    <p><a href="#">Lost your password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login & Register Box End -->

                </div>

            </div>
        </div>
        <!-- Login & Register Wrapper End -->

    </div>
</div>

@endsection
