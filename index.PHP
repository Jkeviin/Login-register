<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <title>Document</title>
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de Login y Registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="" placeholder="Correo Electónico">
                    <input type="password" name="" placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>
                <!--Registro-->
                <form action="./php/registro_usuario_be.php" method="POST" class="formulario__register">  <!-- En este formulario se enviará el registro del usuario. -->
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre_completo" placeholder="Nombre Completo">
                    <input type="email" name="correo" placeholder="Correo Electónico">
                    <input type="text" name="usuario"placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <button type="submit">Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <script src="./assets/JS/Script.js"></script>
</body>
</html>