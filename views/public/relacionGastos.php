<?php include("template/header.php"); ?>

<div class="container-fluid">
  <div class="text-center p-3">
  <h2>Relacion de Gastos</h2>
  </div>

<div class="card mb-5">
<div class="card-header bg-primary text-light">
GASTOS DE ADMINISTRACIÓN
  </div>
  <div class="card-body">
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">CÓDIGO</th>
      <th scope="col">CONCEPTO</th>
      <th scope="col">VALOR </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">51 35</th>
      <td>Servicios (Aseo y vigilancia, Asistencia técnica)</td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">51 35 40</th>
      <td>Correo, portes y telegramas</td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">51 40</th>
      <td colspan="2">Gastos legales (Cámara de Cio,Notarías,consulados)</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>TOTAL $:</td>
      <td><input type="number"></td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="card">
<div class="card-header  bg-primary text-light">
GASTOS DE CONTRATOS
  </div>
  <div class="card-body">
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">CÓDIGO</th>
      <th scope="col">CONCEPTO</th>
      <th scope="col">VALOR </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> 74 05 21</th>
      <td>Viáticos</td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">74 20 35</th>
      <td>Contratos por servicios (Asistencia técnica, procesam)</td>
      <td></td>
      
    </tr>
    <tr>
      <th scope="row">74 20 35 35</th>
      <td colspan="2">Teléfono</td>
      <td></td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td colspan="">TOTAL $:</td>
      <td><input type="number"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>

<?php include("template/footer.php"); ?>