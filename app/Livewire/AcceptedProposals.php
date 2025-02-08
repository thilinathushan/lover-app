<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class AcceptedProposals extends Component
{
    public $acceptedProposals = 0;

    public function render()
    {
        $this->acceptedProposals = Proposal::where('status', 'Accepted')->count();

        return view('livewire.accepted-proposals',['acceptedProposals' => $this->acceptedProposals]);
    }
}
