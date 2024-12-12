<div>
    @if (!$saidYes)
        <div id="no-button" class="px-1" style="display: {{ $shouldHideNoButton ? 'none' : 'block' }};">
            <button class="btn btn-lg btn-danger py-2 px-4" wire:click="no">{{ $msg }}</button>
        </div>
    @endif
</div>
