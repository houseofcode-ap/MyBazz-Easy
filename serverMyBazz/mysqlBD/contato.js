const connection = require('../config/connectionDB');
const nodemailer = require('../services.js/nodemailer');
const insertContato = "insert into contato values (default, ?, ?,?,?)";


module.exports = {
    contato: function(res, dados){
        connection.query(insertContato, [dados.nome, dados.email, dados.duvida, dados.respondida], (err)=>{
            if(err){
                res.json(false);
                console.log(err);
            } else {       
                //nodemailer(dados.nome, dados.email);  //envio de email       
                res.json(true);
            }
        });                     
    }
}