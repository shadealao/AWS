var express = require('express');
var fs=require('fs');
var router = express.Router();
/* GET home page. */
router.get('/', function(req, res, next) {

    res.render('messagerie');

    //msg
    let lastMessage = new Array();
    res.io.on('connection', function(client){

        client.emit('last message', lastMessage);

        client.on('new message', function(data){
            // Vérification du pseudonyme
            if(!data.username || typeof data.username == undefined || data.username.length > 25){
                client.emit('error message', "Le pseudonyme rentré n'est pas valide !");
                return;
            }

            // Vérification du message
            if(!data.message || typeof data.message == undefined || data.message.length > 255){
                client.emit('error message', "Le message rentré n'est pas valide !");
                return;
            }
            lastMessage.push(data.username + ' : ' + data.message);
            for(var i = lastMessage.length-1; i--;){
                if(i == 5){
                    lastMessage.shift();
                }
            }
            res.io.emit('new message', data);
        });

        client.on('disconnect', function(){
            delete client;
        });

    });
});

module.exports = router;
