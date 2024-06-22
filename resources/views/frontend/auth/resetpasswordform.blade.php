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
                            <h2 class="title text-center" style="color: rgb(67, 129, 222);">Change Password</h2>
                        </div>
                        <!-- Section Title End -->
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="login-register-form">
                            <form class="form" action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="single-form">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter yout Email ">
                                </div>
                                <div class="single-form">
                                    <label for="">Password</label>
                                    <input type="text"  name="password" class="form-control" placeholder="Enter Your Password">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                              <div class="single-form">
                                <label for="">Confirm Password</label>
                                <input type="text"  name="password_confirmation" class="form-control" placeholder="Enter Your Confirm password">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror

                                <div class="form-btn">
                                    <button class="btn">Reset Password</button>
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
