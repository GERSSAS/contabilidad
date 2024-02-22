<?php include("template/header.php"); ?>
<div class="card mb-5">
  <div class="card-header bg-primary text-light">
    ANTICIPOS
  </div>
  <div class="card-body">
    <table class="table table-responsive">
      <thead>
        <tr>
          <th scope="col">FECHA </th>
          <th scope="col">CODIGO</th>
          <th scope="col">NOMBRE </th>
          <th scope="col">CEDULA </th>
          <th scope="col">CIUDAD </th>
          <th scope="col">VALOR </th>
          <th scope="col">ESTADO </th>
          <th scope="col">VER|EDITAR </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>23/02/2024</td>
          <td>2</td>
          <td>Nicolle Arcos</td>
          <td>1105360367</td>
          <td>Cali</td>
          <td>$(Error in database)</td>
          <td>Desaprobado</td>
          <td style="text-align: center"><a href="editAnticipos.php"><i class="fas fa-edit"></i></a> <a href="https://www.w3schools.com"><i class="fa fa-trash"></i></a>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

<?php include("template/footer.php"); ?>