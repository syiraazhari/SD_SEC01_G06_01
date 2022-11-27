<?php

namespace App\Http\Livewire\About;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.about.about-component')->layout('layouts.base');
    }
}
