document.getElementById('sair').addEventListener('click', function() {
    encerrarSessao();
});

function encerrarSessao() {
    localStorage.removeItem('usuario');
    localStorage.removeItem('autenticado');

    console.log("Sessão encerrada");
  
    window.location.href = "login.php";
  }
