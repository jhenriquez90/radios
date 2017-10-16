<?php
session_start();
include('../conexion/conexion.php');
	
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
	$query=mysqli_query($conexion,"SELECT * FROM inventario WHERE idradio='$idradio'");
	$resultado=mysqli_num_rows($query);
			if($resultado>0){
				?>
echo'<script>alert("El radio fue registrado anteriormente.");</script>;
    echo'<SCRIPT LANGUAGE="javascript">;
		location.href="ingresar_equipo.php";
	</SCRIPT>';
	<?php
			}else{
mysqli_query($conexion,"INSERT INTO inventario VALUES('$idradio','$inventario','$serie','$tiporadio','$modeloradio','$asignaciogeneral','$jefatura','$asignacionindividual','$codcm2','$codlcp2','$codcp2','$codipsc2','$observacio')");
				?>
echo'<script>alert("Radio Ingresado con exito.");</script>;
	echo'<SCRIPT LANGUAGE="javascript">;
		location.href="equipo.php";
	</SCRIPT>';
	<?php
			}			
?>