async function alteraPerfil() {

    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade/alterar-perfil';

    const data = `{
        "email": "user@example.com",
        "isAdmin": true
}`;

    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: data,
    });

    const text = await response.text();

    console.log(text);
    console.log(response.status);
}

//200
