@extends('layouts.app')

@section('content')
    <div class="container text-center mt-3">
        <img class="mt-3" src="{{ asset('letter.png') }}" alt="app-logo" style="width: 180px;">

        <h1 class="display-4 fw-bold">Be My Valentine</h1>
        <p class="lead">Create unforgettable Valentine moments with personalized messages and real-time proposals!</p>

        <img class="my-5" src="{{ asset('mocha-bear-hearts.gif') }}" alt="gif" width="220px">


        <!-- Google Login Button -->
        <div class="row">
            <div class="mx-auto">
                <a href="{{ route('welcomePage') }}" class="btn btn-danger btn-lg">
                    <i class="bi bi-arrow-through-heart-fill me-2"></i>
                    Get Started
                </a>
            </div>
        </div>

        <div class="features my-5">
            <h3 class="mb-4 text-center fw-bold">Why Choose Be My Valentine?</h3>
            <div class="row justify-content-center g-3">
                <div class="col-md-4 col-lg-3 div-cards" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="align-items-start justify-content-between card h-100 fs-5 rounded-4 p-4 shadow-lg text-bg-white border-0">
                        <span class="d-flex align-items-center justify-content-center bg-danger rounded-circle mb-3"
                            style="width: 40px; height: 40px; --bs-bg-opacity: .5;">
                            <i class="bi bi-heart-fill fs-4 text-danger"></i>
                        </span>
                        <h3 class="h3 fw-bold text-start">Personalized Proposals</h3>
                        <p class="text-start">Create heartfelt messages for your loved ones.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 div-cards" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="align-items-start justify-content-between card h-100 fs-5 rounded-4 p-4 shadow-lg text-bg-white border-0">
                        <span class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-3"
                            style="width: 40px; height: 40px; --bs-bg-opacity: .5;">
                            <i class="bi bi-clock-fill fs-4 text-primary"></i>
                        </span>
                        <h3 class="h3 fw-bold text-start">Real-Time Tracking</h3>
                        <p class="text-start">Know when your Valentine says "Yes" instantly.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 div-cards" data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="align-items-start justify-content-between card h-100 fs-5 rounded-4 p-4 shadow-lg text-bg-white border-0">
                        <span class="d-flex align-items-center justify-content-center bg-success rounded-circle mb-3"
                            style="width: 40px; height: 40px; --bs-bg-opacity: .5;">
                            <i class="bi bi-person-circle fs-4 text-success"></i>
                        </span>
                        <h3 class="h3 fw-bold text-start">Easy Access</h3>
                        <p class="text-start">Sign in with Google for a seamless experience.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        .features .card {
            transition: transform 0.3s ease-in-out;
        }

        .features .card:hover {
            transform: translateY(-5px);
            /* Subtle lift effect */
        }

        .features .card:hover span.rounded-circle {
            transform: scale(1.2);
            /* Scale the icon on card hover */
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // Animation duration
            once: true, // Animate only once
        });
    </script>
@endpush
