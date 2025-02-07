@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="fw-bold fs-1 text-danger mb-3">Oops! 🥺</h1>
            <p class="fs-5 text-secondary mb-4">
                It seems like the shareable link you tried to access is either <strong>invalid</strong> or
                <strong>expired</strong>.
            </p>
            <img src="{{ asset('oops-404.gif') }}" alt="Oops illustration" class="img-fluid mb-4"
                style="max-width: 300px;">
            <p class="fs-6 mb-5">
                Don’t worry, you can reach out to the sender to generate a new link or head back to the homepage.
            </p>
            <a href="/" class="btn btn-primary rounded-pill px-4 py-2">
                <i class="bi bi-house-door me-2"></i> Back to Home
            </a>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
