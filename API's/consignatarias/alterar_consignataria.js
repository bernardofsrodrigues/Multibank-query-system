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

async function alterarConsignataria() {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/consignatarias';

    const data = `{
    "nome": "string",
    "codigo": "string",
    "usuario": "string",
    "senha": "string",
    "dataCriacao": "2023-11-23T05:35:32.165499",
    "usuarioCriacao": "a340951d-6a6f-41da-8b61-78a4b7d291fe",
    "dataAlteracao": "2023-11-23T05:08:30.418",
    "usuarioAlteracao": "3fa85f64-5717-4562-b3fc-2c963f66afa6",
    "ativo": true
    }`;

    let token = getCookie("token");

    const response = await fetch(url, {
        method: 'PUT',
        headers: {
            'Authorization': 'Bearer ' + token,
            'Content-Type': 'application/json',
        },
        body: data,
    });

    const text = await response.text();

    console.log(text);
    }