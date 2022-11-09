<?php

namespace App\Http\Livewire\Faq;

use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        return view('livewire.faq.faq-component')->layout('layouts.base');
    }
}
