@extends('layouts.app')

@section('content')
    <div class="container text-center py-5">
        <!-- Header -->
        <h1 class="fw-bold fs-1 text-pink mb-4">Send Your Valentine Wish 💌</h1>
        <p class="text-secondary mb-4">Write a heartfelt message to make their day extra special!</p>

        <!-- Love Letter Design -->
        <div class="card mx-auto p-4 shadow rounded-4 bg-light-pink" style="max-width: 600px; border: 2px solid #ffccd5;">
            <div class="card-body">
                <!-- Animated Heart Icon -->
                <div class="mb-4">

                    <div class="position-absolute" style="top: -20px; left: 50%; transform: translateX(-50%);">
                        <img src="{{ asset('letter.png') }}" alt="Heart Envelope" style="width: 180px;">
                    </div>
                </div>

                <!-- Form -->
                <form method="POST" action="{{ route('loveWish.store', $token) }}">
                    @csrf
                    <div class="mb-4">
                        <label for="wish" class="form-label fw-semibold">Valentine Wish</label>
                        <textarea name="wish" id="wish" class="form-control rounded-4 shadow-sm p-3" rows="5"
                            placeholder="Type your Valentine wish here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger rounded-pill px-5 py-2">Send Wish ❤️</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('styles')
    <style>
        body {
            background-color: #ffe4e1;
            /* Light pink background */
        }

        .text-pink {
            color: #ff5c8a;
        }

        .bg-light-pink {
            background-color: #fff0f3;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }
    </style>
@endpush
