<?php
$_POST = json_decode(file_get_contents("php://input"),true);
$datos = $_POST['data'];
$usuario = $datos['usuario'];
$pass = $datos['pass'];
$email = $datos['email'];
echo $usuario;

#conexion
$host = "localhost";
$username = "root";
$password = "";
$database = "tacosbd";

$connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_error()) {
	trigger_error("Error to conecte to MySQL");
}

if (isset($usuario) && isset($pass)) {
	$query = "INSERT INTO usuarios (Usuario, Password, Rol, Email) values ('$usuario', '$pass', 'usuario', '$email')";
	$resultado = mysqli_query($connection, $query);
	if ($resultado == 1) {
		echo 1; # en caso de que sea correcto da 1
	}else{
		echo 0; # si no hay nada da 0
	}
}else {
	//echo 'Error';
}