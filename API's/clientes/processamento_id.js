async function processarId() {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/clientes/obter-cliente/c1d36534-f386-4867-a392-46ac915fc724';

    const response = await fetch(url);

    const data = await response.json();

    const tabela = document.getElementById('dadosTabela');

    const linha = document.createElement('tr');

    const colunas = ['processamentoId', 'nome', 'cpf', 'erro', 'status', 'consignatarias'];
    colunas.forEach(coluna => {
        const celula = document.createElement('td');
        celula.textContent = data[coluna];
        linha.appendChild(celula);
    });

    if (tabela) {
        tabela.appendChild(linha);
    }
}

processarId();
