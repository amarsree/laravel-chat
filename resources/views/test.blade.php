@extends('layouts.master')

@section('content')
    <p id="power">0</p>
@stop

@section('footer')
    <!-- <script src="{ { asset('js/socket.io.js') } }"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script>
          var socket = io('http://localhost:3000');
   // var socket = io('http://192.168.10.10:3000');
        console.log(socket);
        socket.on("test-channel:App\\Events\\EventName", function(message){
            console.log("hai")
            // increase the power everytime we load test route
            //$('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });

        socket.on("test:App\\Events\\EventName", function(message){
            // increase the power everytime we load test route
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
<@stop