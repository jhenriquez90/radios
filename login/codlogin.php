<?php
include('../conexion/conexion.php');
$usu = $_POST['usuario'];
$pass = $_POST['password'];
$query= "Select *from usuario where user='$usu' and pass='$pass'";
$resultado= mysqli_query($conexion,$query) or die ('error'.mysqli_error($conexion));
	if($f2=mysqli_fetch_array($resultado)){		
	$usuarios = $f2['user'];
	$rol = $f2['cod_nivel'];	   
	session_start();
	$_SESSION['role'] = $rol;
switch ($rol) { 

    case '1':
	$_SESSION['logeado']='1';
	$_SESSION['u_usuario'] = $usuarios;
	
?>
    echo'<script>alert("BIENVENIDO")</SCRIPT>';
    echo'<SCRIPT LANGUAGE="javascript">
		location.href="../administrador/administrador.php";
		</SCRIPT>';
<?php
        break; 
		    
    case '2':
$_SESSION['logeado']='2';	    
	$_SESSION['u_usuario'] = $usuarios;
	?>
        echo'<script>alert("BIENVENIDO")</SCRIPT>';
    echo'<SCRIPT LANGUAGE="javascript">
		location.href="../admin/equipo.php";
		</SCRIPT>';
<?php
        break; 
		
 case '3':
$_SESSION['logeado']='3';	    
	$_SESSION['u_usuario'] = $usuarios;
	 
	?>
        echo'<script>alert("BIENVENIDO")</SCRIPT>';
    echo'<SCRIPT LANGUAGE="javascript">
		location.href="../solover/equipo.php";
		</SCRIPT>';
<?php
        break; 
}
	}	 
	else
{
	?>
echo'<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</SCRIPT>';
	echo'<SCRIPT LANGUAGE="javascript">;
		location.href="login.php";
	</SCRIPT>';
	
<?php		}
	
?>