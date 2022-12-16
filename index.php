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
            
            <a class="navbar-brand" href="https://www.buenosaires.gob.ar/educacion/codo-codo" target="_blank">
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

    <!-- IMAGEN -->
    <div class="container-fluid">
        <div class="row img-container">
            <div class="col col-6 "></div>
            <div class="col col-6">
                <a name="conferencia"></a>
                    <h1 class="card-text1">Conf Bs As</h1>
                    <p class="card-text2">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que entemos para ti. Te esperamos!</p>
                </a>
                <div class="col mt-2 texto-imagen">
                    <button type="button" class="btn btn-outline-secondary mb-2">
                        <a href="index.php#inscripcion">Quiero ser orador</a>
                    </button>
                    <button type="button" class="btn btn-success mb-2 ">
                        <a  href="tickets.html">Comprar tickets</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- fin IMAGEN -->

    <!-- ORADORES -->
    <div class="container text-center mt-4">
        <a name="oradores">
            <h6>CONOCE A LOS </h6>
            <h2>ORADORES</h2>
        </a>
    </div>

    <!-- TARJETAS ORADORES -->
<div class="section">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card">
                    <img src="./img/steve.jpg" class="card-img-top" alt="Steve Jobs">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-warning btn-sm ms-3">Javascript</button>
                            <button type="button" class="btn btn-primary btn-sm ms-3">React</button>
                        </div>
                    <div class="card-body">
                        <h5 class="card-title">Steve Jobs</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio quidem provident sequi veritatis expedita eveniet eum placeat modi aperiam?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card h-100">
                    <img src="./img/bill.jpg" class="card-img-top" alt="Bill Gates">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-warning btn-sm ms-3">Javascript</button>
                            <button type="button" class="btn btn-primary btn-sm ms-3">React</button>
                        </div>
                    <div class="card-body">
                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio quidem provident sequi veritatis expedita eveniet eum placeat modi aperiam?</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card h-100">
                    <img src="./img/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-secondary btn-sm ms-3">Negocios</button>
                            <button type="button" class="btn btn-danger btn-sm ms-3">Startups</button>
                        </div>
                    <div class="card-body">
                        <h5 class="card-title">Ada Lovelace</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta optio quidem provident sequi veritatis expedita eveniet eum placeat modi aperiam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       <!-- FIN TARJETAS ORADORES -->
       
    <!-- LUGAR FECHA -->
   
    <div class="card w-100">
        <div class="row lugar g-0">
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center lugar">
            <a name="lugar">
                <img src="./img/bsas.jpg" class="img-card" alt="Puente de la Mujer, Puerto Madero">
            </a>
          </div>
          <div class="col-lg-6 col-md-6 lugar">
            <div class="card-body">
                <h1 class="card-title">Bs As - Octubre</h1>
                <p class="card-text">La ciudad de Buenos Aires tuvo dos fundaciones. La primera en 1536 por Pedro de Mendoza (destruida en 1541 por los propios habitantes a raíz de las constantes amenazas de los nativos), y la segunda en 1580 por Juan de Garay. En ambas ocasiones perteneció al Virreinato del Perú del Imperio Español.</p>
            </div>
            <div class="m-3" >
                <button type="button" class="btn btn-outline-secondary ">
                   <a href="https://es.wikipedia.org/wiki/Historia_de_la_ciudad_de_Buenos_Aires#:~:text=La%20ciudad%20de%20Buenos%20Aires%20tuvo%20dos%20fundaciones.,del%20Per%C3%BA%20del%20Imperio%20Espa%C3%B1ol." target="_blank">Conocé más</a> </button>    
            </div>
          </div>
        </div>
      </div>

    <!-- FIN LUGAR FECHA -->

    

    <!-- ORADORES -->
    <div class="container text-center mt-4">
        <a name="inscripcion">
            <h6>CONVIÉRTETE EN UN </h6>
            <h2>ORADOR</h2>
        </a>
        <p>Anótate como orador para dar una <abbr title="HyperText Markup Language">charla ignite</abbr>. Cuéntanos de qué quieres hablar!</p>
    </div>


    <!-- FORMULARIO -->

    <form class="form" action="agregarRegistro.php" method="post">
        <div class="row g-3">
            <div class="col-md-6 ">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-label="Nombre" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" aria-label="Apellido" required>
            </div>
            <div class="col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" required>
            </div>
        </div>
        <div class="row">
            <div class="mt-4 ">
                <textarea class="form-control textarea" name="titulo" id="titulo" placeholder="Sobre qué quieres hablar?"  rows="3" required></textarea>
                <label class="form-label mt-2">Recuerda incluir un título para tu charla</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-success  btn-lg w-100">Enviar</button>
                <!-- <a href="lista_oradores.php"><button type="submit" class="btn btn-success  btn-lg w-100">Enviar</button></a>  -->
            </div>
        </div>
    </form>


    <!-- FOOTER -->
<footer class="footer">
    <div class="container-fluid mt-5">
        <div class="row p-5 bg-footer text-white text-center d-fluid justify-content-center">
            <div class="col">
                <p class="h6">Preguntas frecuentes</p>
            </div>
            <div class="col">
                <p class="h6">Prensa</p>
            </div>
            <div class="col">
                <p class="h6">Contáctanos</p>
            </div>
            <div class="col">
                <p class="h6">Conferencias</p>
            </div>
            <div class="col">
                <p class="h6">Términos y condiciones</p>
            </div>
            <div class="col">
                <p class="h6">Privacidad</p>
            </div>
            <div class="col">
                <a href="lista_oradores.php"><p class="h6">Uso Interno</p></a>
            </div>
        </div>
    </div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>