<?php

namespace App\Livewire;

use App\Models\ShareableLink;
use Livewire\Component;

class TotalLinkCreated extends Component
{
    public $totalLinkCreated = 0;

    public function render()
    {
        $this->totalLinkCreated = ShareableLink::all()->count();

        return view('livewire.total-link-created',['totalLinkCreated' => $this->totalLinkCreated]);
    }
}
