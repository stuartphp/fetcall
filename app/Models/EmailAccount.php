<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAccount extends Model
{
    use HasFactory;
    protected $table = 'email_accounts';
    protected $primaryKey = 'id';
    protected $fillable = [
    'user_id',
    'is_imap',
    'incoming_mail',
    'incoming_port',
    'incoming_ssl',
    'incoming_spa',
    'outgoing_mail',
    'outgoing_port',
    'encription_method',
    'outgoing_spa',
    'color',
    'directory'
    ];
}
