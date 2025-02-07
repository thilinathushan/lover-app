@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <livewire:valentine.display-gif />
            <div class="mt-3" >
                <livewire:partner-name :partnerName="$partnerInfo" />
                <livewire:valentine.display-text />
            </div>
        </div>
    </div>

    <div class="row mx-auto mb-5">
        <div class="mt-4 d-inline-flex justify-content-center align-items-center" {{-- x-data="{ show: true }" @hideYesNo.window="show = false" --}}>

            <livewire:valentine.yes-btn  :token="$token"/>
            <livewire:valentine.no-btn msg="No" />
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('scripts')

    <script>
        document.addEventListener('livewire:initialized', () => {
            let screenSize = screen.width;
            console.log('screenSize:', screenSize);
            Livewire.dispatch('screenSize', {
                ss: screenSize
            })
        });
    </script>
@endpush
