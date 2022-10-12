<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminProfileComponent extends Component
{
    public function render()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.admin.admin-profile-component',['user'=>$user])->layout('layouts.base');
    }
}
