<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">


<link rel="stylesheet" type="text/css" href="fuentescss/">
</head>

<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span>Crear Cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <input type="text" name="user" placeholder="&#128100;  Usuario" required>
                <input type="password" name="pass" placeholder="&#128272;  Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario">
            <h2>Crear tu Cuenta</h2>
            <form action="#">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                <input type="email" name="email" placeholder="Correo Electronico" required>
                <input type="submit" value="Registrarse">
            </form>
        </div>

        <div class="reset-password">
            <a href="#">Olvide mi Contraseña</a>
        </div>
    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>

<section>

<?php
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>

</section>

</body>
</html>