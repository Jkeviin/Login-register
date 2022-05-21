<?php
    session_start(); // Iniciamos la sesión.


    include 'conexion_be.php';  // Importamos el archivo conexion_be.php que contiene la conexión a la base de datos.

    $correo = $_POST['correo']; // Recibimos el usuario del correo.
    $contrasena = $_POST['contrasena']; // Recibimos la contraseña del usuario.
    $contrasena_hash = hash ("sha256", $contrasena); // Desencriptamos la contraseña.

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena_hash' "); // Verificamos si el usuario existe.

    password_verify($contrasena, $contraseña_desencriptada);

    if(mysqli_num_rows($validar_login) > 0){ // Si el usuario existe, mostramos un mensaje de login exitoso.
        $_SESSION['usuario'] = $correo; // Guardamos el usuario en una variable de sesión.
        header("location: ../bienvenida.php");
        exit();
    }else{ // Si el usuario no existe, mostramos un mensaje de error.
        echo '
            <script>
                alert("El usuario o la contraseña son incorrectos");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
?>