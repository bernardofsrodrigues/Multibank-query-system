async function processaCliente() {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/clientes/processar';

    const data = `{
        "documento": "string"
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

processaCliente();

//{"documento":"string","processamentoKey":"2d6ba82d-735f-4b9f-833a-4df8cb647061"}