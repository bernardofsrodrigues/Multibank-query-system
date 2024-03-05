<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Excluir Consignatária</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<style>
      #spinner {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(50%,50%);
    }
</style>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages"  style="background-image: linear-gradient(darkblue, #00008b9c);">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Excluir Consignatária</h3>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control p_input" placeholder="Nome" id="nnome">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control p_input" placeholder="Código" id="ccodigo">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control p_input" placeholder="Senha" id="ssenha">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  
                </div>
                <div></div>
                <div id="msgErro" class="alert alert-danger d-none" role="alert">
                  Erro ao realizar cadastrar<br>
                  <ul>
                    <li>Nome, código ou senha inválidos</li>
                  </ul>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" onclick="excluirConsignataria(event)">EXCLUIR</button>
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

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/misc.js"></script>


  <script src="API's/login.js"></script>
  <script src="API's/consignatarias/remover_consignataria.js"></script>

</body>

</html>
