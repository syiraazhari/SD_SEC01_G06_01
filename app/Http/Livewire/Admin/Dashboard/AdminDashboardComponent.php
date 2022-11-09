<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.admin-dashboard-component')->layout('layouts.base');
    }
}
