<div>
  <div class="row d-flex justify-content-start">
    <button type="button" class="btn btn-primary" style="width: 100px;" onclick="cargarContenidoMenus('pages/cb.php')">Regresar</button>
  </div>
  <div class="row">
    <input type="text" name="" id="">
    
  </div>
  <div class="row mt-3 table-responsive">
    <!-- tabla rellenada con la informacion de la base de datos, con js mostrar las filas. -->
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre común</th>
          <th scope="col">Nombre científico</th>
          <th scope="col">Vistas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Ardilla gris</td>
          <td>Sciurus aurogaster</td>
          <td>
            <button class="btn btn-primary" type="button" onclick="cargarContenidoMenus('views/vista1.php')">1</button>
            <button class="btn btn-primary" type="button" onclick="cargarContenidoMenus('views/vista2.php')">2</button>
            <button class="btn btn-primary" type="button" onclick="cargarContenidoMenus('views/vista3.php')">3</button>
            <button class="btn btn-primary" type="button" onclick="cargarContenidoMenus('views/vista4.php')">4</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>