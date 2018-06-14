<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
      protected $fillable = [
      	'receiver',
        'sender',
        'msg'
    ];

     public function receiver()
    {
    return $this->belongsTo('App\User','receiver', 'id');
      // return $this->hasmany('App\User','sender', 'id');
    }
    
     public function sender()
    {
    return $this->belongsTo('App\User','sender', 'id');
      // return $this->hasmany('App\User','sender', 'id');
    }
    
}
