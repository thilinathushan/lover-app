<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-5">
                <button class="btn btn-success rounded-pill px-4 py-2" wire:click="generateLink">
                    <i class="bi bi-x-circle me-2"></i> Generate Link
                </button>
            </div>
            <form action="">
                <div class="mb-4">
                    <label for="shareLink" class="form-label fw-semibold">Shareable Link</label>
                    <input type="text" class="form-control rounded-5 shadow-sm p-3" id="shareLink"  placeholder="Shareable Link"
                        name="shareLink" value="@isset($shareableLink){{ $shareableLink }}@endisset">
                </div>
            </form>
            <div class="text-center mt-5">
                <button class="btn btn-outline-danger rounded-pill px-4 py-2" wire:click="revokeLink">
                    <i class="bi bi-x-circle me-2"></i> Revoke
                </button>
                <button class="btn btn-primary rounded-pill px-4 py-2 ms-3" wire:click="copyLink">
                    <i class="bi bi-check-circle me-2"></i>
                    Copy to Clipboard
                </button>
            </div>
        </div>
    </div>
</div>
