@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">
        <!-- Animated Header -->
        <div class="mb-5">
            <h1 class="fw-bold" style="font-size: 3rem;">
                <span
                    style="background: linear-gradient(to right, #ff6ec4, #7873f5); -webkit-background-clip: text; color: transparent;">
                    Thank You for Sharing the Love!
                </span>
            </h1>
            <p class="text-muted fs-5">Let’s make this Valentine’s Day unforgettable together! ❤️</p>
        </div>

        <!-- Vibrant Hashtag -->
        <div class="mb-4">
            <h2 class="fw-bold" style="font-size: 3rem; font-family: 'Dancing Script', cursive;">
                <span
                    style="background: linear-gradient(to right, #F4119E, #f76da6); -webkit-background-clip: text; color: transparent;">
                    #BeMyValentine
                </span>
            </h2>
        </div>

        <!-- Call to Action Section -->
        <div class="card shadow-lg mx-auto"
            style="max-width: 600px; border-radius: 20px; background: linear-gradient(145deg, #ffe6f0, #ffd1e9);">
            <div class="position-absolute" style="top: -20px; left: 50%; transform: translateX(-50%);">
                <img src="{{ asset('letter.png') }}" alt="Heart Envelope" style="width: 180px;">
            </div>
            <div class="card-body py-5 px-3 mt-5">
                <!-- Social Media Share Buttons -->
                <div class="d-flex justify-content-center mb-4 flex-wrap">
                    <a href="#" class="btn btn-twitter me-2 mb-2"
                        style="border-radius: 30px; background-color: #1DA1F2; color: white;">
                        <i class="bi bi-twitter"></i> Twitter
                    </a>
                    <a href="#" class="btn btn-facebook me-2 mb-2"
                        style="border-radius: 30px; background-color: #1877F2; color: white;">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                    <a href="#" class="btn btn-whatsapp mb-2"
                        style="border-radius: 30px; background-color: #25D366; color: white;">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <!-- Copy Link -->
                <div class="input-group mt-4">
                    <input type="text" class="form-control" value="{{ config('app.url') }}" id="shareLink" readonly
                        style="border-radius: 20px 0 0 20px;">
                    <button class="btn btn-pink" onclick="copyLink()"
                        style="border-radius: 0 20px 20px 0; background: linear-gradient(to right, #F4119E, #f76da6); color: white;">
                        <i class="bi bi-clipboard"></i> Copy Link
                    </button>
                </div>

                <!-- Success Message -->
                <small id="copySuccess" class="text-success mt-2 d-none">Link copied to clipboard!</small>
            </div>
        </div>

        <!-- Encouragement Section -->
        <div class="mt-5">
            <p class="fs-5 text-muted">Spread the love and make someone’s day brighter! 🌟</p>
            <img src="{{ asset('thilina-thushan-dev.png') }}" alt="Lovely decoration"
                style="max-width: 150px; animation: bounce 2s infinite;">
        </div>
    </div>

    <style>
        .btn-twitter:hover,
        .btn-facebook:hover,
        .btn-whatsapp:hover {
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('scripts')
    <script>
        function copyLink() {
            const linkInput = document.getElementById('shareLink');
            linkInput.select();
            document.execCommand('copy');
            document.getElementById('copySuccess').classList.remove('d-none');
            setTimeout(() => {
                document.getElementById('copySuccess').classList.add('d-none');
            }, 2000);
        }
    </script>
@endpush
