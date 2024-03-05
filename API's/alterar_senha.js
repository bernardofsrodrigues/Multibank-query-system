/* 
const email = 'teste@gmail.com';
const senha = 'teste';                 //parametros de teste
const nova_senha = 'fsgs12313141g';

const email = document.getElementById('email').value; //colocar IDs ainda
const senha = document.getElementById('senha').value;
const nova_senha = document.getElementById('novasenha').value;
*/

const email = $('#email').val();
const senha = $('#senha').val();
const nova_senha = $('#novasenha').val();


async function alterarSenha() {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade/alterar-senha';

    const data = JSON.stringify({
        email: email,
        senhaAtual: senha,
        senhaNova: nova_senha
    });

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: data,
        });
        
        
        if (response.status == 200) {
            window.location.href = "login.php";
        }
        
        const text = await response.text();
        
        console.log(text);
        console.log(response.status);
    } catch (error) {
        console.error('Erro: ', error);
        var errorMessage = document.getElementById("msgErro");
        errorMessage.classList.remove("d-none");
        
        setTimeout(() => {
            errorMessage.classList.add("d-none");
        }, 20000)
    } finally {
        document.getElementById("loading").style.display = "none";
    }

}
//200

/*{"type":"https://tools.ietf.org/html/rfc7231#section-6.5.1","title":"One or more validation errors occurred.","status":400,"traceId":"00-87b9a6054a38fa3e12183360f6a6782a-cf90aaa3182549b8-00","errors":{"SenhaAtual":["O campo SenhaAtual precisa ter entre 6 e 100 caracteres"]}}
400*/