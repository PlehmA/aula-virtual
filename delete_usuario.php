<?php
session_start();
if ($_SESSION['logeado']) {
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  if (isset($_GET['id'])) {
    $codEliminar = $_GET['id'];
    $sql = "DELETE FROM users_comunes WHERE id_usuario=".$codEliminar;
    $result = $con->query($sql);
    header("Location:list_productos.php");
  }
}
 ?>
