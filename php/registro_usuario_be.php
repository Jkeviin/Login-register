<?php

    include 'conexion_be.php';  // Importamos el archivo conexion_be.php que contiene la conexión a la base de datos.

    $nombre_completo = $_POST['nombre_completo']; // Recibimos el nombre completo del usuario.
    $correo = $_POST['correo'];  // Recibimos el correo del usuario.
    $usuario = $_POST['usuario']; // Recibimos el usuario del usuario.
    $contrasena = $_POST['contrasena']; // Recibimos la contraseña del usuario.

    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)  
                VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')"; // Inserta los datos en la tabla usuarios
    
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