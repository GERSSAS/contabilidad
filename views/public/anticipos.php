
<?php include("template/header.php"); ?>
<h2>Modulo antincipos Usuario Publico</h2>
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-control">
          <div class="row">   
            <div class="row">
              <div class="col-6">
              <label for="nombre">Nombre:</label>
              <input id="nombre" name="nombre" type="text" required class="form-control">
            </div>
          <div class="col-3">
              <label for="cedula">Cedula:</label>
              <input id="cedula" name="cedula" type="text"  required class="form-control">
              </div>
              <div class="col-3">
                <label for="ciudad">Ciudad:</label>
                <input id="ciudad" name="ciudad" type="text" class="form-control">
              </div>
                                 
            </div>
            <div class="row">
            <div class="col-6">
              <label for="correo">Correo:</label>
              <input id="correo" name="correo" type="email" placeholder="@gers.com" required class="form-control">                     
            </div>
            <div class="col-3">
              <label for="periodo">Período:</label>
              <input id="periodo" name="periodo" type="text" class="form-control" >
            </div>  
            <div class="col-3">
              <label>Moneda:</label>
              <select id="moneda" name="moneda" class="form-select " >
                <option value="Peso_colombiano" class="form-control">$Peso colombiano</option>
                <option value="Dólar USD">$Dolar USD</option>
              </select>
            </div>
          </div>    
          <div class="row">
            <div class="col-6">
              <label for="jefe" class="form-label">JEFE</label>
              <select name="jefe" id="jefe" class="form-select" aria-label=".form-select-sm example">
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
              <select name="area" id="area" class="form-select" aria-label=".form-select-sm example">
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
          <div class="row">
            <div class="col-6">
          <label>Fecha de solicitud:</label>
          <input id="fecha_solicitud" name="fecha_solicitud" type="date" class="form-control">
            </div>                    
            <div class="col-6">
          <label>Fecha de entrega:</label>
          <input id="fecha_entrega" name="fecha_entrega" type="date" class="form-control">
            </div>          
          </div>
        </div>
        <br>
        <br>
   
        <div class="form-control">
        <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">FECHA</th>
              <th scope="col">DESAYUNO</th>
              <th scope="col">ALMUERZO</th>
              <th scope="col">COMIDA</th>
              <th scope="col">SUPLEMENTO</th>
              <th scope="col">TRANSPORTE</th>
              <th scope="col">ALOJAMIENTO</th>
              <th scope="col">OTRO</th>
              <th >TOTAL</th>
              <th id="trmHeader" scope="col">TRM</th>
              <th id="trmHeaderTwo">VR.PESOS</th>
       
              <th></th>
            </tr>
        </thead>
        <tbody>
          <tr>
             <!-- numera Fila oculta -->
            <td scope="row"><input name="fecha[]" type="date" class="input_tabla_default"></td>
            <td class="row"><input type="number" value="" name="fila[]" class="input_tabla" readonly></td>
            <td scope="row"><input name="desayuno[]" id="desayuno[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="almuerzo[]" id="almuerzo[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="comida[]" id="comida[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="suplemento[]" id="suplemento[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="transporte[]" id="transporte[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="alojamiento[]" id="alojamiento[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="otro[]" id="otro[]" type="number" step="0.01" class="input_tabla"></td>
            <td scope="row"><input name="total_fila[]" id="total_fila[]" class="input_tabla_default" step="0.01" readonly></td>
            <td style="display: none;" scope="row" id="trmColumn${i}"><input name="trm[]" id="trm[]" type="number" class="input_tabla_default" step="0.01" readonly></td>
            <td style="display: none;" scope="row" id="trmColumn${i}"><input name="total_pesos[]" id="total_pesos[]" class="input_tabla_default" step="0.01" readonly></td>
            
            <td><div class="agregar"><button class="btn add-btn btn-info">+</button></div></td>
          </tr>
        </tbody>
      </table>
      <!-- Nueva fila dinamica  -->
      <div class="newData"></div>
      <!-- Mostrar  Subtotales & Total -->
      <table class="table table-bordered">
        <tr>
          <td><input value="Subtotales" type="text" class="input_tabla_default" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_desayuno" name="subtotal_desayuno" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_almuerzo" name="subtotal_almuerzo" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_comida" name="subtotal_comida" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_suplemento" name="subtotal_suplemento" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_transporte" name="subtotal_transporte" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_alojamiento" name="subtotal_alojamiento" readonly></td>
          <td><input class="input_tabla_default" type="text" id="subtotal_otro" name="subtotal_otro" readonly></td>

          <td><input type="number" class="input_fantasma" readonly></td> 
          <td style="display: none;" id="trmColumn${i}"><input type="number" class="input_fantasma" readonly></td> 
          <td style="display: none;" id="trmColumn${i}"><input type="number" class="input_fantasma" readonly></td> 
         
          
          <td><input type="number" class="input_fantasma_short" readonly></td> 
        </tr>
         <tr>
          <td colspan="7" style="text-align: right;">TOTAL $</td>
          <td><input id="total" name="total" class="input_tabla_default" type="text" readonly></td>
          <td style="display: none;" id="trmColumn${i}">T.PESOS</td>
          <td style="display: none;" id="trmColumn${i}"><input id="total_pesos_sum" name="total_pesos_sum" class="input_tabla_default" type="text" readonly></td>
        </tr>
      </table>
        </div>
      <br>
      <div class="enviar">
                          <h6>Seleccione imagen a cargar</h6>
                          <input  id="cartapresentacion" type="file" name="usu_img" class="eme2 estiloinput" required>
                      </div>

        
         <div class="row">
           <div clas="col-6">
          <label>Efectivo:</label>
          <input id="efectivo" name="efectivo" type="number" class="form-control">
           </div>
         <div clas="col-6">
          <label>Consignar:</label>
          <input id="consignar" name="consignar" type="number" class="form-control">
         </div>
         </div>
                      
      <!-- BOTON ENVIAR -->
        <div class="enviar">
          <button name="enviar" id="enviar" class="submit">Enviar</button>
        </div>
        <br>
    </form>
<?php include("template/footer.php"); ?>