<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class TotalProposals extends Component
{
    public $totalProposals = 0;

    public function render()
    {
        $this->totalProposals = Proposal::all()->count();

        return view('livewire.total-proposals',['totalProposals' => $this->totalProposals]);
    }
}
