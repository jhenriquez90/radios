<?php
session_start();
require("../conexion/conexion.php");
$idradio=$_POST['idradio'];
	$inventario=$_POST['inventario'];
	$serie=$_POST['serie'];
	$tiporadio= $_POST['tiporadio'];
	$modeloradio=$_POST['modeloradio'];
	$asignaciogeneral=$_POST['asignaciogeneral'];
	$jefatura=$_POST['jefatura'];
	$asignacionindividual=$_POST['asignacionindividual'];
	$codcm2=$_POST['codcm2'];
	$codlcp2=$_POST['codlcp2'];
	$codcp2= $_POST['codcp2'];
	$codipsc2=$_POST['codipsc2'];
	$observacio=$_POST['observacio'];
	

	$sentencia="UPDATE inventario SET idradio='$idradio',cod_inventario='$inventario',serie='$serie',tipo_radio='$tiporadio',modelo_radio='$modeloradio',cod_direccion='$asignaciogeneral',jefatura='$jefatura',asignacion_individual='$asignacionindividual',cod_cm='$codcm2',cod_lcp='$codlcp2',cod_cp='$codcp2',cod_ipsc='$codipsc2',observacion='$observacio' WHERE  idradio='$idradio'";
	$resent=mysqli_query($conexion,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	
		echo "<script>location.href='equipo.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='equipo.php'</script>";

		
	}
?>