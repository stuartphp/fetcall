<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EmailAccount;

class Emails extends Component
{
    use WithPagination;

    public function render()
    {
        $data = EmailAccount::where('user_id', auth()->user()->id)->paginate(12);
        return view('livewire.admin.emails', [
            'emails'=>$data
        ]);
    }
}
