<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.contact.contact-component')->layout('layouts.base');
    }
}
