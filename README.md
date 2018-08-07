To use this projet clone it and
  run "composer install" inside the folder
  
 
  run "npm install"
  
  download  radis from this link 
  https://redis.io/download
  
   https://github.com/rgl/redis/downloads download it from hear if ur in windows
  
  
  now you are done with downloading packages
  
  
  now its time to create and connect this badboy to your database
  
  duplicate the ".env.example" file and rename it as ".env"
  
  open the .env file and enter ur database name, username, and password in it
  BROADCAST_DRIVER to redis
  
  
  now run "php artisan migrate" commend in termenal
  This will populate the database with tables 
  
  run the server by typing the commend "php artisan serve" 
  
  since we are using node to handle the client in real time we need to run the node js server too
  
  to run in node srever open a new terminal in the folder and type the comment "node socket.js"
  
  now run the redis server by clicking on redis-server.exe 
  
  euraka... 
  
  now open ur favourite broswer and type "http://localhost:8000" in url
  

This is a chat application 
using


--> laravel
--> nodejs
-->redis

Having problem with socket connection ..???
open chat.js in public/js folder edit host variable based on ur server url
and also audio variable if needed...

