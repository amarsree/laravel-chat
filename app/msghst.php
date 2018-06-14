<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msghst extends Model
{
    protected $table = 'msghst';

    protected $fillable = [
        'con_id', 
        'msg', 
        'unread_count'
    ];
}
