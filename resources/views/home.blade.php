@extends('layouts.app')


@section('content')

      
<div data-role="page" id="swap_event" >
  <div data-role="header" class="header name">
    <div class="head"> 
<h1 id="head_name">name</h1>

      <!-- @isset($chat_user)
      <h1>{{ $chat_user->name }}</h1>
      @endisset
      @empty($chat_user)
      <h1>name</h1>
      @endempty -->
     <!--  <div class="typing_container">
       <p class="typing">status</p>
     </div> -->
   </div>  
   <a href="{{url('settings')}}" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-gear">Settings</a>
 </div>

 <!-- the main body of the page where the msg conversation is done -->
 <div role="main" class="ui-content chat_con">

  <div class="chat_convertation"  id="swap_event" >

   <div data-role="header" id='msg' class="msg a">
     <p class="message">hai</p>
   </div>
   <div data-role="header" id='msg'  class="msg b">
     <p class="message">hai</p>
   </div>
   <div data-role="header" id='msg'  class="msg a">
     <p class="message">hai</p>
   </div>


  </div>



   <!--  <form  method="post" action="{{ route('messages.store') }}"> -->
  <div class="chat_sending_box" id="chat_sending_box" >
    <!-- <div class="textarea_container"> -->
      {{    @csrf_field() }}
      <textarea name="textarea"  id="textarea" ></textarea>
      <input type="hidden"  name="sender" id='sender' value="{{auth::id()}}">
      <input type="hidden"  name="reciver" id='reciver' value="">
      <!-- </div> -->
      <!-- <button class="send-btn"><img src="css/images/send.jpg" alt="send"></button> -->
      <button type="submit" class="send_btn" id="send_btn">send</button>
    </div>
    <!--   </form> -->
  </div><!-- /content -->



  <div data-role="panel" id="left-panel">
   <!-- recent messages should come here -->
   <p>Recent messages</p>
  <form>
   <input id="filter-for-recent-msg" data-type="search" placeholder="Type to search...">
    </form>
  <div class="chat_list">
    <ul data-role="listview" data-inset="true" data-filter="true"  data-input="#filter-for-recent-msg" >
      <li><a id="new_msg" href="#">Acura <span class="ui-li-count">12</span></a></li>
      <li><a id="new_msg" href="#">man <span class="ui-li-count">12</span></a></li>
      <li><a id="new_msg" href="#">wioner <span class="ui-li-count">12</span></a></li>
      <li><a id="new_msg" href="#">amar <span class="ui-li-count">12</span></a></li>
    </ul>
  </div>
</div>
<a href="#" data-rel="close" class="ui-btn ui-corner-all ui-shadow ui-mini ui-btn-inline ui-icon-delete ui-btn-icon-left ui-btn-right">Close</a>

<!-- /panel -->


<div data-role="panel" id="right-panel"  data-position="right">

  <p>Online</p>
  <form>
    <input id="filter-for-listview" data-type="search" placeholder="Type to search...">
  </form>
  
  <div class="chat_list" id="chat_list">
    <ul data-role="listview" data-inset="true" data-filter="true" data-input="#filter-for-listview" id="list">

     <!-- data sits here via js -->
     
    </ul>
  </div>/panel
</div>


</div>

<!-- this javascript only for chat page only  -->
 <script type="text/javascript" src="{{ asset('js/chat.js') }}"></script>
   

@endsection