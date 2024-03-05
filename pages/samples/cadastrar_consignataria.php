<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro</title>
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
    #spinner {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(50%,50%);
    }
  </style>
</head>

<body>
  <div class="fundologin">
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div id="pagpadrao" class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages" style="background-color: rgba(202, 202, 202, 0);">
          <div style="margin-left: 8.1%;">
            <img id="logopagpadrao" src="images/jericologo.png">
          </div>
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Cadastrar Consignatária</h3>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control p_input" placeholder="Nome" id="nomee">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control p_input" placeholder="Código" id="codigoo">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control p_input" placeholder="Usuário" id="usuarioo">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" placeholder="Senha" id="senhaa">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  
                </div>
                <div></div>
                <div id="msgErro" class="alert alert-danger d-none" role="alert">
                  Erro ao realizar cadastrar<br>
                  <ul>
                    <li>O campo Nome é obrigatório</li>
                    <li>O campo Email é obrigatório e válido</li>
                    <li>O campo Senha é deve ter entre 6 e 100 caracteres sendo um deles não alfanumérico</li>
                  </ul>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" onclick="cadastraConsignataria (event)">CADASTRAR</button>
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



  <script src="API's/login.js"></script>
  <script src="API's/register.js"></script>
  <script src="API's/consignatarias/cadastrar_consignataria.js"></script>


</body>

</html>
