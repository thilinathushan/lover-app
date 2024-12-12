<?php

namespace App\Livewire\Valentine;

use Livewire\Component;
use Livewire\Attributes\On;

class NoBtn extends Component
{
    public $msg;
    public $currentIndex = 0;
    public $shouldHideNoButton = false;
    public $saidYes = false;

    public $btnData = [
        "Are you sure?",
        "Really sure?",
        "Are you positive???",
        "Pookie please",
        "Just think about it",
        "If you say no, I'll be very sad",
        "I'll be very very sad",
        "I'll be very very very sad",
        "I'll be very very very very sad",
        "Ok fine, I'll stop asking...",
        "Just kidding, PLEASE SAY YES",
        "I'll be very very very very very sad",
        "You're breaking my heart :("
    ];

    public function no()
    {
        if($this->currentIndex <= count($this->btnData) - 1){$this->dispatch('noClicked');
            $this->msg = $this->btnData[$this->currentIndex];
            $this->currentIndex++;
        } else {
            $this->currentIndex = 0;
            $this->msg = "No";
        }
        $this->dispatch('noClicked');
    }

    #[On('hideNoButton')]
    public function hideNoButton($btnHide)
    {
        $this->shouldHideNoButton = $btnHide;
    }

    #[On('saidYes')]
    public function handleSaidYes($btnYesNoHide)
    {
        $this->saidYes = $btnYesNoHide;
    }

    public function mount($msg = null)
    {
        $this->msg = $msg ?? $this->btnData[0];
    }

    public function render()
    {
        return view('livewire.valentine.no-btn');
    }
}
