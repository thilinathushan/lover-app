@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card rounded-4 shadow-lg p-5 w-5">
            <div class="mb-5">
                <div class="d-flex justify-content-end mb-4">
                    <form method="POST" action="{{ route('google.logout') }}" class="d-inline" id="logoutForm">
                        @csrf
                        <button type="button" class="btn btn-outline-danger rounded-pill px-4" onclick="signOutAlert()">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Sign Out
                        </button>
                    </form>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('cancel.personalize') }}" class="btn btn-outline-primary rounded-pill px-4">
                        <i class="bi bi-arrow-right me-2"></i>
                        Back to Dashboard
                    </a>
                </div>
                <h2 class="fw-bold text-center mb-4">Admin Dashboard</h2>
            </div>
            <!-- Dashboard Grid -->
            <div class="row g-4">
                <div class="col-md-4">
                    <livewire:total-users />
                </div>

                <div class="col-md-4">
                    <livewire:total-link-created />
                </div>

                <div class="col-md-4">
                    <livewire:total-link-opened />
                </div>
            </div>

            <!-- Proposals Statistics -->
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <livewire:total-proposals />
                </div>

                <div class="col-md-4">
                    <livewire:accepted-proposals />
                </div>

                <div class="col-md-4">
                    <livewire:rejected-proposals />
                </div>
            </div>
            <!-- Recent Activities & Logs -->
            <div class="row g-4 mt-4">
                <div class="col-md-12">
                    <livewire:recent-activities />
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
@endpush
