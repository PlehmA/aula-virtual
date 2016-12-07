<?php
session_start();
include_once ('includes/bdd.php');
class Login
{
	public function nueva_sesion()
	{
		$nombre = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
	    $sql = "SELECT username,password FROM usuarios";
		$result = mysql_query($sql,Conectar::con());
		var_dump($nombre);
		if($reg=mysql_fetch_array($result))
		{
			$_SESSION['nick'] = $reg['username'];
			header("Location:welcome.php");
		}else{
			header("Location:index.php?usuario=no_existe");
		}

	}
}
?>
