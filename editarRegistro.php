<?php

    include "conexion.php";

    $conexion = conexion();

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $titulo = $_POST["titulo"];

    $sql = "UPDATE oradores SET nombre = '$nombre', apellido = '$apellido', email = '$email', titulo = '$titulo' WHERE id = $id";

    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: lista_oradores.php");
    }
?>