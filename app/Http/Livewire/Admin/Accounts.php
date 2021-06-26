<?php

namespace App\Http\Livewire\Admin;

use App\Models\EmailAccount;
use Livewire\Component;
use Livewire\WithPagination;

class Accounts extends Component
{
    use WithPagination;

    public $addAccountShow=false;
    public $stage=[];

    public function mount()
    {

    }
    public function addAccount()
    {
        $this->addAccountShow=true;
    }
    public function render()
    {
        $accounts=EmailAccount::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.admin.accounts', [
            'accounts'=>$accounts
        ]);
    }
}
