const nodemailer = require('nodemailer');
require('dotenv').config();

function email(nome, emailDestino){
    var conta = nodemailer.createTransport({
        service: 'Gmail',
        auth: {
            user: process.env.email, // Seu usuário no Gmail
            pass: process.env.pass // A senha da sua conta no Gmail :-)
        }
    });
    let emailOptions = {
        from: '"junior santos 👻" <juniorsnts123@gmail.com>',
        to: nome+', '+emailDestino,
        subject: 'Obrigado por sua opinião',
        html: '<h2>Recebemos sua opinião</h2> <p>Olá sr.(a) <strong>'+nome+'</strong>, agradecemos por nos dar a sua opinião, '+
        'é de grande importância para nós saber o que nossos compradores desejam.</p>'
    };

    conta.sendMail(emailOptions, (err, info)=>{
        if(err){
            console.log(err);
        }else {
            console.log('Email enviado: '+info.messageId);
        }
    })
}

module.exports = email;