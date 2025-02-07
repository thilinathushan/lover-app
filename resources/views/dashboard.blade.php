@extends('layouts.app')

@section('content')
    <!-- Add this after the row of cards -->
    <div class="mt-5 d-flex justify-content-end">
        <form method="POST" action="{{ route('google.logout') }}" class="d-inline" id="logoutForm">
            @csrf
            <button type="button" class="btn btn-outline-danger rounded-pill px-4" onclick="signOutAlert()">
                <i class="bi bi-box-arrow-right me-2"></i>
                Sign Out
            </button>
        </form>
    </div>
    <div class="container mx-auto p-5 text-center">
        <!-- Header Section -->
        <h1 class="fw-bold fs-1 mb-3">Hi, {{ $userData->name }}</h1>
        <p class="text-secondary fs-5">Welcome back to your dashboard. Let’s make this Valentine’s Day unforgettable!</p>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm mt-5" role="alert" id="sessionAlert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle me-2" style="font-size: 1.2rem;"></i>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm mt-5" role="alert" id="sessionAlert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-circle me-2" style="font-size: 1.2rem;"></i>
                    <span>{{ session('error') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Cards Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <!-- Get Personalized Info Card -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <div class="icon-wrapper text-primary mb-3">
                            <i class="bi bi-person-circle fs-1"></i>
                        </div>
                        <h5 class="card-title fw-semibold mb-2">
                            @if ($addPersonalizationForm)
                                Get Personalized Info
                            @else
                                View Personalized Info
                            @endif
                        </h5>
                        <p class="text-secondary mb-4">
                            @if ($addPersonalizationForm)
                                Add your partner’s details and customize the experience.
                            @else
                                View your partner’s details and customize the experience.
                            @endif
                        </p>
                        <a href="{{ route('personalize') }}" class="btn btn-primary rounded-pill px-4">
                            Go
                        </a>
                    </div>
                </div>
            </div>

            <!-- Get Shareable Link Card -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <div class="icon-wrapper text-success mb-3">
                            <i class="bi bi-link-45deg fs-1"></i>
                        </div>
                        <h5 class="card-title fw-semibold mb-2">Get Love Link</h5>
                        <p class="text-secondary mb-4">Generate a unique link to share with your partner.</p>
                        <a href="{{ route('shareLink') }}" class="btn btn-success rounded-pill px-4">
                            Generate
                        </a>
                    </div>
                </div>
            </div>

            <!-- View Responses Card -->
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-4">
                    <div class="card-body text-center">
                        <div class="icon-wrapper text-danger mb-3">
                            <i class="bi bi-chat-dots fs-1"></i>
                        </div>
                        <h5 class="card-title fw-semibold mb-2">View Responses</h5>
                        <p class="text-secondary mb-4">See your partner's responses to your proposal.</p>
                        <a href="{{ route('viewResponse') }}" class="btn btn-danger rounded-pill px-4 text-white">
                            View
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function signOutAlert() {
            Swal.fire({
                icon: 'success',
                title: 'Sign Out!',
                html: 'You have been successfully logged out!<br><strong>#BeMyValentine</strong>',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                background: '#fff0f6',
                iconColor: '#ff4d6d'
            }).then(() => {
                document.getElementById('logoutForm').submit();
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Automatically dismiss the alert after 5 seconds (5000 ms)
            const alertElement = document.getElementById('sessionAlert');
            if (alertElement) {
                setTimeout(() => {
                    const alert = new bootstrap.Alert(alertElement);
                    alert.close();
                }, 5000); // Time in milliseconds
            }
        });
    </script>
@endpush
