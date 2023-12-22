/*
window.onload = function() {
  cargarContenidoMenus('/');
};
*/
window.addEventListener('popstate', router);
document.addEventListener('DOMContentLoaded', router);

function router() {
  var path = window.location.pathname;
  switch (path) {
    case '/':
      fetchContent('pages/inicio');
      break;
    case '/cb':
      fetchContent('pages/cb');
      break;
    case '/acercaDe':
      fetchContent('pages/acercaDe');
      break;
    default:
      document.getElementById('divContenido').innerHTML = '404';
  }
}

function fetchContent(page) {
  fetch(page + '.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('divContenido').innerHTML = data;
    });
}

function cargarContenidoMenus(ruta) {
  window.history.pushState({}, ruta, window.location.origin + ruta);
  router();
  /*fetch(ruta)
    .then(response => response.text())
    .then(data => {
      document.getElementById("divContenido").innerHTML = "";
      document.getElementById("divContenido").innerHTML = data;
    })
    .catch(error => {
      console.error('Error:', error);
    });*/
}
