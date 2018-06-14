<?php

namespace App\Http\Controllers;

use App\messages;
use App\msghst;
use App\User;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->ajax()){
            return("fd");
        }else{
             return('not');      
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
            if($request->ajax()){

            return('ajax');
        }else{
            return view('test');        
        }
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

      //  return ('fsd');
       // return $id->test(3);
        $messages = new messages;
        $messages->receiver = $request->reciver;
        $messages->sender = $request->sender;
        $messages->msg = $request->msg;
        $messages->status = 1;
        $messages->save();

       
    
         if($request->reciver<$request->sender){
                $conv_id = $request->reciver."_".$request->sender;
         }else{
                $conv_id = $request->sender."_".$request->reciver;
         }
         $d = msghst::where("con_id",'=' ,$conv_id)->first();
         if($d=== null){
            // creating new recond 
            $msghst = new msghst;
            $msghst->con_id = $conv_id;
            $msghst->msg = $request->msg;
            $msghst->name = user::find($request->reciver)->name;
            $msghst->user_id = auth::id();
            $msghst->receiver = $request->reciver;
            $msghst->unread_count = 1;
            $msghst->save();
         }else{
            // updating the record 
            $this->update($request,$conv_id);   
        }


        
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {  
    // $user = messages::where('sender',auth::id())->where('receiver',$id)->get();
    // $user = messages::where('sender',auth::id())->andwhere("receiver",$id)->get();

           $user = messages::where(function($query) use ($id)  {
                $query->where('sender', '=', auth::id())
                      ->orWhere('sender', '=', $id);
            })->where(function ($query) use ($id) {
                $query->where('receiver', '=', auth::id())
                      ->orWhere('receiver', '=', $id);
            })->orderBy('mid')->get();
      
     return ($user);
      // $this->createtable($id); 
       /* $conversation = DB::table('1')->get();

         if($request->ajax()){
            return $conversation;
        }else{
            //return to some view
            echo $id;        
        }*/
    }

  /*  *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        //
    }*/
/*
    *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       DB::table('msghst')
            ->where('con_id', $id)
            ->update(['msg' => $request->msg,'updated_at' => now()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function destroy($id)
    {
        //
    }*/

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function new_msg(Request $request,$id)
    {
      $list=messages::where('receiver',$id)->distinct()->get();
       
        echo ($list);
     
    }

   /* public function createtable($id)
    {
        Schema::create($id, function (Blueprint $table) {
                $table->increments('mid');
                $table->integer('sender');
                $table->text('msg');
                $table->char('status', 2)->default(1);
                $table->timestamps();
                    });
        
    }*/

    
}
