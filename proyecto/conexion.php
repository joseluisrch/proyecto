<?php 
	// correccion de seguridad
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'facturacion';

	$conection = @mysqli_connect($host,$user,$password,$db);
	//mysqli_close($conection);
	if(!$conection){
		echo "Error en la conexión";
	}