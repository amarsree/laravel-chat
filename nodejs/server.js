var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(3030, function () {
	console.log('Seerver is Up');
});

io.on('connection', function (socket) {
	socket.on('message', function (message) {
		console.log(message);
		io.emit('message', message)
	});


	console.log("client connected");
	socket.on('disconnect', function() {
		console.log('someone disconnected');
	});
});