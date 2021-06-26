<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Emails extends Component
{
    public $confirmingUserDeletion=false;

    public function confirmUserDeletion()
    {
        $this->confirmingUserDeletion=true;
    }

    public function render()
    {
        return view('livewire.admin.emails');
    }
}
