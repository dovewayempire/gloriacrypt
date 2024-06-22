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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="section-title tex-center">
                            <h2  class="title text-center" style="color: rgb(67, 129, 222);">Registration</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <form class="form" action="{{route('postRegister')}}" method="POST">
                                @csrf
                                <div class="single-form">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email ">
                                </div>
                                <div class="single-form">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="single-form">
                                    <input type="password"name="password_confirmation"  class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="form-btn">
                                    <button class="btn">Register</button>
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
