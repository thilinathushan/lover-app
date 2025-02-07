@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column" style="min-height: 80vh; background: #fff0f6;">
        <div class="love-letter bg-white rounded shadow p-5"
            style="max-width: 600px; position: relative; font-family: 'Cursive', sans-serif;">
            <!-- Decorative Elements -->
            <div class="position-absolute" style="top: -20px; left: 50%; transform: translateX(-50%);">
                <img src="{{ asset('letter.png') }}" alt="Heart Envelope" style="width: 180px;">
            </div>

            <!-- Valentine's Header -->
            <h2 class="fw-bold text-center" style="color: #ff4d6d; font-size: 2.5rem; margin-bottom: 1rem;">
                My Valentine Wish ❤️
            </h2>

            <!-- Divider -->
            <hr style="border: none; height: 2px; background: linear-gradient(to right, #ff9a9e, #fecfef); margin: 1rem 0;">

            <!-- Custom Message -->
            <p class="mt-4 text-center" style="font-size: 1.2rem; color: #333;">
                @isset($partnerInfo)
                    {{ $partnerInfo->special_note }}
                @endisset
            </p>

            <!-- Romantic Footer -->
            <div class="text-center mt-4">
                <small style="font-size: 0.9rem; color: #777;">"Forever yours, @isset($user)
                        {{ $user->name }}
                    @endisset"</small>
            </div>
        </div>

        {{-- send a reply wish  --}}
        <div class="text-center mt-5">
            <a href="{{ route('loveWish', $token) }}" class="btn btn-lg btn-danger rounded-pill px-4 py-2 ms-3">
                <i class="bi bi-arrow-through-heart"></i>
                Send a Wish
            </a>
        </div>

    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
