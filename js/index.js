window.onload = function() {
  cargarContenidoMenus('pages/inicio.php');
};

function cargarContenidoMenus(ruta) {
  fetch(ruta)
    .then(response => response.text())
    .then(data => {
      document.getElementById("divContenido").innerHTML = "";
      document.getElementById("divContenido").innerHTML = data;
    })
    .catch(error => {
      console.error('Error:', error);
    });
}
