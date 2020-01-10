<?php
session_start();
if($_SESSION['cedula']){
	session_destroy();
	header("location: index.html");
}
else{
	header("location: index.html");
}




?>