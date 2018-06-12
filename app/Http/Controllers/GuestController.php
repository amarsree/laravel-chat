<?php

namespace App\Http\Controllers;

use App\guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest');
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //check if guest logged in 

        // if logged in send to chat 

        //if not logged in send to login page
        return view('guest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // echo $request;
        $guest = new guest;

        $guest->nickname = $request->nickname;
        $guest->gender = $request->gender;
        $guest->age = $request->age;
        $guest->save();
        return view('home');
        //$reuqest->session()->put('key', 'value');




           
    }
     

    /**
     * Display the specified resource.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       $value = $request->session()->get('key');
       return $value; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest $guest)
    {
       return("$guest");
    }
}
