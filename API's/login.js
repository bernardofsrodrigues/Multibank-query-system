function verificaAutenticacao() {
    const autenticado = localStorage.getItem('autenticado');
    return autenticado === 'true';
}

async function logar(event) {

  document.getElementById("loading").style.display = "block";

  const email = document.getElementById('email').value;
  const senha = document.getElementById('senha').value;
  const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade/autenticar';

  const data = {
      "email": email,
      "senha": senha
  };
  
  try {
      const response = await fetch(url, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify(data),
      });

      if (response.status == 200) {
          // Login bem-sucedido, salvar a sessão
          const usuario = await response.json();
          console.log(JSON.stringify(usuario));
          iniciarSessao(usuario);
          setCookie("token",usuario.accessToken,3600);
          setCookie("nivel",usuario.type,3000);
          window.location.href = "./index.php";
      } else {
          var errorMessage = document.getElementById("msgErro");
          errorMessage.classList.remove("d-none");
          setTimeout(() => {
            errorMessage.classList.add("d-none");
        }, 30000);
      }
  } catch (error) {
      console.error('Erro:', error);
  } finally {
      document.getElementById("loading").style.display = "none";
  }
}


function iniciarSessao(usuario) {
  // Salvar informações do usuário e indicar que está autenticado
  localStorage.setItem('usuario', JSON.stringify(usuario));
  localStorage.setItem('autenticado', 'true');
}

var url = window.location.href;
if (url != "http://191.252.178.227/login.php") {
    if (!verificaAutenticacao()) {
        window.location.href = "login.php";
    } else {
        const formulario = document.getElementById('formulario');
        if (formulario) {
            formulario.addEventListener('submit', function(event) {
                event.preventDefault();
                logar(event);
            });
        }
    }
}


//funçao que deixei para os cookies

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

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

