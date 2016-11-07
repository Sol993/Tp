<!-- 
Design register pure CSS
Developed by @mrjopino
--><html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/funcionesAjax.js"></script>

</head>
<body>
	<p class="texto">Ingreso</p>
	<div class="Registro">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
	<span class="fontawesome-user"></span><input type="text" required placeholder="Nombre de usuario" id="nombre" autocomplete="off" 
	value = "<?php if(!isset($_COOKIE['user'])) { echo " Ingrese su usuario ya!!!";} else { echo $_COOKIE['user'];};?>"> 
	<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Contrasenia" autocomplete="off"> 
	<input type="checkbox" name="guardar_clave" id="guardar_clave" value="1">
	<br>
	<input type="button" onclick="MostarLogin()"   value="Ingresar" title="Registra tu cuenta">
</body>
</html>
