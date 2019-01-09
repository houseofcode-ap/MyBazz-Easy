const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '',    
    database: 'mybazz',
});

connection.connect(err=>{
    if(err){
        console.log('Erro na conexao com bd: '+err);
    } else {
        console.log('conectado ao banco de dados');
    }
});

module.exports = connection;
