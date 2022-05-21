<?php
    session_start(); // Iniciamos la sesión.
    if(!isset($_SESSION['usuario'])){ // Si no existe la variable de sesión, redireccionamos al index.php.
        echo '
            <script>
                alert("Por favor, debes iniciar sesion para acceder a esta página");
                window.location = "./index.php";
            </script>
            ';
        session_destroy(); // Destruimos la sesión.
        die(); // Detenemos la ejecución del código.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la seccion</h1>
    <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>