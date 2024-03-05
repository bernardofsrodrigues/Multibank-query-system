function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function excluirConsignataria(event) {
    event.preventDefault();

    const removerConsignatariaData = {
        nome: document.getElementById('nome').value,
        codigo: document.getElementById('codigo').value,
        senha: document.getElementById('senha').value
    }

    removerConsignataria(removerConsignatariaData);
}

async function removerConsignataria(removerConsignataria) {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/consignatarias?Id=3fa85f64-5717-4562-b3fc-2c963f66afa6';

    const data = JSON.stringify({
        nome: removerConsignataria.nome,
        codigo: removerConsignataria.codigo,
        senha: removerConsignataria.senha
    });

    let token = getCookie("token");
    const response = await fetch(url, {
        method: 'DELETE',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json' 
        },
        body: data,
    });

    const text = await response.text();

    console.log(text);
}

