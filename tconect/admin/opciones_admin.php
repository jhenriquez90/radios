<?php
session_start();
if ($_SESSION['logeado']!='2') {
	echo "No registrado";
	header("Location:../index.php"); 
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>ADMINISTRADOR</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        
        <!--ajustar texto!-->
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1 "/>
<!--!-->
<!--logo navegador!-->
        <link rel="shortcut icon" href="/tconect/pagina_principal/images/dbll.ico" />
 <!--!-->     
        
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../pagina_principal/js/skel.min.js"></script>
		<script src="../pagina_principal/js/skel-panels.min.js"></script>
		<script src="../pagina_principal/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="../pagina_principal/css/skel-noscript.css" />
			<link rel="stylesheet" href="../pagina_principal/css/style.css" />
            
                    
			<link rel="stylesheet" href="../pagina_principal/css/style-desktop.css" />
      
            
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
            
            
           <!--!-->
            <div id="menu-wrapper">
			  <div class="container">
              <div id="nav">
					<nav id="nav">
						<ul class= "nav">
							<li ><a href="../index.php">INICIO</a></li>
							  <li ><a href="equipo.php">EQUIPOS</a></li>
                           <li><a href="../login/salir.php">salir</a></li>
						</ul>
				  </nav></div>
				</div>
			</div>
            
	<!-- fin Header -->
		
	<!-- Main -->
		<div id="main-wrapper">
			<div class="container">

				<div id="main">
	
					<div class="row">
					
						<!-- Sidebar -->
						<div id="sidebar" class="4u">
							<section>
									<header>
										<h2 align="left">OPCIONES</h2>
										<span class="byline">Podrá tener accedo a:</span>
									</header>
								  <ul class="style1">
									  <li>
											<p class="date"><img src="../pagina_principal/images/rdio.png" alt="" width="65" height="65" align="center"></p>
											<p><a href="equipo.php">Ingresar, Modificar y/o Visualizar Equipo.</a></p>
									</li>
									                                </section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
							<div id="content" class="8u skel-cell-important">
							  <section>
								<header>
										<span class="byline">Bienvenido al Sistema de Control de Inventario.</span>
							    </header>
								<p>Podra disponer de las siguientes opciones::</p>
									  <ul>
									     <li>1). Ingresar información del Equipo.</li>
									      <li>2). Visualizar los Equipos existentes.</li>
									      <li>3). Modificar la información de los Equipos.</li>
								        </ul>
									  </li>
									  <li>¿Quienes podrán tenes acceso al Sistema?</li>
									  <li>Se cuenta con los permisos de:</li>
									  <li>1). Super Administrador quien es el único que puede ingresar un usuario para administrar el sitio.</li>
									  <li>2). Administrador quien es creado sólo por el Super Administrador.</li>
							     <li>3). Visitante quien solo podre visualizar los equipos.</li>
							    </ul>
									<p>Puede utilizar la barra del menú o las opciones laterales para una mejor navegación.</p>
									<p>&nbsp;</p>
								  
							  </section>
							</div>
						<!-- Content -->
								</div></div></div></div>
	<!-- /Main -->

	<!-- Footer -->
		<div class="container">
			<div id="footer">
				<div class="row">
					<section class="4u">
					
						<ul class="default">
							<ul>
							   <div align="center"><img src="images/pl.jpg" alt="" width="189" height="256" align="middle"></div>
							  
          
						  </ul>
							
						</ul>
					</section>
					<section class="4u">
						<header>
							
						</header>
						<ul class="default">
							<ul>
							  <ul>
							    <li>
							      <div align="justify">Cuídame, oh Dios, porque en ti busco refugio.</div>
							    </li>
							    <div align="justify">						      
							      <p align="right">Salmos 16:1							    </p>
							    </div>
                                <li></li>
							  </ul>
						  </ul>
						</ul>
					</section>
					<section class="4u">
						
					  <ul class="default">
							<div align="center"><img src="../images/telematica.png" alt="" width="244" height="241" align="middle"></div>
						</ul>
					</section>
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">&copy;All rights reserved.</div>
		</div>


	</body>
</html>