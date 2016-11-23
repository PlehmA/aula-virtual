<?php
var_dump(error_log(message));
include_once ('');
header('Content-Type: text/html;charset-UTF-8');
$usuario=$_POST['username'];
$password=$_POST['password'];
$con=crearConexion();
$con->set_charset("UTF-8");
$md5_pass = md5($password);
$sql="SELECT username,password FROM usrs_cmns";
var_dump(error_log(message));
$stmt = $con->prepare($sql);
var_dump(error_log(message));
$stmt->bind_param('ss', $usuario, $md5_pass);
var_dump(error_log(message));
$stmt->execute();
var_dump(error_log(message));
$result2=$con->query($sql);
var_dump(error_log(message));
$row=$result2->fetch_assoc();
if ($row[$sql]==0)
{

echo "<script>alert ('Ingreso invalido al sistema!')</script>";
echo "<script>window.location.assign('index.php')</script>";


}
else
{
session_start();
$_SESSION['username']=$usuario;
$_SESSION['logeado']=true;
header('Location:userapp.php');
			};

 ?>
