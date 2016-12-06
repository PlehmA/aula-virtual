<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar productos</title>
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css\font-awesome.css" media="screen" title="no title">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav>
          <a href="inicio.php"><button type="button" name="button" class="btn btn-default" style="background-color: #ff69b4; box-shadow: 2px 2px 5px #999;">Login</button></a>
        </nav>
      </div>

    </header>
    <div class="container">
      <div class="jumbotron text-center">
        <h2>LISTA DE USUARIOS</h2>
      </div>
    </div>
      <div class="container">
        <div class="table-responsive">
          <table class="table">
            <?php
            header('Content-Type: text/html;charset=utf-8');
            include_once 'includes/bdd.php';
            $con = crearConexion();
            $con -> set_charset("utf-8");
            $sql="SELECT * FROM `users_comunes` ORDER BY `users_comunes`.`id_usuario` ASC";
            $result=$con->query($sql);
            echo "<thead>";
            echo "<tr>";
            echo "<th>";
            echo "Codigo";
            echo "</th>";
            echo "<th>";
            echo "Usuarios";
            echo "</th>";
            echo "<th>";
            echo "Claves";
            echo "</th>";
            echo "<th>";
            echo "E-mail";
            echo "</th>";
            echo "<th>";
            echo "Fecha alta";
            echo "</th>";
            echo "<th>";
            echo "Eliminar";
            echo "</th>";
            echo "<th>";
            echo "Actualizar";
            echo "</th>";
            echo "</tr>";
            echo "</thead>";
            echo " <tbody>";
            while ($row=$result->fetch_row()) {
              echo "<tr>";
              foreach ($row as $valor) {
                echo "<td>";
                echo "$valor";
                echo "</td>";
              }
              echo "<td>";
             ?>
             <a href="#" onclick="deleteUsuario('<?php echo $row[0]; ?>')"><button type="button" name="button" class="btn btn-danger">X</button></a>
             <?php
             echo "</td>";
             echo "<td>";
            ?>
            <a href="#" onclick="updateUsuario('<?php echo $row[0]; ?>')"><button type="button" name="button" class="btn btn-info"><span><i class="fa fa-refresh" aria-hidden="true"></i></span></button></a>
            <?php
            echo "</td>";
            echo "</tr>";
          }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <hr>
        <div class="col-md-12">
          <p class="text-center">
            &copy 2016 CASA HOMERO todos los derechos reservados
          </p>
        </div>
      </div>
    </div>
    <script src="js\jquery-3.1.1.js" charset="utf-8"></script>
    <script src="js\bootstrap.js" charset="utf-8"></script>
    <script src="js\deleteuser.js"></script>
    <script src="js\udateusuario.js"></script>
  </body>
</html>
