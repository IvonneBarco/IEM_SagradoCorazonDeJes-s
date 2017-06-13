<?php

/* 
 *  Verificar que el usuario haya iniciado sesión para que 
 *  acceda con todos los privilegios y no por url
 * 
 */
	session_start(); // Poder acceder a las variables globales

	$user = $_POST["user"];
	$clave = $_POST["password"];
	$claveE=md5($clave);//encriptar contraseña

	include '../conectar.php';
	$bd = conectar();
	if (!$bd) return;

	$sql = "SELECT * FROM usuario WHERE codusuario='".$user."' and conusuario='".$claveE."'"; 
	$resutado = mysqli_query($bd, $sql);
	$conteo = mysqli_num_rows($resutado);

	if ($conteo == 0) {
		/*echo "<h3>Error</h3>";
		echo "Usuario no existe";
		echo "<br><a href='./index.php'>Regresar</a>";*/
		header("Location: indexAdmin.php"); 
	}else{
		$arr = mysqli_fetch_array($resutado);
		$_SESSION["usuario"]=$arr[0]; //usuario y la manera de leerla es a traves de un arreglo
		header("Location: ./administracion.php"); //cargue index.php de administración
	}
?>