@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column"
        style="min-height: 80vh; background: #fff0f6;">
        <div class="container me-auto p-5">
            <a href="{{ route('cancel.personalize') }}" class="text-decoration-none text-secondary semibold">
                <i class="bi bi-arrow-left-circle"></i> Back to Dashboard
            </a>
        </div>
        <div class=" bg-white rounded-5 shadow p-5"
            style="max-width: 800px; position: relative; font-family: 'Cursive', sans-serif;">
            <!-- Decorative Elements -->
            <div class="position-absolute" style="top: -20px; left: 50%; transform: translateX(-50%);">
                <img src="{{ asset('letter.png') }}" alt="Heart Envelope" style="width: 180px;">
            </div>

            <!-- Valentine's Header -->
            <h2 class="fw-bold text-center" style="color: #ff4d6d; font-size: 2.5rem; margin-bottom: 1rem;">
                Your Valentine's Response ❤️
            </h2>

            <!-- Divider -->
            <hr style="border: none; height: 2px; background: linear-gradient(to right, #ff9a9e, #fecfef); margin: 1rem 0;">
            <div class="response-details my-3 text-center">
                @if ($proposal->status === 'Accepted')
                    <h4 class="fw-bold text-success animated-pulse">🎉 Your Partner Said Yes!!! 💖</h4>
                @else
                    <h4 class="fw-bold text-danger animated-shake">💔 Your Partner Declined 💔</h4>
                @endif

                <p class="text-muted mt-2"><i class="bi bi-calendar-heart"></i> Love Link Opened at:
                    {{ \Carbon\Carbon::parse($proposal->link_opened_at)->format('F jS Y, g:i:s A') }}</p>
            </div>
            <hr style="border: none; height: 2px; background: linear-gradient(to right, #ff9a9e, #fecfef); margin: 1rem 0;">

            <!-- Custom Message -->
            <p class="mt-4 text-center" style="font-size: 1.2rem; color: #333;">
                @isset($proposal)
                    {{ $proposal->custom_message }}
                @endisset
            </p>

            <!-- Romantic Footer -->
            <div class="text-center mt-4">
                <small style="font-size: 0.9rem; color: #777;">"Forever yours, @isset($partner)
                        {{ $partner->partner_name }}
                    @endisset"</small>
            </div>


        </div>

        {{-- send a reply wish  --}}
        <div class="text-center my-5">
            <button class="btn btn-lg btn-danger rounded-pill px-4 py-2 ms-3" onclick="copyToClipboard()">
                <i class="bi bi-arrow-through-heart"></i>
                Share the Love
            </button>
        </div>

    </div>
@endsection

@push('styles')
    <style>
        /* Animated Pulse for Yes */
        .animated-pulse {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Animated Shake for No */
        .animated-shake {
            animation: shake 0.5s infinite;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function copyToClipboard() {
            navigator.clipboard.writeText('https://love.thilinathushan.dev');
            Swal.fire({
                icon: 'success',
                title: '💖 Link Copied!',
                html: 'Share your love with friends!<br><strong>#BeMyValentine</strong>',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                background: '#fff0f6',
                iconColor: '#ff4d6d'
            });
        }
    </script>
@endpush

@section('footer')
    <x-footer />
@endsection
