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
  
function cadastraConsignataria (event) {
    if (event) {
        event.preventDefault();
    }

    const novaConsignataria = {
        nome: document.getElementById('nomee').value,
        codigo: document.getElementById('codigoo').value,
        usuario: document.getElementById('usuarioo').value,
        senha: document.getElementById('senhaa').value
    }

    console.log(novaConsignataria);

    cadastrarConsignataria(novaConsignataria);
}

async function cadastrarConsignataria(novaConsignataria) {

    document.getElementById("loading").style.display = "block";

    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/consignatarias';

    const data = JSON.stringify({
        nome: novaConsignataria.nome,
        codigo: novaConsignataria.codigo,
        usuario: novaConsignataria.usuario,
        senha: novaConsignataria.senha,
        dataCriacao: novaConsignataria.dataCriacao,
        usuarioCriacao: novaConsignataria.usuarioCriacao,
        dataAlteracao: novaConsignataria.dataAlteracao,
        usuarioAlteracao: novaConsignataria.usuarioAlteracao,
        ativo: true
    });
    
    try {
        let token = getCookie("token");
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Content-Type': 'application/json',
            },
            body: data,
        });
        
        if (response.status == 200) {
            window.location.href = "consignatarias.php";
        } else {
            var errorMessage = document.getElementById("msgErro");
            errorMessage.classList.remove("d-none");
  
            setTimeout(() => {
              errorMessage.classList.add("d-none");
          }, 20000);
        }
       
        const text = await response.text();
        console.log(text);
        console.log(response.status);
    } catch (error) {
        console.error('Erro:', error);
    } finally {
        document.getElementById("loading").style.display = "none";
    }
}
