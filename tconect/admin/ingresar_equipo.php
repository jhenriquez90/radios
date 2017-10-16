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
		<title>INGRESAR EQUIPO</title>
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
						<li><a href="equipo.php">EQUIPOS</a></li>
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
											<p class="date"><a href="ingresar_equipo.php"><img src="images/ingresar.png" alt="" width="65" height="65" align="center" border="0"></a></p>
											Ingresar Nuevo Equipo.</li>
										<li class="first"><a href="#"></a>									    </li>
									  <li>
										<p class="date"><a href="equipo.php"><img src="images/modificar.png" alt="" width="65" height="65" align="center"></a></p>
										  <p>Modificar Equipo Existente.</p>
									  </li>
									</ul>
														
								</section>
							</div>
						<!-- Sidebar -->

						<!-- Content -->
							<div id="content" class="8u skel-cell-important">
							  <section>
								<header>
										<h2 align="center">REGISTRAR EQUIPO</h2>
										<span class="byline">INGRESE LA INFORMACIÓN</span>
							    </header>
								  <p>
                                <!--____________________________!-->                                  
	<script type="text/javascript" src="jquery-1.3.2.js"></script>
<link href="css.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function() {	
	$('#idradio').blur(function(){
		
		$('#Info').html('<img src="loader.gif" alt="" />').fadeOut(1000);

		var idradio = $(this).val();		
		var dataString = 'idradio='+idradio;
		
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
<form name="form1" method="post" action="codinventario.php" enctype="multipart/form-data">
 <div align="center">
  <p>
    <input type="text" name="idradio" id="idradio" size="25" placeholder="ID RADIO"> <div id="Info"></div>
  </p>
  <p>
    <input type="text" name="inventario" id="inventario"  size="25" placeholder="INVENTARIO">
  </p>
  <p>
    <input type="text" name="serie" id="serie"  size="25"  placeholder="SERIE">
  </p>
  <p>
       <select name="tiporadio" id="tiporadio" style="width:200px">
 <option>Tipo Radio</option> 
<option>Movil</option>
<option>Base</option>
<option>Portatil</option>
</select> 
 </p>
 <p>
    <input type="text" name="modeloradio" id="modeloradio" size="25" placeholder="MODELO DE RADIO">
  </p>
  <p>
    <input type="text" name="asignaciogeneral" id="asignaciogeneral" size="25" placeholder="ASIGNACION GENERAL">
  </p>
  <p>
    <select name="jefatura" id="jefatura" style="width:200px">
 <option>Jefatura</option> 
  <?php
  require('../conexion/conexion.php');
$quer='Select *FROM direccion';
$resultad= mysqli_query($conexion,$quer) or die('error: '.mysqli_error($conexion));
while ( $r = mysqli_fetch_array($resultad) )
{
	$cd=$r['cod_direccion'];
	$d=$r['direccion']; 
?>
<option value="<?php echo $cd?>"><?php echo $d; }?></option>
</select> </p>
<p>
    <input type="text" name="asignacionindividual" id="asignacionindividual"  size="25" placeholder="ASIGNACION INDIVIDUAL">
  </p>
  <p>
  
  </p>
  <p>
    <select name="codcm2" id="codcm2" style="width:200px">
      <option>Capacity Max</option>
      <option>si</option>
      <option>no</option>
    </select>
  </p>
  <p>
    <select name="codlcp2" id="codlcp2" style="width:200px">
      <option>Linked Capacity Plus</option>
      <option>si</option>
      <option>no</option>
    </select>
  </p>
  <p>
  </p>
  <p>
    <select name="codcp2" id="codcp2" style="width:200px">
      <option>Capacity Plus</option>
      <option>si</option>
      <option>no</option>
    </select>
  </p>
  <p>
  </p>
  <p>
    <select name="codipsc2" id="codipsc2" style="width:200px">
      <option>IP Site Connect</option>
      <option>si</option>
      <option>no</option>
    </select>
  </p>
  <p>
    <textarea name="observacio" id="observacio" cols="25" rows="2" placeholder="OBSERVACION"></textarea>
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
if(document.form1.idradio.value == "") {
alert("Por favor ingrese ID");
document.form1.idradio.focus();
return 0;
}
if(document.form1.tiporadio.value == "Tipo Radio") {
alert("Debe Seleccionar Tipo");
document.form1.tiporadio.focus();
return 0;
}
if(document.form1.jefatura.value == "Jefatura") {
alert("Debe Seleccionar Jefatura");
document.form1.jefatura.focus();
return 0;
}
if(document.form1.codcm2.value == "Capacity Max") {
alert("Debe Seleccionar CM");
document.form1.codcm2.focus();
return 0;
}
if(document.form1.codlcp2.value == "Linked Capacity Plus") {
alert("Debe Seleccionar LCP");
document.form1.codlcp2.focus();
return 0;
}
if(document.form1.codcp2.value == "Capacity Plus") {
alert("Debe Seleccionar CP");
document.form1.codcp2.focus();
return 0;
}
if(document.form1.codipsc2.value == "IP Site Connect") {
alert("Debe Seleccionar IPSC");
document.form1.codipsc2.focus();
return 0;
}
document.form1.submit();
return true;
}
</script>
</body>
</html>