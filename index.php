<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colección biológica UMAR</title>
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #eef4f8;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/icono_cb_prueba.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
          Colección biológica UMAR
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarScroll"
          aria-controls="navbarScroll"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 200px"
          >
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" onclick="cargarContenidoMenus('pages/inicio.php')">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="cargarContenidoMenus('pages/cb.php')">Colección biológica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="cargarContenidoMenus('pages/acercaDe.php')">Acerca de</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container mt-5" id="divContenido">
      
    </div>

    <footer class="footer mt-auto py-3 bg-light fixed-bottom">
      <div class="container text-center">
        <span class="text-muted">Derechos reservados UMAR</span>
      </div>
    </footer>

    <!-- Componentes las cuales se mostrarán deacuerdo a lo seleccionado en el nav-bar -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>
