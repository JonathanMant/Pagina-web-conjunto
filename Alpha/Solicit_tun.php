<?php 
session_start();
extract($_GET);
extract($_POST);
require("connect_db.php");
$cedd=$_SESSION['cedula'];
$horas=$_POST['horaa'];
$fechas=$_POST['fechaa'];
$reqlen=strlen($horas)*strlen($fechaa);
if($reqlen > 0){

	$sentencia="INSERT INTO turno (id_turno ,fecha , hora , propietario_login_cedula) values (null,'$fechas', '$horas','$cedd')";
   $resent=mysqli_query($mysqli,$sentencia);
   if ($recent==null){

   	echo "Error de procesamiento";
   	echo "<script>alert('Error en el proceso')</script>";
   	header("location:index_propietario.html");

   	echo "<script>location.href='index_propietario.html'</script>";

   }else{

echo '<script>alert("Turno Asignado")</script>';
echo "<script>location.href='index_propietario.html'</script>";

   }
}else{

echo 'no a completado los cuadros requeridos';

}

 ?>