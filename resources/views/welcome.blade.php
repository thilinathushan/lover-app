@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <img class="mt-5" src="{{ asset('letter.png') }}" alt="app-logo" style="width: 180px;">
        <h3 class="display-5 fw-bold">Be My Valentine</h3>
        <p class="mb-3 text-muted">Let’s make this Valentine’s Day unforgettable!</p>

        <livewire:valentine.display-text />

        <livewire:valentine.display-gif />

        <!-- Google Login Button -->
        <div class="row mt-3">
            <div class="mx-auto">
                <a href="{{ route('google.login') }}" class="google-btn">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo">
                    Continue with Google
                </a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('styles')
    <style>
        .google-btn {
            /* display: flex; */
            align-items: center;
            justify-content: center;
            background-color: white;
            color: #757575;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            border: 1px solid #dadce0;
            border-radius: 4px;
            padding: 10px 15px;
            width: 250px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        .google-btn:hover {
            background-color: #f8f9fa;
            border-color: #c1c1c1;
        }
    </style>
@endpush
