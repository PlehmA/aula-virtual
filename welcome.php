<?php
session_start();
if ($_SESSION['logeado'])
{
	echo "<h1 style=text-align:center;>¡Bienvenidos!</h1>";
	echo "</br>";
	echo "¿Como andas " .$_SESSION['user']."?";
	echo "</br>";
	echo "Horario de conexion: ". $_SESSION['time'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<hr>
		<a href='inicio.php' <?php session_destroy(); ?>><button type="submit" name="button" class="btn btn-danger">Logout</button></a>
		<br>
		<hr>
		<a href='list_productos.php'>Lista productos</a>
		<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
