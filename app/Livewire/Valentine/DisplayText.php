<?php

namespace App\Livewire\Valentine;

use Livewire\Component;
use Livewire\Attributes\On;

class DisplayText extends Component
{
    public $saidYes = false;

    #[On('saidYes')]
    public function handleSaidYes($btnYesNoHide){
        $this->saidYes = $btnYesNoHide;
    }

    public function render()
    {
        return view('livewire.valentine.display-text');
    }
}
