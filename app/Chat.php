<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'first name',
        'last name',
        'email address',
        'subject',
        'message',

    ];

    protected $table = "my_chat";
}
