<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class TotalLinkOpened extends Component
{
    public $totalLinkOpened = 0;

    public function render()
    {
        $this->totalLinkOpened = Proposal::whereNotNull('link_opened_at')->count();

        return view('livewire.total-link-opened',['totalLinkOpened' => $this->totalLinkOpened]);
    }
}
