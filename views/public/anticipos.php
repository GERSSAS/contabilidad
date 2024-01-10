<?php include("template/header.php"); ?>
<br>
<h3 style="text-align: center;">Modulo Anticipos </h3>

<form>

  <div class="pagina">
    <br>
    <label for="ciudad">Fecha</label>
    <br>
    <script>
      let meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
      let f = new Date();
      document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
    </script>
    <br>
    <br>
    <div class="row">
      <div class="col-6">

        <label for="nombre">Nombre:</label>
        <input id="nombre" name="nombre" type="text" required class="form-control form-control-sm">
      </div>

      <div class="col-3">
        <label for="cedula">Cedula:</label>
        <input id="cedula" name="cedula" type="text" required class="form-control form-control-sm">
      </div>

      <div class="col-3">
        <label for="ciudad">Ciudad:</label>
        <input id="ciudad" name="ciudad" type="text" class="form-control form-control-sm">
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-6">
        <label for="correo">Correo:</label>
        <input id="correo" name="correo" type="email" placeholder="@gers.com" required class="form-control form-control-sm">
      </div>

      <div class="col-3">
        <label for="periodo">Período:</label>
        <input id="periodo" name="periodo" type="text" class="form-control form-control-sm">
      </div>

      <div class="col-3">
        <label>Moneda:</label>
        <select id="moneda" name="moneda" class="form-select form-select-sm">
          <option value="Peso_colombiano" class="form-control">$Peso colombiano</option>
          <option value="Dólar USD">$Dolar USD</option>
        </select>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-6">
        <label for="jefe" class="form-label">Jefe</label>
        <select name="jefe" id="jefe" class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option value=""></option>
          <option value="alba.naranjo@gers.com">ALBA NARANJO</option>
          <option value="andres.insuasty@gers.com">ANDRES INSUASTY</option>
          <option value="dagoberto.valencia@gers.com">DAGOBERTO VALENCIA</option>
          <option value="fabio.perea@gers.com">FABIO PEREA</option>
          <option value="harold.quintero@gers.com">HAROLD QUINTERO</option>
          <option value="henry.smit@gers.com">HENRY SMIT</option>
          <option value="jose.munoz@gers.com">JOSE MUÑOZ</option>
          <option value="luis.posso@gers.com">LUIS POSSO</option>
          <option value="nhora.galvez@gers.com">NHORA GALVEZ</option>
          <option value="rodolfo.valencia@gers.com">RODOLFO VALENCIA</option>
          <option value="sergio.vargas@gers.com">SERGIO VARGAS</option>
        </select>
      </div>

      <div class="col-6">
        <label for="area" class="form-label">Area:</label>
        <select name="area" id="area" class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option value=""></option>
          <option value="ADMINISTRACION">ADMINISTRACIÓN</option>
          <option value="EPC CONSTRUCCION DE PROYECTOS">EPC CONSTRUCCIÓN DE PROYECTO</option>
          <option value="DISEÑO E INVENTORIAS">DISEÑO E INVENTORIAS</option>
          <option value="EFICIENCIA Y CALIDAD DE LA ENERGIA">EFICIENCIA Y CALIDAD DE LA ENERGIA</option>
          <option value="ESTUDIOS">ESTUDIOS</option>
          <option value="ESTUDIOS INTERNACIONALES">ESTUDIOS INTERNACIONALES</option>
          <option value="NEPLAN">NEPLAN</option>
          <option value="PAC">PAC</option>
          <option value="PROYECTOS GIS">PROYECTOS GIS</option>
          <option value="SOLUCIONES INTEGRALES DE EQUIPOS">SOLUCIONES INTEGRALES DE EQUIPOS</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label>Fecha de solicitud:</label>
        <input id="fecha_solicitud" name="fecha_solicitud" type="date" class="form-control form-control-sm">
      </div>
      <div class="col-6">
        <label>Fecha de entrega:</label>
        <input id="fecha_entrega" name="fecha_entrega" type="date" class="form-control form-control-sm">
      </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-6">
      <label for="efectivo">Efectivo:</label>
      <input id="efectivo" name="efectivo" type="number" required class="form-control form-control-sm">
    </div>
    <div class="col-6">
      <label for="consignar">Consignar:</label>
      <input id="consignar" name="consignar" type="number" required class="form-control form-control-sm">
    </div>
  </div>
  <br>
  <br>
  <div class="container table-responsive">

    <table id="TablaAnticipos" class="table " style="width:1300px">
      <thead class="table-light">
        <tr>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">FECHA</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DESAYUNO</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ALMUERZO</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COMIDA</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">SUPLEMENTO</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">TRANSPORTE</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">ALOJAMIENTO</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">OTRO</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TOTAL</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TRM</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VAL-PESOS</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr class="tr-inputs">
          <th>
            <div><input class="form-control form-control-sm inputDate" id="idDateAnticipos1" type="date"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm inputValor"  type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" id="trm1" type="number"></div>
          </th>
          <th>
            <div><input class="form-control form-control-sm" id="valorPesos1" type="number"></div>
          </th>
          <th>
            <i id="addRowAnticipos" class="deleteRow bi bi-plus-circle-fill"></i>
          </th>


      </tbody>
    </table>
  </DIV>

  <br>

  <br>
  <br>

  <div class="d-flex justify-content-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="button">ENVIAR</button>
  </div>
  <br>
</form>





<script src="../../../../assets/js/funtions_anticipo.js" type="text/javascript"></script>
<?php include("template/footer.php"); ?>