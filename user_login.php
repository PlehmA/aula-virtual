<?php
var_dump(error_log(message))
include_once ('includes/bdd.php');
header('Content-Type: text/html;charset-UTF-8');
$usuario=$_POST['username'];
$pass=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$sql="call login_usuario2(?,?,@valor_existe)";
$stmt = $con->prepare($sql);
$stmt->bind_param('ss', $usuario, $pass);
$stmt->execute();
$result2=$con->query("SELECT @valor_existe");
$row=$result2->fetch_assoc();
if ($row['@valor_existe']==0)
{

	echo "<script>alert ('Ingreso invalido al sistema!')</script>";
    	echo "<script>window.location.assign('index.php')</script>";


}
else
{
			session_start();
			$_SESSION['username']=$usuario;
			$_SESSION['logeado']=true;
			$con->close();
      header('Location:userapp.php');
			};

 ?>
