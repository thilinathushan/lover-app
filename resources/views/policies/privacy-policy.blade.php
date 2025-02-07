@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Privacy Policy Card -->
        <div class="card shadow-sm border-0 rounded-4 p-4 mx-auto" style="max-width: 900px; background-color: #f8f9fa;">
            <div class="card-body">
                <h1 class="fw-bold text-center mb-3">Privacy Policy</h1>
                <p class="text-secondary text-center mb-4">
                    Your privacy matters. This page explains how we handle your personal data.
                </p>
                <p class="text-muted text-center"><strong>Effective Date:</strong> February 5, 2025</p>

                <hr class="my-4">

                <!-- Sections -->
                <div class="mb-4">
                    <h4 class="fw-bold">1. Introduction</h4>
                    <p class="text-muted">
                        Welcome to <strong>Be My Valentine</strong>. Your privacy is important to us. This Privacy Policy explains how we collect, use,
                        and protect your personal information when you use our app.
                    </p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">2. Information We Collect</h4>
                    <ul class="text-muted">
                        <li><strong>Personal Information:</strong> Name, email address (if using Google login), and any voluntarily provided data.</li>
                        <li><strong>Proposal Data:</strong> Personalized messages, proposal status, and partner’s response.</li>
                        <li><strong>Usage Data:</strong> Date and time when a proposal link is opened.</li>
                        <li><strong>Device Information:</strong> Device type, browser type, and IP address for analytics.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">3. How We Use Your Information</h4>
                    <ul class="text-muted">
                        <li>To personalize your experience and store your proposal history.</li>
                        <li>To notify you when your partner opens the link or responds.</li>
                        <li>To improve app functionality and enhance user experience.</li>
                        <li>To provide customer support and troubleshoot issues.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">4. How We Share Your Information</h4>
                    <p class="text-muted">Your data is <strong>never sold</strong> or shared, except in the following cases:</p>
                    <ul class="text-muted">
                        <li>When required by law enforcement.</li>
                        <li>To provide essential services such as cloud storage.</li>
                        <li>To improve security and prevent fraud.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">5. Data Security</h4>
                    <p class="text-muted">We implement encryption and secure servers to protect your data. However, no method of transmission is 100% secure.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">6. Your Rights</h4>
                    <ul class="text-muted">
                        <li>You can access or edit your personal data within the app.</li>
                        <li>You may request data deletion by contacting <strong>info@thilinathushan.dev</strong>.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">7. Third-Party Services</h4>
                    <p class="text-muted">We may use third-party services (e.g., Google Authentication), which have their own privacy policies.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">8. Changes to This Privacy Policy</h4>
                    <p class="text-muted">We may update this policy. Any changes will be posted here.</p>
                </div>

                <div class="mb-4">
                    <h4 class="fw-bold">9. Contact Us</h4>
                    <p class="text-muted">For any inquiries, please contact us at <strong>info@thilinathushan.dev</strong>.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
