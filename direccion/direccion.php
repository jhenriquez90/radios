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
		<title>VISUALIZAR TIPOS DE RADIO</title>
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
							<li ><a href="../actualizar_usuario/usuarios.php">USUARIOS</a>  </li>
                         
						<li ><a href="../actualizar_equipo/equipo.php">EQUIPOS</a></li>
							<li><a href="../index.php">salir</a></li>
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
											<p class="date"><a href="ingresar_direccion.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center"></a></p>
											Registre Nueva Direccion.</li>
										<li class="first"><a href="#"></a>									    </li>
									  <li>
										<p class="date"><a href="tipos.php"><img src="images/modificar.png" alt="" width="65" height="65" align="center"></a></p>
										  <p>Modificar Direccion Existente.</p>
									  </li>
									</ul>
														
								</section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
						  <section>
								<header>
										<h2 align="center">DIRECCION</h2>
										<span class="byline">VISUALIZAR EXISTENTES</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
							   <form method="POST" action="buscar.php"> 
            <p><strong>Palabra clave:</strong>
              <input type="text" name="T1" size="20">
  <input type="submit" value="Buscar" name="buscar" />
            </p>
         </form> 
		
			<?php

				require("../conexion/conexion.php");
				$sql=("SELECT * FROM direccion");
				$query=mysqli_query($conexion,$sql);

				echo "<table width=80% border=1  class='table table-hover'; style='opacity:100;filter:alpha(opacity=50);'>";
				echo "<font color=#000000>";
				echo "<tr class='warning'>";
						echo "<td align='center' <b> CODIGO </b> </td>";
						echo "<td align='center'> <b> DIRECCION </b> </td>";
						echo "<td align='center'> <b> ELIMINAR </b> </td>";
				?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td align='center'> <a href='actudireccion.php?cod=$arreglo[0]'>$arreglo[0]</td>";
				    	echo "<td align='center'> $arreglo[1]</td>";
						echo "<td align='center'> <a href='direccion.php?cod=$arreglo[0]&codborrar=2'>eliminar</a></td>";
					echo "</tr>";
				}

				echo "</table>";
				extract($_GET);
					if(@$codborrar==2){
			$sqlborrar="DELETE FROM direccion WHERE cod_direccion='$cod'";
						$resborrar=mysqli_query($conexion,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='direccion.php'</script>";
					}
			?>
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