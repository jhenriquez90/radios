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
		<title>INGRESAR TIPO DE RADIO</title>
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
										<h2>NAVEGADOR</h2>
										<span class="byline">Podrá tener acceso a:</span>
									</header>
									<ul class="style1">
										<li class="first">
											<p class="date"><a href="ingresar_direccion.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center" border="0"></a></p>
											Ingresar Nueva Direccion.</li>
										<li class="first"><a href="#"></a>									    </li>
									  <li>
										<p class="date"><a href="direccion.php"><img src="images/modificar.png" alt="" width="65" height="65" align="center"></a></p>
										  <p>Modificar Direccion Existente.</p>
									  </li>
									</ul>
														
								</section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
							<div id="content" class="8u skel-cell-important">
							  <section>
								<header>
										<h2 align="center">REGISTRAR DIreccion</h2>
										<span class="byline">INGRESE LA INFORMACIÓN</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
<link href="css.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function() {	
	$('#ctipo').blur(function(){
		
		$('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);

		var ctipo = $(this).val();		
		var dataString = 'ctipo='+ctipo;
		
		$.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
				$('#Info').fadeIn(1000).html(data);
				//alert(data);
            }
        });
    });              
});    
</script>

</head>
 <form name="form1" method="post" action="coddireccion.php" enctype="multipart/form-data">
 <div align="center">
  <p>
    <input type="text" name="ctipo" id="ctipo" placeholder="CODIGO DIRECCION"> <div id="Info"></div>
  </p>
  <p>
    <input type="text" name="tipo" id="tipo" placeholder="DIRECCION">
  </p>

  <p>
    <input type="button" name="guardar" id="guardar" value="Guardar" onclick="valida_envia()">
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
			<div class="container">&copy; All rights reserved.</div>
	</div>

<script languaje = "javascript">
function valida_envia(){
if(document.form1.ctipo.value == "") {
alert("Por favor ingrese ID");
document.form1.ctipo.focus();
return 0;
}
if(document.form1.tipo.value == "") {
alert("Por favor ingrese tipo");
document.form1.tipo.focus();
return 0;
}
document.form1.submit();
return true;
}
</script>
</body>
</html>