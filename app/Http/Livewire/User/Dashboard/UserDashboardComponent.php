<?php

namespace App\Http\Livewire\User\Dashboard;

use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.user-dashboard-component')->layout('layouts.base');
    }
}
