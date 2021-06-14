<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EmailAccountsController extends Controller
{
    public function index()
    {

        return view('email.email-accounts.index');
    }

    public function create()
    {
        return view('email.email-accounts.create');
    }
}
