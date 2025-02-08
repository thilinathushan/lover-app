<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RecentActivities extends Component
{
    public function render()
    {
        $recentActivities = User::with(['partner', 'proposal'])
            ->latest()
            ->take(25)
            ->get();

        return view('livewire.recent-activities',[
            'recentActivities' => $recentActivities
        ]);
    }
}
