const userForm = document.getElementById('disableUserForm');
  if (userForm) {

    userForm.addEventListener('submit', function(event) {
      event.preventDefault();
      
      const email = document.getElementById('email').value; 
      
      habilitarUsuario(email);
    });
  }

  async function habilitarUsuario(email) {
    const url = 'http://consigconsult.us-east-1.elasticbeanstalk.com/api/identidade/habilitacao-usuario';

    const data = JSON.stringify({
      email: email,
      isActive: true
    });

    try {
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
  
      if (response.ok) {
        console.log("Usuário habilitado/desabilitado com sucesso");
      } else {
        console.error(`Erro ${response.status}: ${text}`);
      }
    } catch (error) {
      console.error('Erro durante a execução da função:', error);
    }

    return response;
  }

//200