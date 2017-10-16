<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=, minimum-scale=1" />
 
<title>Inicio de Sesión</title>

<link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="style.css">
<!--logo navegador!-->
        <link rel="shortcut icon" href="/tconect/pagina_principal/images/dbll.ico" />
 <!--!-->     

        <style>
      
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background-size: cover;
 	/**/
}

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 30%;
  padding: 10px;
  /*background: rgba(4, 40, 68, 0.85);*/
  background:rgba(36, 126, 138, 0.5);/*#247E8A*/
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 25%;
  height:80%;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input[type="text"]{
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}

.login input[type="password"]{
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
 
}

.login input[type="submit"] {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
  background:#2b7ec0;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
	outline: none;
	color: #444;
	border-color: #2196F3;
	border-left-width: 35px;
	font-size: 16px;
}

.login input[type"submit"]:focus {
	outline: none;
	color: #444;
	border-color: #2196F3;
	border-left-width: 35px;
	
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
	color: #444;
	font-size: 1.2em;
	font-weight: bold;
	margin: 10px 0 30px 0;
	border-bottom: 1px solid #eee;
	padding-bottom: 20px;
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #2196F3;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

/*cuando el tamaño de la pantalla cambia toma estos valores*/
@media only screen and (max-width: 640px)
{
.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 69%;
  height:100%;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}	
}

@media only screen and (max-width: 1280px)
{
.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 60%;
  height:80%;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}	
}

@media only screen and (max-width: 1024px)
{
.login {
	border-radius: 2px 2px 5px 5px;
	padding: 10px 20px 20px 20px;
	width: 60%;
	height: 80%;
	background: #ffffff;
	position: relative;
	padding-bottom: 80px;
	box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}	
}
        </style>

</head>
<body class="fondo">


<p align="center">

<div class="wrapper">
</p>
<form class="login" id="form1" name="form1" method="post" action="codlogin.php">
  <p class="title">  BIENVENIDO</p> 
 <p align="center"><strong>DIRECCION NACIONAL DE TELEMATICA</strong></p>
 <p align="center"><strong><em>&quot;</em></strong><em>&quot;EL OCOTAL, FRANCISCO MORAZAN</em><em><strong>&quot;</strong></em>  </p>
 <div align="center" >
   <p>
        <input type="text"  placeholder="usuario" name="usuario" id="usuario" />
        
    </p>
  </div>
 <div align="center">
    <input type="password"  placeholder="password" name="password" id="password" />
    
  </div>
  <p align="center"> 
    <input   name="ingresar" type="submit" id="ingresar" value="INGRESAR"  
    />
  <img src="fondos/alcaldia.png" width="50%" height="50%" longdesc="fondos/alcaldia.png" /></p>
</form>

</body>

</html>