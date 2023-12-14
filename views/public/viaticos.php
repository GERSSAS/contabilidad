<?php include("template/header.php"); ?>
<h2>Modulo Viáticos Usuario Publico</h2>
<form >

        <div class="form-control">
          <div class="row">   
            <div class="row">
              <div class="col-6">
              <label for="nombre">Nombre:</label>
              <input id="nombre" name="nombre" type="text" required class=" form-control form-control-sm">
            </div>
          <div class="col-3">
              <label for="cedula">Cedula:</label>
              <input id="cedula" name="cedula" type="text"  required class="form-control form-control-sm">
              </div>
              <div class="col-3">
                <label for="ciudad">Ciudad:</label>
                <input id="ciudad" name="ciudad" type="text" class="form-control form-control-sm">
              </div>
                                 
            </div>
            <div class="row">
            <div class="col-6">
              <label for="correo">Correo:</label>
              <input id="correo" name="correo" type="email" placeholder="@gers.com" required class="form-control form-control-sm">                     
            </div>
            <div class="col-3">
              <label for="periodo">Período:</label>
              <input id="periodo" name="periodo" type="text" class="form-control form-control-sm" >
            </div>  
            <div class="col-3">
              <label>Moneda:</label>
              <select id="moneda" name="moneda" class="form-select form-select-sm" >
                <option value="Peso_colombiano" class="form-control">$Peso colombiano</option>
                <option value="Dólar USD">$Dolar USD</option>
              </select>
            </div>
          </div>    
          <div class="row">
            <div class="col-6">
              <label for="jefe" class="form-label">JEFE</label>
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
                  <option disabled selected value="">Area</option>
                  <option disabled value=""></option>
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
          
          <div class="row">
<div class="col-6">
<label for="gasto" class="form-label">Tipo:</label>
              
              <select id="" name="tipo" class="form-select form-select-sm" >
              <option value=""></option>
                <option value="administracion" class="form-control">ADMINISTRACIÓN</option>
                <option value="contratos">CONTRATOS</option>
              </select>
            </div>
        </div>
</DIV>
  <br>
  <br>
        <div class="container table-responsive">
        <table class="table table-sm">
  <thead class="table-light">
    <tr>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">FECHA</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CONTRATOS</th>
      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DESAYUNO</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ALMUERZO</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COMIDA</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6">SUPLEMENTO</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TOTAL</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TRM</th>
      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VAL-PESOS</th>
      
  </thead>
  <tbody class="table-group-divider">
    <tr class="tr-inputs">
      <td>
        <div><input class="form-control form-control-sm" type="date"></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <div><input class="form-control form-control-sm" type="number" ></div>
      </td>
      <td>
        <button class="btn btn-primary btn-sm">+</button>
      </td>
    </tr>
  </tbody>
</table>
  </DIV>
<br>
      <div class="col-6">
  <label for="formFileMultiple" class="form-label">CARGAR ARCHIVOS</label>
  <input class="form-control form-control-sm" type="file" id="formFileMultiple" multiple>
</div>  
<br>
    <div class="">
         
         <button name="enviar" id="enviar"class="btn btn-outline-info">Enviar</button>
       </div>
<?php include("template/footer.php"); ?>