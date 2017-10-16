<?php
session_start();
require("../conexion/conexion.php");
$cdirec=$_POST['ctipo'];
	$direc=$_POST['tipo'];
	$sentencia="UPDATE direccion SET cod_direccion='$cdirec',direccion='$direc' WHERE  cod_direccion='$cdirec'";
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	
		echo "<script>location.href='direccion.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		echo "<script>location.href='direccion.php'</script>";
	}
?>