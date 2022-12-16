<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];

    include "conexion.php";

    $insertar = "INSERT INTO oradores (nombre, apellido, email, titulo) VALUES ('$nombre', '$apellido', '$email', '$titulo')";

?>