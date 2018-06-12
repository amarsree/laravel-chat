<?php

namespace App\Events;


use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EventName     implements ShouldBroadcast    
{
    use  SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
   


    public $data;

    public function __construct()
    {   
        $this->data = array(
            'power'=> '330',
            'message'=> 'hai',
            'user'=> 'me'

        );
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {  
         return ['test','test-channel'];
        
    }
}
