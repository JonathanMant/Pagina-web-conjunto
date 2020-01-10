<?php  

session_start();
require("connect_db.php");


$cedulas=$_POST['cedulaa'];
$contraseñas=$_POST['contra'];






$sql=mysqli_query($mysqli,"SELECT*FROM login WHERE cedula='$cedulas'");
if($f2=mysqli_fetch_assoc($sql)){
	if($contraseñas==($f2['contra_admin'])){
		$_SESSION['cedula']=$f2['cedula'];
        $_SESSION['tipo']=$f2['tipo'];

        echo ' <script>alert("Bienvenido Administrador ")</script>';
    	echo "<script>location.href='index_admin.html'</script>";

}

}

$sql12=mysqli_query($mysqli,"SELECT*FROM login WHERE cedula='$cedulas'");
if($f=mysqli_fetch_assoc($sql12)){
if($contraseñas==($f['contraseña'])){

     $_SESSION['cedula']=$f['cedula'];
     $_SESSION['tipo']=$f['tipo'];


     header("Location: index_propietario.html");

    }else{
    	echo ' <script>alert("Contraseña incorrecta ")</script>';
    	echo "<script>location.href='login.html'</script>";
    }
}else{

   echo ' <script>alert("No vive aqui compre")</script>';

   echo "<script>location.href='index.html'</script>";

}





?>