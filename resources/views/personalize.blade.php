@extends('layouts.app')

@section('content')
    <div class="container me-auto p-5">
        <a href="{{ route('cancel.personalize') }}" class="text-decoration-none text-secondary semibold">
            <i class="bi bi-arrow-left-circle"></i> Back to Dashboard
        </a>
    </div>
    <div class="container mx-auto p-5">
        <!-- Header -->
        <h1 class="fw-bold fs-2 mb-4 text-center">Personalize Your Proposal</h1>
        @if ($addPersonalizationForm)
            <p class="text-secondary text-center mb-5">
                Add details about your partner to make this Valentine’s Day truly special.
            </p>
        @else
            <p class="text-secondary text-center mb-5">
                Edit details about your partner to make this Valentine’s Day truly special.
            </p>
        @endif


        <!-- Form -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('partnerInfo.save') }}" method="POST">
                    @csrf
                    <!-- Partner's Name -->
                    <div class="mb-4">
                        <label for="partnerName" class="form-label fw-semibold">Partner's Name</label>
                        <input type="text" class="form-control rounded-pill shadow-sm p-3" id="partnerName"
                            name="partnerName" placeholder="Enter your partner's name"
                            @if (!$addPersonalizationForm) value="{{ $partnerDetails->partner_name }}" @endif required>
                    </div>

                    <!-- Special Notes -->
                    <div class="mb-4">
                        <label for="specialNote" class="form-label fw-semibold">Special Note</label>
                        <textarea class="form-control rounded-5 shadow-sm p-3" id="specialNote" rows="4"
                            placeholder="Write something special..." name="specialNote" required>@if (!$addPersonalizationForm){{ $partnerDetails->special_note }}@endif</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="text-center">
                        <button type="reset" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                            <i class="bi bi-x-circle me-2"></i> Cancel
                        </button>

                        <button type="submit" class="btn btn-success rounded-pill px-4 py-2 ms-3">
                            <i class="bi bi-check-circle me-2"></i>
                            @if ($addPersonalizationForm)
                                Save
                            @else
                                Update
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection