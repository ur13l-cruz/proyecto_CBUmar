<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="img/icono_cb_prueba.png" />
    <title>Colección biológica UMAR</title>
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #eef4f8;">
      <div class="container-fluid">
        <a class="navbar-brand" onclick="cargarContenidoMenus('/')">
          <img src="img/icono_cb_prueba.png" alt="Logo" width="40" height="34" class="d-inline-block align-text-top">
          Colección biológica UMAR
        </a>
        <!-- Botón de hamburguesa para mostrar el menu en dispositivos moviles -->
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
              <a class="nav-link active" aria-current="page" onclick="cargarContenidoMenus('/')">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="cargarContenidoMenus('/cb')">Colección biológica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="cargarContenidoMenus('/acercaDe')">Acerca de</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Componentes las cuales se mostrarán deacuerdo a lo seleccionado en el nav-bar -->
    <div class="container mt-5" id="divContenido">
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light fixed-bottom">
      <div class="container text-center">
        <span class="text-muted">Derechos reservados UMAR</span>
      </div>
    </footer>

    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>