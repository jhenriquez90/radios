<?php
session_start();
include('../conexion/conexion.php');
	$ctipo=$_POST['ctipo'];
	$tipo=$_POST['tipo'];		
	$query=mysqli_query($conexion,"SELECT * FROM t_radio WHERE cod_tipo='$ctipo'");
	$resultado=mysqli_num_rows($query);
			if($resultado>0){
				?>
echo'<script>alert("El tipo de radio fue registrado anteriormente.");</script>;
    echo'<SCRIPT LANGUAGE="javascript">;
		location.href="ingresar_tipo.php";
	</SCRIPT>';
	<?php
			}else{
mysqli_query($conexion,"INSERT INTO t_radio VALUES('$ctipo','$tipo')");
				?>
echo'<script>alert("Tipo de Radio Ingresado con exito.");</script>;
	echo'<SCRIPT LANGUAGE="javascript">;
		location.href="ingresar_tipo.php";
	</SCRIPT>';
	<?php
			}			
?>