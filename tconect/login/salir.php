 <?php 
session_start();
if($_SESSION['u_usuario']){	
	session_destroy();
	header("location:../index.php");
}
else{
	header("location:../index.php");
}
?>