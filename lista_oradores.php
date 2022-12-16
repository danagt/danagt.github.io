<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/codoacodo3.ico">
    <script src="https://kit.fontawesome.com/be71dc33a3.js" crossorigin="anonymous"></script>

    <title>Conferencia</title>
  </head>
  
  <!-- ALERTA DE BORRAR USUARIO -->

  <script src="script.js"></script>


  <body>
    <!-- Barra de navegacion superior -->
    
    <nav class="navbar navbar-expand-md navbar navbar-dark bg-colornav text-center">
        <div class="container-fluid mx-4" >
            
            <a class="navbar-brand" href="https://www.buenosaires.gob.ar/educacion/codo-codo">
                <img src="./img/codoacodo.png" alt="" width="25%">
                Conf Bs As
            </a>
                
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"     data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"  id="navbarNav">
                <ul class="navbar-nav ms-auto" >
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php#conferencia">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#lugar">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#inscripcion" tabindex="-1" aria-disabled="true">Conviértete en orador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-success text-white" href="tickets.html" tabindex="-1" aria-disabled="true">Comprar tickets</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    <!-- Fin Barra de navegacion superior -->


    <!-- LISTA DE ORADORES -->

    
        <div class="container">
            <div class="row">                
                <div class="btn bg-warning text-center mt-3">
                    <h5 class="m-1">Registro de Oradores</h5>
                    <?php
                        include "conexion.php";
                        $conexion = conexion();
                        $sql = "SELECT * FROM oradores";
                        $query = mysqli_query($conexion, $sql);
                    ?>
                </div>
            </div>                     
            <table class="table table-hover align-middle">
                <thead class="thead-light">
                    <tr>
                        <!-- <th scope="col">Id</th> -->
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tema a desarrollar</th>
                        <th scope="col">Editar Usuario</th>
                        <th scope="col">Borrar Usuario</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($fila = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <!-- <td><?php echo $fila["id"]  ?></td> -->
                        <td><?php echo $fila["nombre"]  ?></td>
                        <td><?php echo $fila["apellido"]  ?></td>
                        <td><?php echo $fila["email"]  ?></td>
                        <td><?php echo $fila["titulo"]  ?></td>

                        <!-- BOTON EDITAR -->
                        <td><a href="formEditarRegistro.php?id=<?php echo $fila["id"] ?>"><button class="btn btn-warning"><i class="fa-solid fa-pen"></i></button></a></td>

                        <td><a href="eliminarRegistro.php?id=<?php echo $fila["id"] ?>"><button class="btn btn-warning" onclick="return borrarUsuario()"><i class="fa-solid fa-trash"></i></button></a></td>
                    </tr>
                    
                    <?php }
                    ?>

                </tbody>
            </table>
                <div class="row">
                    <a href="index.php#inscripcion"><button type="texto" class="btn btn-warning btn-lg w-100 ">Volver</button></a> 
                </div>
        </div>
  
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>