<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class PartnerName extends Component
{

    public $saidYes = false;
    public $partnerName = '';

    #[On('saidYes')]
    public function handleSaidYes($btnYesNoHide){
        $this->saidYes = $btnYesNoHide;
    }

    public function render()
    {
        return view('livewire.partner-name');
    }
}
