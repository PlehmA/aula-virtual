<?php
session_start();
if ($_SESSION['logeado']){
	header('Content-Type: text/html;charset=utf-8');
  include_once ('includes/bdd.php');
  $con = crearConexion();
  $con -> set_charset("utf-8");
}
	?>

<!DOCTYPE html>
<html lang="es">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images\idea-genial.png">
    <title>..--|Aula virtual|--..</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style,css">
    <link rel="stylesheet" href="CSS\font-awesome.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body style="background-color: #000; color: #fff">
<div class="container">
<div class="page-header pull-right">
	<nav>
		<a href="subirimagenes.php"><button class="btn btn-primary active"> Subir Imagenes </button></a>
		<a href="index.php" ><button type="logout" name="logout" class="btn btn-primary active" onclick="<?php session_destroy(); ?>"> Logout </button></a>
	</nav>
</div>
<div class="container"></div>
<table class="table">
<?php
	header('Content-Type: text/html;charset=utf-8');
    include_once 'includes/bdd.php';
    $con = crearConexion();
    $con -> set_charset("utf-8");
	$sql = "SELECT u.username,f.titulo,f.respuestas,f.ult_respuesta from foro f inner join users_comunes u on f.ID=u.id_usuario order by f.ult_respuesta";
	$result = $con->query($sql);
 			echo "<thead>";
            echo "<tr>";
            echo "<th>";
            echo "Autor";
            echo "</th>";
            echo "<th>";
            echo "Titulo";
            echo "</th>";
            echo "<th>";
            echo "Respuestas";
            echo "</th>";
            echo "<th>";
            echo "Ultima Respuesta";
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
             <?php
             echo "</td>";
             echo "<td>";
            ?>
            <?php
            echo "</td>";
            echo "</tr>";
          }

              ?>
</tbody>

</table>

<a href="formulario.php"><button class="btn btn-primary active center-block"> Nuevo tema </button></a>
</div>
<script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
    <script src="JS\fblogin.js"></script>
</body>
</html>
