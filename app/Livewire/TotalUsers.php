<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class TotalUsers extends Component
{
    public $totalUsers = 0;

    public function render()
    {
        $this->totalUsers = User::all()->count();
        return view('livewire.total-users',['totalUsers' => $this->totalUsers]);
    }
}
