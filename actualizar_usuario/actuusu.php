<?php
session_start();
if ($_SESSION['logeado']!='1') {
	echo "No registrado";
	header("Location:../index.php"); 
}
?>
<!DOCTYPE HTML>

<html>
<head>
		<title>ACTUALIZAR USUARIO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
        
        <!--logo navegador!-->
        <link rel="shortcut icon" href="/tconect/pagina_principal/images/dbll.ico" />
 <!--!-->     
       
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
<body onload="nobackbutton();"> 
<script languaje = "javascript">
function nobackbutton(){
	
   window.location.hash="no-back-button";
	
   window.location.hash="Again-No-back-button" //chrome
	
   window.onhashchange=function(){window.location.hash="no-back-button";}
	
}
	</script>

	<!-- Header -->
	<div id="header-wrapper">
		<div id="header">
			<div class="container">
				<div id="logo"> <!-- Logo -->
                 <a href="../index.php"><img src="../pagina_principal/images/rp.png" alt="" width="150" height="160" align="left"></a>
					<h1><strong><a href="../index.php">CONECTIVIDAD</a></strong></h1>
					<p><span></span> <span>"DIRECCION NACIONAL DE TELEMATICA"</span></p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;				</p>
			  </div>
			</div>
			<div id="menu-wrapper">
				<div class="container">
					<nav id="nav">
					  <ul class= "nav">
							<li ><a href="../administrador/administrador.php">ADMINISTRADOR</a></li>
							<li ><a href="usuarios.php">USUARIOS</a>  </li>
                         
						<li ><a href="../actualizar_equipo/equipo.php">EQUIPOS</a></li>
							<li><a href="../login/salir.php">salir</a></li>
					  </ul>
				  </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header -->
		
	<!-- Main -->
		<div id="main-wrapper">
			<div class="container">

				<div id="main">
	
					<div class="row">
					
						<!-- Sidebar -->
							<div id="sidebar" class="4u">
								<section>
									<header>
										<h2>NAVEGADOR</h2>
										<span class="byline">Podrá tener acceso a:</span>
									</header>
									<ul class="style1">
										<li class="first">
											<p class="date"><a href="ingresar_usuario.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center" border="0"></a></p>
											Ingresar Usuario Nuevo.</li>
										<li class="first"><a href="#"></a>									    </li>
									  <li>
										<p class="date"><a href="usuarios.php"><img src="images/modificar.png" alt="" width="65" height="65" align="center"></a></p>
										  <p>Modificar Usuario Existente.</p>
									  </li>
									</ul>
														
								</section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
							<div id="content" class="8u skel-cell-important">
							  <section>
								<header>
										<h2 align="center">ACTUALIZAR USUARIO</h2>
										<span class="byline">INGRESE NUEVOS DATOS</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
							    
                                <?php
                 extract($_GET);
				require("../conexion/conexion.php");
				$sql=("SELECT * FROM usuario where user='$cod'");
				$query=mysqli_query($conexion,$sql);

				 while($arreglo=mysqli_fetch_array($query)){
				    	$user=$arreglo[0];
						$nivel=$arreglo[2];
						}
							
?>

<form name="form1" method="post" action="codmodusuario.php">
  <div align="center">
  <p>
  <b>
    <label for="usuario">USUARIO:<br />
    </label>
    <input type="text" name="usuario" id="usuario" value="<?php echo $user ?>" readonly>
  </b>
  </p>
  <p>
  <b>
    <label for="pass">CLAVE:<br />
    </label>
    <input type="password" name="pass" id="pass">
  </b>
  </p>
  <p>
  <b>
    <label for="rpass">REPETIR CLAVE:</label>
 </b>
  </p>
  <p>
    <input type="password" name="rpass" id="rpass">
  </p>
  <p>
   <p>
  <b>
    <label for="nivel">NIVEL:</label>
 </b>
  </p>
    <select name="nivel" id="nivel">
      <option><?php echo $nivel ?></option>
      <?php
require('../conexion/conexion.php');
$query='Select *FROM nivel where cod_nivel!="1"';
$resultado= mysqli_query($conexion,$query) or die('error: '.mysqli_error($conexion));
while ( $row = mysqli_fetch_array($resultado) )
{
	$ctc=$row['cod_nivel'];
	$ctn =$row['nivel']; 
?>
      <option value="<?php echo $ctc?>"><?php echo $ctn; }?></option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="GUARDAR">
  </p>
  </div>
</form>

                                
<!--_________________________________________!-->
                                  </p>
								  
								</section>
							</div>
						<!-- Content -->
							
					</div>
				
				</div>
			</div>
		</div>
	<!-- /Main -->

	

	<!-- Copyright -->
<div id="copyright">
			<div class="container">&copy;  All rights reserved.</div>
	</div>


</body>
</html>