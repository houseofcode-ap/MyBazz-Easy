const express = require('express');
const app = express();
const cors = require('cors');
const port = 3000;

const server = require('http').Server(app);

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({extended:true}));
app.use('/v1/usuario', require('./routers'));

server.listen(port, function(){
    console.log('Servidor rodando na porta '+port);
});