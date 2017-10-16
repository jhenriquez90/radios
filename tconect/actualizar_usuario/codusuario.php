
<?php
session_start();

////////////////////////////////////////////////////
	$correo=$_POST['usuario'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$nivel=$_POST['nivel'];
	$contra= md5($pass);
require('../conexion/conexion.php');
////////////////////////////////////////////////////
$usuarior = mysqli_query($conexion,"SELECT * FROM usuario WHERE user='$correo'");
	$check_mail=mysqli_num_rows($usuarior);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el usuario, verifique sus datos");</script> ';
			}else{
				
				$meter=mysqli_query($conexion,"INSERT INTO usuario VALUES('$correo','$pass','$nivel')");
				
        echo"Usuario <strong>$correo</strong> creado con exito</br>";
		echo "<script>location.href='usuarios.php'</script>";
	
			}
		}
			else{
				echo '<script>alert("La clave no coincide")</script> ';
				echo "<script>location.href='ingresar_usuario.php'</script>";

		
			}