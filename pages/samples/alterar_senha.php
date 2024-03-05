<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Alterar Senha</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/minijericologo.png" />

  <style>
    #pagpadrao {
      display: flex;
    }
    @media screen and (max-width: 919px){
      #pagpadrao {
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
      #logopagpadrao {
        width: 90%;
      }
    }
  </style>
</head>

<body>
  <div class="fundologin">
  <div class="container-scroller" id="fundologin">
    <div class="container-fluid">
      <div class="row">
        <div id="pagpadrao" class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages" style="background-color: rgba(202, 202, 202, 0);">
          <div style="margin-left: 8.1%;">
            <img id="logopagpadrao" src="images/jericologo.png">
          </div>
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Alterar Senha</h3>
              <form>
                <div class="form-group">
                  <input type="email" class="form-control p_input" id="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" id="senha" placeholder="Senha Atual">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" id="novasenha" placeholder="Nova Senha">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                </div>
                <div></div>
                <div id="msgErro" class="alert alert-danger d-none" role="alert">
                  Erro ao atualizar senha<br>
                  <ul>
                    <li>O campo Email é obrigatório</li>
                    <li>Confira se sua senha atual está correta</li>
                    <li>O campo Senha é deve ter entre 6 e 100 caracteres sendo um deles não alfanumérico</li>
                  </ul>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary btn-block enter-btn" onclick="alterarSenha()">ATUALIZAR SENHA</button>
                  <div id="loading" class="loading-container">
                    <div id="spinner" class="spinner"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/misc.js"></script>


  <script src="API's/alterar_senha.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>
