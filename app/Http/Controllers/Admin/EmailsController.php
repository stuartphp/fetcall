<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function emails()
    {
        return view('admin.emails');
    }
}
