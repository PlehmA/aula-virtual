<?php
if ($pass==$repass) {
  session_start();
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  $id_usr=$_POST['id_usuario'];
  $nombre=$_POST['name'];
  $usuario=$_POST['username'];
  $pass=$_POST['password'];
  $repass=$_POST['repassword'];
  $email=$_POST['email'];
  $sql='INSERT INTO usuarios(id_usuario,name,username,password,email) VALUES (?,?,?,?,?)';
  $stmt=$con->prepare($sql);
  $stmt->bind_param('issss', $id_usr, $nombre, $usuario, $pass, $email);
  $stmt->execute();
  $con->close();
  header('Location:bienvenido.html');
    }else {
    echo "<script>alert(Las contraseñas deben ser iguales);</script>";
  }


?>
