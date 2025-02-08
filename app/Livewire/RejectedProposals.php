<?php

namespace App\Livewire;

use App\Models\Proposal;
use Livewire\Component;

class RejectedProposals extends Component
{
    public $rejectedProposals = 0;

    public function render()
    {
        $this->rejectedProposals = Proposal::whereNotNull('link_opened_at')->whereNull('status')->count();

        return view('livewire.rejected-proposals',['rejectedProposals' => $this->rejectedProposals]);
    }
}
