<?php include("template/header.php"); ?>
<br>
<h3 style="text-align: center;">Modulo Viáticos </h3>

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
                <label for="area" class="form-label">Área:</label>
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

            <div class="col-3">
                <label for="jefe" class="form-label">Aprobador</label>
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

            <div class="col-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <select id="tipo" name="tipo" class="form-select form-select-sm">
                    <option value=""></option>
                    <option value="administracion" class="form-control">ADMINISTRACIÓN</option>
                    <option value="contratos" class="form-control">CONTRATOS</option>
                </select>
            </div>
        </div>

        <br>
        <br>
        <div class="col-6 mx-auto text-center">
            <label for="formFileMultiple" class="form-label">CARGAR ARCHIVOS</label>
            <input class="form-control form-control-sm" type="file" id="formFileMultiple" multiple>
        </div>

        <br>
        <br>
     
</div>

<div class="row ">
    <div class="col-10 row">
    <div class="col-2 ">
        <label for="fecha">FECHA:</label>
        <input class="form-control form-control-sm font-weight-bold inputDate" id="idDateViaticos2" type="date" required>
    </div>
    
    
    <div class="col-2 ">
        <label for="contrato">CONTRATO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="contrato" type="text" required>
    </div>
    <div class="col-2">
        <label for="desayuno">DESAYUNO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="desayuno" type="number" min="0">
    </div>
    <div class="col-2">
        <label for="almuerzo">ALMUERZO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="almuerzo" type="number" min="0">
    </div>
    <div class="col-2">
        <label for="comida">COMIDA:</label>
        <input class="form-control form-control-sm font-weight-bold" id="comida" type="number" min="0">
    </div>
    <div class="col-2 ">
        <label for="suplemento">SUPLEMENTO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="suplemento" type="number" min="0">
    </div>
    </div>
    <div class="col-2 row">
    <div class="col-10">
        <label for="total">TOTAL:</label>
        <input class="form-control form-control-sm font-weight-bold inputValor" id="total1" type="number" readonly>
    </div>
    <div class="col-2 d-flex align-items-end">
    <i id="addRowViaticos" class="deleteRow bi bi-plus-circle-fill"></i>
    </div>    
    </div>
    </div>
    
   
    
        <button class="btn btn-primary mt-2" id="calcularTotal">Calcular Total</button>
        </div>

<br>
<br>
        <div class="container table-responsive">
            <table id="ViaticosTable" class="table table-sm">
                <thead class="table-light">
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6 font-weight-bold">FECHA</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">CONTRATO</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">DESAYUNO</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">ALMUERZO</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">COMIDA</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-6 font-weight-bold">SUPLEMENTO</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">TOTAL</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">TRM</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold">VAL-PESOS</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 font-weight-bold"></th>
                    </tr>

                </thead>
                <tbody class="table-group-divider">
                    <tr class="tr-inputs">
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold inputDate" id="idDateViaticos1" type="date"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" type="text"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" type="number"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" type="number"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" type="number"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" type="number"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold inputValor" id="total1" type="number"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold" id="trm1" type="text"></div>
                        </td>
                        <td>
                            <div><input class="form-control form-control-sm font-weight-bold"  id="valorPesos1" type="text"></div>
                        </td>
                        <td>
                        <i id="addRowViaticos" class="deleteRow bi bi-plus-circle-fill"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br>

        <br>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" data-bs-toggle="button">ENVIAR</button>
        </div>
</form>
<script>
    document.getElementById('calcularTotal').addEventListener('click', function() {
        const desayuno = parseFloat(document.getElementById('desayuno').value) || 0;
        const almuerzo = parseFloat(document.getElementById('almuerzo').value) || 0;
        const comida = parseFloat(document.getElementById('comida').value) || 0;
        const suplemento = parseFloat(document.getElementById('suplemento').value) || 0;
        const total = desayuno + almuerzo + comida + suplemento;
        document.getElementById('total1').value = total;
    });

    let rowId = 2;

document.getElementById('addRowViaticos').addEventListener('click', function() {
  const row = document.createElement('div');
  row.className = 'col-10 row';
  row.innerHTML = `
    <div class="col-2">
        <label for="fecha${rowId}">FECHA:</label>
        <input class="form-control form-control-sm font-weight-bold inputDate" id="fecha${rowId}" type="date" required>
    </div>

    <div class="col-2">
        <label for="contrato${rowId}">CONTRATO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="contrato${rowId}" type="text" required>
    </div>
    <div class="col-2">
        <label for="desayuno${rowId}">DESAYUNO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="desayuno${rowId}" type="number" min="0">
    </div>
    <div class="col-2">
        <label for="almuerzo${rowId}">ALMUERZO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="almuerzo${rowId}" type="number" min="0">
    </div>
    <div class="col-2">
        <label for="comida${rowId}">COMIDA:</label>
        <input class="form-control form-control-sm font-weight-bold" id="comida${rowId}" type="number" min="0">
    </div>
    <div class="col-2 ">
        <label for="suplemento${rowId}">SUPLEMENTO:</label>
        <input class="form-control form-control-sm font-weight-bold" id="suplemento${rowId}" type="number" min="0">
    </div>
    <div class="col-2 row">
    <div class="col-10">
        <label for="total${rowId}">TOTAL:</label>
        <input class="form-control form-control-sm font-weight-bold inputValor" id="total${rowId}" type="number" readonly>
    </div>
    <div class="col-2 d-flex align-items-end">
      <i class="deleteRow bi bi-x-circle-fill" onclick="deleteRow(${rowId})"></i>
    </div>
  </div>
  `;
  document.getElementById('row-container').appendChild(row);
  rowId++;
});

function deleteRow(id) {
  const row = document.getElementById(`fecha${id}`).parentElement.parentElement;
  row.remove();
}
document.getElementById('calcularTotal').addEventListener('click', function() {
  let total = 0;
  for (let i = 1; i < rowId; i++) {
    const desayuno = parseFloat(document.getElementById(`desayuno${i}`).value) || 0;
    const almuerzo = parseFloat(document.getElementById(`almuerzo${i}`).value) || 0;
    const comida = parseFloat(document.getElementById(`comida${i}`).value) || 0;
    const suplemento = parseFloat(document.getElementById(`suplemento${i}`).value) || 0;
    const totalValue = parseFloat(document.getElementById(`total${i}`).value) || 0;
    total += totalValue;
  }
  document.getElementById('total1').value = total;
});
</script>

<?php include("template/footer.php"); ?>