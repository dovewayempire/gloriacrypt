@extends('frontend.master')

@section('title', 'GloriaCrypt || link')

@push('styles')
<style>
    .btn-very-small {
        padding: 2px 5px;
        font-size: 13px;
        width: 150px;
        height: 25px;
        position: relative;
        margin: auto;
        text-align: center;
        justify-items: center;
    }

    .link-bg {
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        background-color: #42b9ff !important;
        padding: 4px 5px;
        border-radius: 3px;
        text-decoration: none;
        height: 50px !important;
        width: 70% !important;
        position: relative;
        margin: auto;
        text-align: center;
        justify-items: center;
    }

    @media (max-width: 767px) {
        .link-bg {
            font-size: 13px !important;
            width: 100%;
            padding: 6px 3px;
        }
    }
</style>
@endpush

@section('content')
<div class="section page-banner-section" style="background-image: url({{ asset('frontend/assets/images/bg/page-banner.jpg') }});">
    <div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02" style="position:relative; top: 1px !important; padding-top:2px !important;">
        <div class="container">
            <div class="contact-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-form">
                            <div class="contact-form-wrap">
                                <div class="heading-wrap text-center">
                                    <span class="sub-title">Paste a password, secret message or private link below.</span>
                                    <h6>Keep sensitive info out of your email and chat logs.</h6>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 "   >
                                        @if(session('secret_link') && session('secret_content'))
                                        <p class="text-center">Secret Link:
                                            <div id="textToCopy" class="link-bg" style="">
                                                <a class="text-center " style="width: 60% !imoortant; height: 40%; position: relative; margin:auto;color: white !important;" href="{{ session('secret_link') }}">{{ session('secret_link') }}</a>
                                            </div>
                                        </p>
                                          <div class="col-sm-12" style="color:white; width:100%;">
                                            <div class="form-btn">
                                                <button onclick="copyText('textToCopy')" type="button" class="btn btn-info  btn-very-small" title="Copy Link" style="width: 70%; height: 40%; position: relative; margin:auto;">Copy Link Above</button>
                                            </div>
                                          </div>
                                        <p class="text-center "> <span class="text-primary">Your Secret Content:</span> {{ session('secret_content') }}</p>
                                    @else
                                        @if($uuid && $uuid->expires_at)
                                            <p>Expires At: {{ $uuid->expires_at->format('d F Y') }}</p>
                                        @endif
                                    @endif
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="form-btn">
                                            <a style="color:white; width:100%;" href="{{ route('welcome') }}">
                                                <button style="color: white" class="btn" type="submit">Generate Link</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('child-scripts')
<script>
    function copyText(elementId) {
        var textToCopy = document.getElementById(elementId).textContent;
        var textArea = document.createElement('textarea');

        // Set the text content to be copied
        textArea.value = textToCopy;

        // Append the textarea to the body
        document.body.appendChild(textArea);

        // Select the text in the textarea
        textArea.select();

        // Copy the text to the clipboard
        document.execCommand('copy');

        // Remove the textarea from the body
        document.body.removeChild(textArea);

        // Use SweetAlert for a more visually appealing notification
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Link copied to clipboard.',
            showConfirmButton: false,
            timer: 1500 // Adjust the timer as needed
        });
    }
</script>
<script>
    function copyToClipboard() {
        var copyText = document.getElementById("secret-link").href;
        var textarea = document.createElement("textarea");
        textarea.value = copyText;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        alert("Secret link copied to clipboard: " + copyText);
    }
</script>
@endpush


