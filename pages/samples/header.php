<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/minijericologosemfundo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  </head>
  <?php
    if(isset($_COOKIE['nivel'])) {
      $nivel = $_COOKIE['nivel'];
    } else {
        $nivel = "admin";
    }
  ?>
  <body>
    <div class=" container-scroller">
      <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="bg-white text-center navbar-brand-wrapper">
          <a class="navbar-brand brand-logo" href="index.php"><img src="images/jericologo.png" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/minijericologo.png"
              alt=""></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button"
            data-toggle="minimize">
            <span class="navbar-toggler-icon"></span>
          </button>
          <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
  
      <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-right">
          <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar"  >
            <div class="user-info">
              <img src="images/perfiljerico.png" alt="">
              <p class="name">Daniel Jericó</p>
              <p class="designation">Manager</p>
            </div>
            <ul class="nav">
  
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#clientes" aria-expanded="false" aria-controls="clientes">
                  <img src="images/icons/clientes.png" alt="">
                  <span class="menu-title">Clientes<i class="fa fa-sort-down"></i></span>
                </a>
                <div class="collapse" id="clientes">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="obter_clientes.php">
                        Extrato
                      </a>
                    </li>
                  </ul>
                </div>
              </li>


              <!-- if ($nivel == "admin") { -->
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false"
                                aria-controls="sample-pages">
                                <img src="images/icons/usuarios.png" alt="">
                                <span class="menu-title">Usuários<i class="fa fa-sort-down"></i></span>
                              </a>
                              <div class="collapse" id="sample-pages">
                                <ul class="nav flex-column sub-menu">
                                  <li class="nav-item">
                                    <a class="nav-link" href="register.php">
                                      Criar novo usuário
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="alterar_senha.php">
                                      Alterar senha<br>do usuário
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="exibir_usuarios.php">
                                      Exibir todos usuários
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#consignatarias" aria-expanded="false" aria-controls="consignatarias">
                                <img src="images/icons/consignatarias.png" alt="">
                                <span class="menu-title">Consignatárias<i class="fa fa-sort-down"></i></span>
                              </a>
                              <div class="collapse" id="consignatarias">
                                <ul class="nav flex-column sub-menu">
                                  <li class="nav-item">
                                    <a class="nav-link" href="consignatarias.php">
                                      Obter consignatárias
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="cadastrar_consignataria.php">
                                      Cadastrar uma<br>consignatária
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="exibir_robos.php">
                                      Obter Robôs
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </li>

              <!--}-->
          
              <li class="nav-item">
                <a class="nav-link" href="#" id="sair">
                  <img src="images/icons/sair.png" alt="">
                  <span class="menu-title">Sair</span>
                </a>
              </li>
  
            </ul>
          </nav>

<script src="API's/botao_sair.js"></script>
<script src="API's/login.js"></script>