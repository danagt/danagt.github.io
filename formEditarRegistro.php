<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Conferencia</title>
  </head>
  
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


    <!-- FORMULARIO -->
      <!-- ORADORES -->
      <div class="container text-center mt-4">
        <a name="inscripcion">
            <h6>CONVIÉRTETE EN UN </h6>
            <h2>ORADOR</h2>
        </a>
        <p>Anótate como orador para dar una <abbr title="HyperText Markup Language">charla ignite</abbr>. Cuéntanos de qué quieres hablar!</p>
    </div>

    <?php

        include "conexion.php";

        $conexion = conexion();

        $id = $_GET["id"];

        $sql = "SELECT * FROM oradores WHERE id = $id";

        //$sql = "UPDATE oradores SET WHERE id = $id";

        $query = mysqli_query($conexion, $sql);

        $fila = mysqli_fetch_assoc($query);
    ?>

    <form class="form mt-5" action="editarRegistro.php" method="post">
        <div class="row g-3">
            <div class="col-md-6 ">
                <input type="text" class="form-control" name="id" id="" value="<?php echo $fila["id"] ?>" hidden>
                <input type="text" class="form-control" name="nombre" id="" placeholder="Nombre" value="<?php echo $fila["nombre"] ?>">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="apellido" id="" placeholder="Apellido" value="<?php echo $fila["apellido"] ?>">
            </div>
            <div class="col-md-12">
                <input type="email" class="form-control" name="email" id="" placeholder="Email" value="<?php echo $fila["email"] ?>">
            </div>
        </div>
        <div class="row">
            <div class="mt-4 ">
                <textarea class="form-control textarea" name="titulo" id="" placeholder="Sobre qué quieres hablar?" value="<?php echo $fila["titulo"] ?>" rows="3"></textarea>
                <label class="form-label mt-2">Recuerda incluir un título para tu charla</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success btn-enviar">Modificar</button>       
            </div>
        </div>
    </form>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>