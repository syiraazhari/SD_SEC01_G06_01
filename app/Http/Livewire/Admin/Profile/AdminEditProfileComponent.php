<?php

namespace App\Http\Livewire\Admin\Profile;

use Livewire\Component;

class AdminEditProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.profile.admin-edit-profile-component')->layout('layouts.base');
    }
}
