const authBD = require('../mysqlBD/contato');

module.exports = {
    async contato(req, res){
        const nome = req.body.nome;
        const email = req.body.email;
        const duvida = req.body.duvida;
        let dados = {
            nome: nome,
            email: email,
            duvida: duvida,
            respondida: 'false'
        };
        authBD.contato(res, dados);
    }
}