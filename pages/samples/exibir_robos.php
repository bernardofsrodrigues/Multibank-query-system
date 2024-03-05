<!DOCTYPE html>
<html lang="en">

<?php
  echo $title = "Robôs";
  include 'header.php'
?>

        <div class="content-wrapper">
          <div class="content-wrapper">
            <!-- Adiciona um novo elemento div para exibir a lista de usuários -->
            <div id="robos" class="container">
              <!-- A lista de usuários será exibida aqui -->
            </div>
          </div>
        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
              <a href="#">Admin</a> &copy; 2023
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


  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>



  <script src="API's/login.js"></script>
  <script src="API's/consignatarias/exibir_robos.js"></script>
</body>

</html>