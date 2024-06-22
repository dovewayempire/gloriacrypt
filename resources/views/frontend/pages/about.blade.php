@extends('frontend.master')
@section('title', 'GloriaCrypt')
@section('meta_description', 'This is the home page of our website.')
@section('meta_keywords', 'home, page, website')
@section('content')
<div class="section techwix-about-section-07 section-padding">

    <div class="shape-1"></div>

    <div class="container">
        <!-- About Wrapper Start -->
        <div class="about-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <!-- About Image Wrap Start -->
                    <div class="about-img-wrap">
                        <img class="shape-1" src="{{asset('frontend/assets/images/shape/about-shape2.png')}}" alt="">
                        <div class="about-img">
                            <img src="{{asset('frontend/assets/images/about-3.jpg')}}" alt="">
                        </div>
                        <div class="about-img about-img-2">
                            <img src="{{asset('frontend/assets/images/about-4.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- About Image Wrap End -->
                </div>
                <div class="col-lg-6">
                    <!-- About Content Wrap Start -->
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h3 class="sub-title">Who we are</h3>
                            <h2 class="title">Highly Tailored, Encrypted, and Secure One-Time Message Services                            </h2>
                        </div>
                        <p class="text">Accelerate innovation with world-class tech teams We’ll match you to an entire remote team of incredible freelance talent for all your software development needs.</p>
                        <!-- About List Start -->
                        <div class="about-list-03">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="about-list-item-03">
                                        <h3 class="title">Our Mission</h3>
                                        <p>Accelerate innovation with world-class tech teams. We help businesses elevate their value.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="about-list-item-03">
                                        <h3 class="title">Custom Code</h3>
                                        <p>Accelerate innovation with world-class tech teams. We help businesses elevate their value.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About List End -->
                    </div>
                    <!-- About Content Wrap End -->
                </div>
            </div>
        </div>
        <!-- About Wrapper End -->
    </div>
</div>

@endsection
