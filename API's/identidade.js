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


async function obterUsuarios() {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade';

    document.getElementById("loading").style.display = "block";

    try {

        var token = getCookie("token");
        const response = await fetch(url, {
            headers: {
                'Authorization': 'Bearer ' + token,
            },
        });

        if (response.ok) {
            const usuarios = await response.json();

            const tabela = document.querySelector('.table tbody');

            usuarios.forEach((usuario, index) => {
                const novaLinha = document.createElement('tr');
                novaLinha.innerHTML = `
                    <th scope="row">${index + 1}</th>
                    <td class="email">${usuario.email}</td>
                `;
                tabela.appendChild(novaLinha);
            });
        } else {
            console.error('Erro ao obter usuários:', response.status);
        }
    } catch (error) {
        console.error('Erro na requisição:', error.message);
    } finally {
        document.getElementById("loading").style.display = "none";
    }
}

obterUsuarios();
