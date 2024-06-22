@extends('frontend.master')
@section('title', 'Generated link')
@section('meta_description', 'This is the home page of our website.')
@section('meta_keywords', 'home, page, website')

    @section('styles')
    <style>
        #secret-content {
            display: none;
        }
        #secret-content {
            width: 100%;
            height: 150px;
            border: 1px solid #ccc;
            padding: 10px;
            font-family: Arial, cursive;

            font-size: 14px;
            resize: none; /* Prevent resizing */
        }
    </style>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
@section('content')
<div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02" style="position:relative; top: 1px !important; padding-top:2px !important;">
    <div class="container">
        <!-- Contact Wrap Start -->
        <div class="contact-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <div class="contact-form-wrap">
                            {{-- @if ($errors->has('phasepass'))
                            <p id="error-message" style="color: red;">{{ $errors->first('phasepass') }}</p>
                            @endif --}}

                            @if ($errors->has('phasepass'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('phasepass') }}
                                </div>
                            @endif


                            <div class="heading-wrap text-center">
                                <span class="sub-title"> With Gloriacrypt, you can securely encrypt and share sensitive information effortlessly..</span>
                                <h6>Utilizing Gloriacrypt's advanced features, you can ensure that your encrypted data is accessible for only one viewing and automatically expires afterward, enhancing security and confidentiality..</h6>
                            </div>

                            @if ($expired)
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @else
                            @if(session('secret_link'))
                            @if (!$phasepassRequired)
                                <form id="mask-content-form" action="{{ route('mask.secret.content', ['id' => $secret->unique_string]) }}" method="POST">
                                    @csrf

                                    <p id="secret-content">{{ $decryptedContent }}</p>
                                    {{-- <p id="message" style="color: red;"></p> --}}
                                    <div class="form-group mt-3">
                                        <button id="viewSecretBtn" type="submit" class="form-control btn btn-primary text-white">View Secret</button>
                                    </div>

                                </form>
                                <div class="form-group mt-3 col-sm-12"  id="replySecretContainer" style="display: none;">

                                    <a   style="color:white; width:100%;" href="{{route('welcome')}}">
                                        <button  id="replySecretBtn" style="color: white; width:100%;"  class="btn" type="submit">
                                            Reply with another Secret
                                        </button>
                                       </a>
                                </div>
                            @else
                                <!-- If phasepass is required, show the form to enter phasepass -->
                                <p id="secret-content">{{ session('content') }}</p>

                                <form id="phasepass-form" action="{{ route('check.phasepass', ['id' => $secret->unique_string]) }}" method="POST">
                                    @csrf
                                    @if(!$secret->is_read)

                                    <div class="form-group" id="phasepass">
                                        <label for="phasepass">Enter Phasepass:</label>
                                        <input type="text" name="phasepass" id="phasepass" class="form-control" required>
                                    </div>
                                    @else

                                @endif

                                    @if(!$secret->is_read)
                                    <button id="viewSecretBtn" type="submit" class="form-control btn btn-primary text-white">View Secret</button>

                                </form>
                                @else
                                <a href="{{route('welcome')}}" class="form-control btn btn-secondary text-white">Reply with a Secret</a>
                            @endif
                            @endif
                            <p><strong>Expired At:</strong> {{ $expiration }} </p>
                        @else
                            <p>This secret does not exist or has already been viewed.</p>
                        @endif
                        @endif

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
@push('child-scripts')

<script>
    document.getElementById('viewSecretBtn').addEventListener('click', function() {
        // Hide the "View Secret" button
        this.style.display = 'none';

        // Display the "Reply with another Secret" button
        document.getElementById('replySecretContainer').style.display = 'block';
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        @if (session('content'))
            $('#secret-content').show();
        @endif
        @if ($errors->has('phasepass'))
            $('#error-message').show();
        @endif
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#mask-content-form').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#secret-content').text(response.content).show();
                        $('#message').hide(); // Hide the error message
                    } else {
                        $('#message').text(response.message).show();
                        $('#secret-content').hide(); // Hide the secret content
                    }
                },
                error: function() {
                    $('#message').text('An error occurred while processing your request.').show();
                    $('#secret-content').hide(); // Hide the secret content
                }
            });
        });
    });
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
<!-- Jquery Core Js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- JS
   @endpush
