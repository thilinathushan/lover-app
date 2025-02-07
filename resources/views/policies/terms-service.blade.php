@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Terms of Service Card -->
        <div class="card shadow-sm border-0 rounded-4 p-4 mx-auto" style="max-width: 900px; background-color: #f8f9fa;">
            <div class="card-body">
                <h1 class="fw-bold text-center mb-3">Terms of Service</h1>
                <p class="text-secondary text-center mb-4">
                    These Terms govern your use of Be My Valentine. Please read them carefully.
                </p>
                <p class="text-muted text-center"><strong>Effective Date:</strong> February 5, 2025</p>

                <hr class="my-4">

                <!-- Sections -->
                <div class="mb-4">
                    <h4 class="fw-bold">1. Acceptance of Terms</h4>
                    <p class="text-muted">
                        By using <strong>Be My Valentine</strong>, you agree to comply with these Terms of Service. If you do not agree, please do not use the app.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">2. Use of the App</h4>
                    <ul class="text-muted">
                        <li>You must be at least 13 years old to use this app.</li>
                        <li>You agree to use the app only for its intended purpose—creating and sharing personalized Valentine’s messages.</li>
                        <li>You may not use the app for any illegal, harmful, or abusive activities.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">3. User Accounts</h4>
                    <ul class="text-muted">
                        <li>Google authentication is used to access the app.</li>
                        <li>You are responsible for maintaining the security of your account.</li>
                        <li>We reserve the right to terminate accounts that violate our terms.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">4. Privacy and Data Collection</h4>
                    <p class="text-muted">
                        Your privacy is important to us. Our <a href="{{ route('privacyPolicy') }}" class="text-decoration-none">Privacy Policy</a> explains how we collect and use your data.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">5. Content Ownership & Responsibility</h4>
                    <ul class="text-muted">
                        <li>You retain ownership of any personalized content you create.</li>
                        <li>You are responsible for ensuring that your messages are respectful and appropriate.</li>
                        <li>We reserve the right to remove any content that violates our policies.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">6. Restrictions</h4>
                    <ul class="text-muted">
                        <li>You may not attempt to hack, reverse-engineer, or disrupt the app’s functionality.</li>
                        <li>Spam, harassment, or offensive content will result in immediate account suspension.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">7. Limitation of Liability</h4>
                    <p class="text-muted">
                        We are not responsible for any damages or losses resulting from your use of the app. The service is provided "as is" without warranties.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">8. Termination</h4>
                    <p class="text-muted">
                        We reserve the right to suspend or terminate accounts that violate these Terms.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">9. Changes to These Terms</h4>
                    <p class="text-muted">
                        We may update these Terms periodically. Continued use of the app after changes are posted constitutes acceptance.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">10. Contact Us</h4>
                    <p class="text-muted">For any questions, please contact us at <strong>info@thilinathushan.dev</strong>.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
