<?php
    include 'conexion_be.php';  // Importamos el archivo conexion_be.php que contiene la conexión a la base de datos.

    $nombre_completo = $_POST['nombre_completo']; // Recibimos el nombre completo del usuario.
    $correo = $_POST['correo'];  // Recibimos el correo del usuario.
    $usuario = $_POST['usuario']; // Recibimos el usuario del usuario.
    $contrasena = $_POST['contrasena']; // Recibimos la contraseña del usuario.
    $contrasena_confirmacion = $_POST['contrasena_confirmacion']; // Recibimos la confirmación de la contraseña del usuario.
//    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT); // Encriptamos la contraseña.
    $contrasena_hash = hash ("sha256", $contrasena); // Encriptamos la contraseña.

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
                VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_hash')"; // Inserta los datos en la tabla usuarios

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){ // Si el correo ya está registrado, mostramos un mensaje de error.
        echo '
            <script>
                window.location = "../index.php";
                alert("El correo electronico ya existe, intenta con otro correo.");
            </script>
        ';
        exit();
    }

    if($contrasena != $contrasena_confirmacion){ // Si las contraseñas no coinciden, mostramos un mensaje de error.
        echo '
            <script>
                window.location = "../index.php";
                alert("Las contraseñas no coinciden, intenta de nuevo.");
            </script>
        ';
        exit();
    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' "); // Verificamos si el usuario ya está registrado.

    if(mysqli_num_rows($verificar_usuario) > 0){ // Si el usuario ya está registrado, mostramos un mensaje de error.
        echo '
            <script>
                window.location = "../index.php";
                alert("El ususario ya existe, intenta con otro usuario.");
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query); // Ejecuta la consulta.

    if($ejecutar){  // Si la consulta se ejecuta correctamente, mostramos un mensaje de registro exitoso.
        echo '
            <script>
                alert("Registro exitoso");
                window.location = "../index.php";
            </script>
        ';
    }else{ // Si la consulta no se ejecuta correctamente, mostramos un mensaje de error.
        echo '
            <script>
                alert("Error al registrarse");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion); // Cerramos la conexión a la base de datos.
?>