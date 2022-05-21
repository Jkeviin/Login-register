<?php

    session_start();
    session_destroy(); // Destruimos la sesión.
    header("location: ../index.php"); // Redireccionamos al index.php.

?>