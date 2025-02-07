<div>
    @if (!$saidYes)
        <div class="px-1">
            <button class="btn btn-lg btn-success"
                style="width: {{ 100 + $scale * 20 }}px; height: {{ 40 + $scale * 10 }}px;
                    font-size: {{ 16 + $scale * 2 }}px;
                    transition: all 0.3s ease;"
                wire:click="handleSaidYes">Yes</button>
        </div>
    @else
        <div class="px-1">
            <a href="{{ route('loveLetter', $token) }}" class="btn btn-lg btn-danger rounded-pill px-4 py-2 ms-3">
                <i class="bi bi-arrow-through-heart"></i>
                View Valentine Wish
            </a>
        </div>
    @endif
</div>
