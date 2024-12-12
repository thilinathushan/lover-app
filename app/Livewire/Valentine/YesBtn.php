<?php

namespace App\Livewire\Valentine;

use Livewire\Component;
use Livewire\Attributes\On;

class YesBtn extends Component
{
    public $scale = 1.0;
    public $shouldHideNoButton = false;
    public $screenWidth = 0;
    public $saidYes = false;

    #[On('screenSize')]
    public function handleScreenSize($ss)
    {
        $this->screenWidth = $ss;
    }

    #[On('noClicked')]
    public function increaseSize()
    {
        $this->scale += 1;

        $btnWidth = 100 + $this->scale * 20;
        if ($btnWidth > $this->screenWidth) {
            $this->shouldHideNoButton = true;
            $this->dispatch('hideNoButton', btnHide:$this->shouldHideNoButton);
        }
    }

    public function handleSaidYes()
    {
        // hide yes and no buttons
        $this->saidYes = true;
        $this->dispatch('saidYes', btnYesNoHide:$this->saidYes);
    }

    public function mount()
    {
        $this->scale = 1.0;
    }


    public function render()
    {
        return view('livewire.valentine.yes-btn');
    }
}
