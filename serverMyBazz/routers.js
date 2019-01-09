const express = require('express');
const contatoCtrl = require('./controlers/contato');

const routes = express.Router();

routes.post('/contato', contatoCtrl.contato);

module.exports = routes;