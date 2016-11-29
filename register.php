<?php
if ($_POST) {
  session_start();
  header('Content-Type: text/html;charset=utf-8');
  include_once 'includes/bdd.php';
  $con = crearConexion();
  $con -> set_charset("utf-8");
  $id_usr=$_POST['id_usuario'];
  $usuario=$_POST['username'];
  $pass=$_POST['password'];
  $md5_pass=md5($pass);
  $repass=$_POST['repassword'];
  $email=$_POST['email'];
  $sql='INSERT INTO users_comunes(id_usuario,username,password,email) VALUES (?,?,?,?)';
  $stmt=$con->prepare($sql);
  $stmt->bind_param('isss', $id_usr, $usuario, $md5_pass, $email);
  $stmt->execute();
  $con->close();
  header('Location:bienvenido.html');
    }else {
    echo "<script>alert(Las contraseñas deben ser iguales);</script>";
  }


?>
