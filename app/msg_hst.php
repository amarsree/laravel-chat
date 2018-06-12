<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msg_hst extends Model
{
    protected $fillable = [
        'con_id', 
        'msg', 
        'unread_count'
    ];
}
