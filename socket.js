/*var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();


redis.subscribe('test-channel.2', function(err, count) {
  //console.log(redis);
  console.log(count);
});



redis.on('message', function(channel, message) {
    console.log('Message Recieved: ' + message);
    message = JSON.parse(message);
   // console.log(message); 
    io.emit(channel + ':' + message.event, message.data);
});
http.listen(3000, function(){
    console.log('Listening on Port 3000');
});
*/

var io = require('socket.io').listen(3000);
var redis = require('redis');

//io.set('resource', '/nodejs/socket.io.js');

function handler(req, res) {
    res.writeHead(200);
    res.end('');
}

io.sockets.on('connection', function (socket) {
    console.log('connection made');
 var redisClient = redis.createClient('6379', '127.0.0.1');
  

 redisClient.psubscribe('*', function(socket) {});

 redisClient.on('pmessage', function(subscribed, channel, message) {
  message = JSON.parse(message);
  console.log(redis.allClients);
  socket.emit(channel + ':' + message.event, message.data);
 });

 io.sockets.on('disconnect', function () {
  console.log('disconnect')
     redisClient.quit();
 });
}); 