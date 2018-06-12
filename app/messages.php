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

     public function user()
    {
		//return $this->belongsTo('App\User','sender', 'id');
        return $this->hasmany('App\User','sender', 'id');
    }
    
}
