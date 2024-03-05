<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Exibir Usuários";
  include 'header.php';
?>
<style>
  form {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin-left: 17px;
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
        <!-- partial -->
        <div class="content-wrapper">
  <div class="col-lg-6 mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Usuários</h5>
        <table class="table table-striped">
          <div id="loading" class="loading-container">
            <div class="spinner"></div>
          </div>
          <thead>
            <tr class="">
              <th>#</th>
              <th>E-mail</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
 

  <!--
  <form method="post" action="">
    <label for="email">Endereço de E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Desabilitar Usuário">
  </form>
</div>
  -->
  
        <!-- partial:partials/_footer.html 
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
            </span>
          </div>
        </footer>-->

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

  <script src="API's/identidade.js"></script>
  <script src="API's/botao_sair.js"></script>
  <script src="API's/login.js"></script>
  <script src="API's/habilitacao_usuario.js"></script>


</body>

</html>