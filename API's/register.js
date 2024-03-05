function cadastrar(event) {
  if (event) {
      event.preventDefault();
  }

  const novoUsuario = {
      username: document.getElementById('username').value,
      email: document.getElementById('email').value,
      senha: document.getElementById('senha').value,
      confirmasenha: document.getElementById('confirmasenha').value
  }

  if (novoUsuario.senha !== novoUsuario.confirmasenha) {
      alert('As senhas não coincidem.');
      return;
  }

  console.log(novoUsuario);
  cadastrarUsuario(novoUsuario);
}

async function cadastrarUsuario(novoUsuario) {
  document.getElementById("loading").style.display = "block";

  const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade/nova-conta';

  const data = JSON.stringify({
      nome: novoUsuario.username,
      email: novoUsuario.email,
      senha: novoUsuario.senha,
      senhaConfirmacao: novoUsuario.confirmasenha,
      isAdmin: true,
      isActive: true,
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
      } else {
          var errorMessage = document.getElementById("msgErro");
          errorMessage.classList.remove("d-none");

          setTimeout(() => {
            errorMessage.classList.add("d-none");
        }, 20000);
      }

      const text = await response.text();
      console.log(text);

  } catch (error) {
      console.error('Erro:', error);
  } finally {
      document.getElementById("loading").style.display = "none";
  }
}
