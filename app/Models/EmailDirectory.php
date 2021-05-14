<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailDirectory extends Model
{
    use HasFactory;
    protected $table = 'email_directories';
    protected $primaryKey = 'id';
    protected $fillable = [
    'email_account_id',
    'main',
    'sub'
    ];
}
