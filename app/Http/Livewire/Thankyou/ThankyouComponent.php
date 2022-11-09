<?php

namespace App\Http\Livewire\Thankyou;

use Livewire\Component;

class ThankyouComponent extends Component
{
    public function render()
    {
        return view('livewire.thankyou.thankyou-component')->layout('layouts.base');
    }
}
