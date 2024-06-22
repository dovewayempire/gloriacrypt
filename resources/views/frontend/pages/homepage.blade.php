@extends('frontend.master')
@section('title', 'GloriaCrypt')
@section('meta_description', 'This is the home page of our website.')
@section('meta_keywords', 'home, page, website')
@section('content')
<div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02" style="position:relative; top: 1px !important; padding-top:2px !important; background-image: url({{ asset('frontend/assets/images/bg/page-banner.jpg') }});">
    <div class="container">
        <!-- Contact Wrap Start -->
        <div class="contact-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <div class="contact-form-wrap">
                            <div class="heading-wrap text-center">
                                <span class="sub-title"> With GloriaCrypt, you can securely encrypt and share sensitive information effortlessly..</span>
                                <h6>Utilising GloriaCrypt's advanced features, you can ensure that your encrypted data is accessible for only one viewing and automatically expires afterwards, enhancing security, integrity, assesibility and confidentiality..</h6>
                            </div>
                            @if (session('secret_link'))
                            {{-- <div class="alert alert-success">
                                Secret link created: <a href="{{ session('secret_link') }}">{{ session('secret_link') }}</a>
                                <button class="copy-button" onclick="copyToClipboard()">Copy</button>
                            </div> --}}
                            @endif
                            <form action="{{ route('store.secret') }}" method="POST">
                                @csrf
                                <div class="row">



                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label for="content">Content</label>
                                            <textarea   name="content" placeholder="Secret content goes here...."></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <Label>Phasepass</Label>
                                            <input type="text" name="phasepass" class="form-control" placeholder="" />
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <select name="expires_at" id="expires_at" class="form-control" required style="height: 55px;">
                                                <option value="1d">1 Day</option>
                                                <option value="7d">7 Days</option>
                                                <option value="2d">2 Days</option>

                                                <option value="12h">12 Hours</option>
                                                <option value="4h">4 Hours</option>
                                                <option value="1h">1 Hour</option>
                                                <option value="30m">30 Minutes</option>
                                                <option value="5m">5 Minutes</option>
                                            </select>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!--  Single Form Start -->
                                        <div class="form-btn">
                                            <button style="width: 100%;" class="btn" type="submit">Generate Link</button>
                                        </div>
                                        <!--  Single Form End -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
        <!-- Contact Wrap End -->
    </div>
</div>

@endsection
