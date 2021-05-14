<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $primaryKey = 'id';
    protected $fillable = [
    'email_account_id',
    'recieved',
    'from',
    'reply_to',
    'to',
    'cc',
    'subject',
    ];
}
