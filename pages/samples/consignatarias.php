<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Obter consignatarias";
  include 'header.php';
?>
<style>
  form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin-top: 10px;
  }

  label {
    font-weight: bold;
  }

  input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 2px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 13px;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
        <div class="content-wrapper">
            <div class="row mb-2">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4">Consignatárias</h5>
                    <div class="table-responsive">
                      <table id="tabela-consignatarias" class="table center-aligned-table">
                        <div id="loading" class="loading-container">
                          <div class="spinner"></div>
                        </div>
                        <thead>
                          <tr class="text-primary">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Código</th>
                            <th>Usuário</th>
                            <th>Senha</th>
                            <th>Data de Criação</th>
                            <th>Usuario Criação</th>
                            <th>Data de alteração</th>
                            <th>Usuário de alteração</th>
                            <th>Ativo</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <!--
            <form onsubmit="excluirConsignataria(event)">
              <label>Excluir Consignatária:</label><br>
              <div class="form-group">
                  <input type="text" class="form-control p_input" id="nome" placeholder="Nome">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control p_input" id="codigo" placeholder="Código">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control p_input" id="senha" placeholder="Senha">
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
              </div>
              <input type="submit" value="Excluir" style="width: 100%">
          </form>

-->
          </div>
          
    </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
            </span>
          </div>
        </footer>

      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>


  <script src="API's/botao_sair.js"></script>
  <script src="API's/consignatarias/obter_consignatarias.js"></script>
  <script src="API's/login.js"></script>
  <script src="API's/consignatarias/remover_consignataria.js"></script>
  <script src="API's/consignatarias/alterar_consignataria.js"></script>
</body>

</html>
