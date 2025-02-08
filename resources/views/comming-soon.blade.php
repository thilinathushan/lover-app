@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <livewire:valentine.display-text />
        <p class="mb-5 text-muted">Let’s make this Valentine’s Day unforgettable!</p>

        <livewire:valentine.display-gif />

        <h1 class="fw-bold mb-3">Coming Soon</h1>
        <p class="text-muted mb-4">We’re working hard to bring you something amazing. Stay tuned!</p>


        <div class="mb-4">
            <h2 class="fw-bold display-2" id="countdown"></h2>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection


@push('scripts')
    <script>
        // Countdown Timer
        function countdownTimer() {
            const launchDate = new Date("2025-02-14 00:00:00").getTime();
            const timer = setInterval(function() {
                const now = new Date().getTime();
                const timeLeft = launchDate - now;

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    document.getElementById("countdown").innerHTML = "We're Live!";
                    return;
                }

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }, 1000);
        }

        countdownTimer();
    </script>
@endpush