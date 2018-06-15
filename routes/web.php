<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
	//auth::logout();
    if (auth::id()===null) {
            return view('auth.login');
        }else{
             return view('home');
        }
});/**/


// its a main page where chat is done

Route::get('/chat', function () {
    //auth::logout();
  return view('home');
})->name('home')->middleware("auth");

/*
 Route::get('register1', function () {
   dd(auth());
    //return view('auth.register');
});*/


// guest routs
Route::resource('guest', 'GuestController');
Route::resource('guest/logout', 'GuestController@destroy');

//users route
Route::resource('api/users', 'ShowUsersController')->middleware('auth');
Route::get('api/user/left/', 'ShowUsersController@load_msg_his_left')->middleware('auth');


Route::resource('messages', 'MessagesController')->middleware('auth');

Route::get('messages/right/{id}', 'MessagesController@new_msg')->middleware('auth');
//Route::get('chat', 'ShowUsersController@first')->middleware('auth');




/*Route::get('chat', function () {
    return view('home');
});*/
/*->middleware('auth');*/

Route::get('settings', function () {
    return view('settings');
})->middleware('auth');

/*Route::get('/loadl', 'LoadPanels@left');
Route::get('/loadr', 'LoadPanels@right');*/

Auth::routes();


Route::get('/logout', function () {
    auth::logout();
    return view('welcome');
})->middleware('auth');

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/node', function() {
    // this doesn't do anything other than to
    // tell you to go to /fire
    return "go to /fire";
});

Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});