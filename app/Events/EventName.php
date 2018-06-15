<?php

namespace App\Events;

use Illuminate\Http\Request;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EventName implements ShouldBroadcast    
{

    use Dispatchable, InteractsWithSockets, SerializesModels;
   // use  SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    

 

    public $data;

    public function __construct(Request $request)
    {   
        $this->data = array(
            'sender'=> $request->sender,
            'message'=> $request->msg,
            'reciver'=> $request->reciver
        );
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {  $id=$this->data["reciver"];
   //  dd($this->data['reciver']);
        // return ('test-channel.'.$this->data['reciver']);
         return ('private-'.$id);
        
    }

    /*public function broadcastOn()
{
    return new PrivateChannel('order.'.$this->update->order_id);
}*/
}
