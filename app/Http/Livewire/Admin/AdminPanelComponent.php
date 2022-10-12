<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminPanelComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-panel-component')->layout('layouts.panel');
    }
}
