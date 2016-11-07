<?php 
session_start();

$queHago=$_POST['queHago'];
$cookie_name = "user";

switch ($queHago) {
	case 'mostrarLoginCookie':
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$res["Exito"] = $nombre;		
		echo json_encode($res);
		$password =isset($_POST['password']) ? $_POST['password'] : NULL;
		setcookie($cookie_name, $nombre, time() + (86400 * 30), "/");
		
		break;
	case 'mostrarLoginSession':
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
		$res["Exito"] = $nombre;

		$_SESSION['user']=$nombre;

		if(!isset($_SESSION['user'])) {
		     echo "no esta logueado";
		} else {
		     echo "Value is: " . $_SESSION['user'];
		}
		break;
	default:
		echo ":(";
}

 ?>