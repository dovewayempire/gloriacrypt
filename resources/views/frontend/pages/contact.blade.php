@extends('frontend.master')
@section('title', 'GloriaCrypt')
@section('meta_description', 'This is the home page of our website.')
@section('meta_keywords', 'home, page, website')
@section('content')
<div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02" style="position:relative; top: 1px !important; padding-top:2px !important;">
    <div class="container">
        <!-- Contact Wrap Start -->
        <div class="contact-info-wrap">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon">
                            <img src="{{asset('frontend/assets/images/info-1.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h5 class="title">Give us a call</h5>
                            <p>+447769767611</p>
                            <p>(+4) 47769767611</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon">
                            <img src="{{asset('frontend/assets/images/info-2.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h5 class="title">Drop us a line</h5>
                            <p>contact@gloriacrypt.com</p>
                            <p>support@gloriacrypt.com</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!--Single Contact Info Start -->
                    <div class="single-contact-info text-center">
                        <div class="info-icon">
                            <img src="{{asset('frontend/assets/images/info-3.png')}}" alt="">
                        </div>
                        <div class="info-content">
                            <h5 class="title">Visit our office</h5>
                            <p>New York. 112 W 34th St caroline, USA</p>
                        </div>
                    </div>
                    <!--Single Contact Info End -->
                </div>
            </div>
        </div>
        <!-- Contact Wrap End -->
    </div>
</div>

@endsection
