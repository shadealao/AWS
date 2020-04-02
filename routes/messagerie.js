var express = require('express');
var fs=require('fs');
let fichier = fs.readFileSync('./public/conversation/id_moi_id_julia.json')
let contenu_conversation = JSON.parse(fichier)
//console.log(contenu_conversation)

/*for(var exKey in contenu_conversation) {
    for(i=0; i<Object.keys(contenu_conversation[exKey]).length; i++){
        console.log('clé ==> ' + Object.keys(contenu_conversation[exKey])[i]+ '    msg ==> ' + Object.values(contenu_conversation[exKey])[i]);
    }
}*/
var router = express.Router();
/* GET home page. */
router.get('/', function(req, res, next) {

    res.render('messagerie');

    //msg
    //let lastMessage = new Array();
    let lastMessage = new Array();
    res.io.on('connection', function(client){

        client.emit('last message', contenu_conversation);
        //client.emit('last message', lastMessage);

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
            res.io.emit('save conversation', data);
        });

        client.on('disconnect', function(){
            delete client;
        });



        client.on('save in file', function(data){
            let msg = {
                id : data.username,
                message : data.message,
                date : data.date
            };


            let donnees = JSON.stringify(msg)
            console.log("donnee :  "+donnees);


            //var st = fs.readFileSync("./public/conversation/id_moi_id_julia2.json");
           /* var obj = {
                table: []
            };
            obj.table.push(msg);
            var json = JSON.stringify(obj);
            var fs = require('fs');
            fs.writeFileSync('./public/conversation/id_moi_id_julia2.json', json, { flag: 'a' }, err => {})
            */
            
         //  fs.readFileSync('./public/conversation/id_moi_id_julia2.json', 'utf8', )
   
   var obj = JSON.parse( fs.readFileSync("./public/conversation/id_moi_id_julia.json")); //now it an object
    obj.table.push(msg); //add some data
    json = JSON.stringify(obj); //convert it back to json
    fs.writeFile('./public/conversation/id_moi_id_julia.json', json, err => {}); // write it back 
        });

    });
});

module.exports = router;
