function contato() {
    var nome = document.getElementById('full-name');
    var email = document.getElementById('email');
    var textInfo = document.getElementById('info');
    data = JSON.stringify({
        nome: nome.value,
        email: email.value,
        duvida: textInfo.value
    });
    if (nome.value == "" | email.value == "" | textInfo.value == "" | nome.value == null | email.value == null | textInfo.value == null) {
        alert("Preencha todos os dados corretamente");
    } else {
        $.ajax({
            async: true,
            type: 'POST',
            url: 'http://localhost:3000/v1/usuario/contato',
            contentType: 'application/json',
            data: data,
            success: function (results) {
                if (results == true) {
                    alert('Obrigado por sua opiniao, retornaremos em breve');
                    nome.value = "";
                    email.value = "";
                    textInfo.value = "";

                } else if (results != true) {
                    alert('Desculpe, ocorreu um erro');
                } else {
                    alert('Algo inesperado ocorreu :c');
                }
            }
        });
    }
}