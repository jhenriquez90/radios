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
		<title>VISUALIZAR USUARIOS</title>
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
										<h2>OPCIONES</h2>
										<span class="byline">Podrá tener acceso a:</span>
									</header>
									<ul class="style1">
										<li class="first">
											<p class="date"><a href="ingresar_usuario.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center"></a></p>
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
										<h2 align="center">USUARIOS</h2>
										<span class="byline">VISUALIZAR USUARIOS EXISTENTES</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
							    <form method="post" action="" >
							      <p align="center"> <b> <u> SUPERUSUARIO </u> </b> </p>
							        <?php

				require("../conexion/conexion.php"); 
				$sql=("SELECT * FROM usuario where cod_nivel='1'");
				$query=mysqli_query($conexion,$sql);
				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
				echo "<td align=center> <b> USUARIO </b> </td>";
				echo "<td align=center> <b> NIVEL </b> </td>";
				
?>
							        <?php 
  
	while($arreglo=mysqli_fetch_array($query))
	{
		$niv=("SELECT *FROM nivel where cod_nivel='$arreglo[2]'");
	$quer=mysqli_query($conexion,$niv);
	$f2=mysqli_fetch_array($quer);
			echo "<tr class='success'>";
			echo "<td align=center>$arreglo[0]</td>";
             echo "<td align=center>$f2[1]</td>";
				echo "</tr>";
			
	}
	echo "</font>";
echo "</table>";
?>
						          </p>
 <p>&nbsp;</p> 
            <p align="center"> <b> <u> ADMINISTRADOR </u> </b> </p>
            
<!-- fin-->  
            
                   <!-- inicio tabla --> 
            
          <?php

				require("../conexion/conexion.php");
				$sql=("SELECT * FROM usuario where cod_nivel='2'");
				$query=mysqli_query($conexion,$sql);
				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
				echo "<td align=center> <b> USUARIO </b> </td>";
				echo "<td align=center> <b> CLAVE </b> </td>";
			echo "<td align=center> <b> NIVEL </b> </td>";
				echo "<td> <b> ELIMINAR </b> </td>";
?>
  <?php 
  
	while($arreglo=mysqli_fetch_array($query))
	{
		$niv=("SELECT *FROM nivel where cod_nivel='$arreglo[2]'");
	$quer=mysqli_query($conexion,$niv);
	$f2=mysqli_fetch_array($quer);
			echo "<tr class='success'>";
				echo "<td align=center><a href='actuusu.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align=center>$arreglo[1]</td>";
						echo "<td align=center>$f2[1]</td>";
				 	echo "<td><a href='usuarios.php?cod=$arreglo[0]&codborrar=2'>eliminar</a></td>";
					echo "</tr>";
			
	}
	echo "</font>";
echo "</table>";
extract($_GET);
					if(@$codborrar==2){
			$sqlborrar="DELETE FROM usuario WHERE user='$cod'";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='usuarios.php'</script>";
					}
?>
</p>

 <p>&nbsp;</p> 
          <p align="center"> <b> <u> INVITADO </u> </b> </p>
            
<!-- fin-->  
            
                   <!-- inicio tabla --> 
            
          <?php

				require("../conexion/conexion.php");
				$sql=("SELECT * FROM usuario where cod_nivel='3'");
				$query=mysqli_query($conexion,$sql);
				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
				echo "<td align=center> <b> USUARIO </b> </td>";
				echo "<td align=center> <b> CLAVE </b> </td>";
			echo "<td align=center> <b> NIVEL </b> </td>";
				echo "<td> <b> ELIMINAR </b> </td>";
?>
  <?php 
  
	while($arreglo=mysqli_fetch_array($query))
	{
		$niv=("SELECT *FROM nivel where cod_nivel='$arreglo[2]'");
	$quer=mysqli_query($conexion,$niv);
	$f2=mysqli_fetch_array($quer);
			echo "<tr class='success'>";
				echo "<td align=center><a href='actuusu.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align=center>$arreglo[1]</td>";
						echo "<td align=center>$f2[1]</td>";
				 	echo "<td><a href='usuarios.php?cod=$arreglo[0]&codborrar=2'>eliminar</a></td>";
					echo "</tr>";
			
	}
	echo "</font>";
echo "</table>";
extract($_GET);
					if(@$codborrar==2){
			$sqlborrar="DELETE FROM usuario WHERE user='$cod'";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='usuarios.php'</script>";
					}
?>
</p>

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
			<div class="container">&copy; All rights reserved.</div>
	</div>


</body>
</html>