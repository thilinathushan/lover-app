@extends('layouts.app')

@section('content')
    <div class="container me-auto p-5">
        <a href="{{ route('cancel.personalize') }}" class="text-decoration-none text-secondary semibold">
            <i class="bi bi-arrow-left-circle"></i> Back to Dashboard
        </a>
    </div>
    <div class="container mx-auto p-5">
        <!-- Header -->
        <h1 class="fw-bold fs-2 mb-4 text-center">Get Love Link</h1>
        <p class="text-secondary text-center mb-5">
            Generate a shareable link to share your personalized Valentine’s Day experience with your partner.
        </p>

        <!-- Form -->
        <livewire:share-link-form />
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('scripts')
    <script>
        window.addEventListener('link-copied', event => {
            // console.log('true', event.detail[0].link)
            navigator.clipboard.writeText(event.detail[0].link).then(() => {
            // Show a success message
                // console.log('link', event.detail[0].link);
                // alert('Link copied to clipboard!');
            }).catch(() => {
                // alert('Failed to copy the link.');
            });
        });

        window.addEventListener('link-copy-failed', () => {
            // console.log('false', false)
            // alert('Failed to generate the link. Please try again.');
        });
    </script>
@endpush
