<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table ='mails';
    protected $fillable = ['name', 'mail', 'message'];
}
