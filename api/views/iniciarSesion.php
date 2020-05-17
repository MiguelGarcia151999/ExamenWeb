<?php

#Recibir usuario y contrase;a por POST
#Responder con un 1 o un 0
#echo 1;

$_POST = json_decode(file_get_contents("php://input"),true);

$datos = $_POST['data'];
$usuario = $datos['usuario'];
$pass = $datos['pass'];

#conexion
$host = "localhost";
$username = "root";
$password = "";
$database = "bd_examenweb";

$connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_error()) {
	trigger_error("Error to conecte to MySQL");
}

if (isset($usuario) && isset($pass)) {
	$query = "Select id from usuarios where Usuario = '$usuario' and Password = '$pass'";
	$resultado = mysqli_query($connection, $query);
	$data = array();
	while ($row = mysqli_fetch_row($resultado))$data = $row;
	if ($data != null) {
		echo 1; # en caso de que sea correcto da 1
	}else{
		echo 0; # si no hay nada da 0
	}
}else {
	//echo 'Error';
}