<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Request;
use Illuminate\Support\Facades\Hash;

class ProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $newimage;

    public $current_password;
    public $password;
    public $password_confirmation;

    // public function mount()
    // {
    //     $user = User::find(Auth::user()->id);
    //     $this->name = $user->name;
    //     $this->email = $user->email;
    //     $this->mobile = $user->profile->mobile;
    //     $this->image = $user->profile->image;
    //     $this->line1 = $user->profile->line1;
    //     $this->line2 = $user->profile->line2;
    //     $this->city = $user->profile->city;
    //     $this->province = $user->profile->province;
    //     $this->country = $user->profile->country;
    //     $this->zipcode = $user->profile->zipcode;
    // }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);
    }

    public function changePassword()
    {
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);

        if (Hash::check($this->current_password,Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('password_success', 'Password has been change successfully');

        }
        else
        {
            session()->flash('password_error', 'Password does not match!');
        }
    }

    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->save();

        $user->profile->mobile = $this->mobile;
        if($this->newimage)
        {
            if($this->image)
            {
                unlink('assets/images/profile/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $user->profile->image = $imageName;
        }
        $user->profile->line1 = $this->line1;
        $user->profile->line2 = $this->line2;
        $user->profile->city = $this->city;
        $user->profile->province = $this->province;
        $user->profile->country = $this->country;
        $user->profile->zipcode = $this->zipcode;
        $user->profile->save();
        session()->flash('message','Profile has been updated successfully');

    }
    public function render()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.profile.profile-component',['user'=>$user])->layout('layouts.base');
    }
}
