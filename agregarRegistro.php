<?php
    $nombre = $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email = $_POST["email"];
    $titulo = $_POST["titulo"];

    include "conexion.php";

    $conexion = conexion();

    $sql = "INSERT INTO oradores (id, nombre, apellido, email, titulo) VALUES (NULL, '$nombre', '$apellido', '$email', '$titulo')";

    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: index.php#inscripcion");
    }
?>