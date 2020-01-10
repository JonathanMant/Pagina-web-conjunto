<?php

$mysqli= new MySQLi("localhost","id6681478_con","elnene","id6681478_conjunto");
if($mysqli -> connect_errno){
	die("Fallo la conexion: (". $mysqli -> mysql_connect_errno() . ")". $mysqli -> mysqli_connect_error());
}

?>