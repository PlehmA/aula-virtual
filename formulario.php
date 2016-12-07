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
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<div class="container text-center">
  <?php
  if(isset($_GET["respuestas"]))
    $respuestas = $_GET['respuestas'];
  else
    $respuestas = 0;
  if(isset($_GET["identificador"]))
    $identificador = $_GET['identificador'];
  else
    $identificador = 0;
?>
<table class="table">
<form name="form" action="agregar.php" method="post">
  <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
  <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
    <tr>
    <td><label for="" style="font-family: 'Lobster', cursive; font-size: 40px;" class="center-block"><?php
    session_start();
     if ($_SESSION['logeado']){
       header('Content-Type: text/html;charset=utf-8');
       include_once 'includes/bdd.php';
       $con = crearConexion();
       $con -> set_charset("utf-8");
      echo "Hi ".$_SESSION['username']."! ";}
      else {
        header ('location:https://i.ytimg.com/vi/_F9OtJ3Fp2w/sddefault.jpg');
      } ?></label></td>
    <td></td>
    </tr>
    <tr>
      <td><label for="">Titulo</label></td>
      <td><input type="text" name="titulo" required="required"></td>
    </tr>
    <tr>
      <td><label for="">Mensaje</label></td>
      <td><textarea name="mensaje" cols="50" rows="5" required="required" ></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" id="submit" name="submit" value="Enviar Mensaje" class="btn btn-success active pull-right"></td>
    </tr>
  </form>
</table>
</div>
<script src="JS/jquery-3.1.1.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/ie10-viewport-bug-workaround.js"></script>
    <script src="JS\fblogin.js"></script>
</body>
</html>
