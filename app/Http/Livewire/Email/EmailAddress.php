<?php

namespace App\Http\Livewire\Email;

use Livewire\Component;
use App\Models\EmailAccount;

class EmailAddress extends Component
{
    protected $listeners = ['modalClick'];
    public $accounts;
    // Model
    public $is_imap;
    public $incoming_mail;
    public $incoming_port;
    public $incoming_ssl;
    public $incoming_spa;
    public $outgoing_mail;
    public $outgoing_port;
    public $encription_method;
    public $outgoing_spa;
    public $color;
    public $directory;
    // Modal
    public $modal_title;
    public $modal_btn;

    public function mount()
    {
        $this->modal_title = 'Add new record';
        $this->modal_btn = 'Save';
        $this->accounts = EmailAccount::where('user_id', auth()->user()->id)->get();
    }
    public function modalClear()
    {
        $this->dispatchBrowserEvent('modal', ['modal'=>'emailAddressModal', 'action'=>'show']);
    }
    public function EmailAccountsAction()
    {
        
    }

    public function render()
    {
        return view('livewire.email.email-address', ['accounts'=>$this->accounts]);
    }
}
