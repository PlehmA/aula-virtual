<?php
class Conectar
{
	public static function con()
	{
		$con = mysql_connect("localhost","root","p12345678");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("login");
		return $con;
	}
}
?>
