<?php include("template/header.php"); ?>
<h2>Modulo Relacion de Gastos Usuario Publico</h2>
<div class="form-control">
<div class="tablas">
  <!--1 de Gastos de Administracion-->
  <table class="table_relacion">
    <thead class="table-light">
      <tr>
        <th style="border: none;"></th>
        <th style="border: none;"><b>GASTOS DE ADMINISTRACIÓN</b></th>
        <th style="border: none;"></th>
      </tr>
      <tr>
        <th style="font-weight: lighter;">CÓDIGO</th>        
        <th style="font-weight: lighter;">CONCEPTO</th>                               
        <th style="font-weight: lighter;">VALOR TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><label class="" id="code">51 35</label></td>
        <td><label for=""> Servicios (Aseo y vigilancia, Asistencia técnica)</label></td>
        <td>
      
        <label id="totales_servicios_admin_label" ></label>
      
        </td>
      </tr>
      <tr>
        <td><input value="51 35 40" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Correo, portes y telegramas" name="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_correo_portes_admin" id="totales_correo_portes_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 40" name="code" id="code" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Gastos legales (Cámara de Cio,Notarías,consulados)" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_gastos_legales_admin" id="totales_gastos_legales_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 45" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Mantenimiento y reparaciones" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_mantenimiento_admin" id="totales_mantenimiento_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 55 05" name="codigo" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Gastos de viaje (Alojamiento y manutención, etc)" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_viajes_admin" id="totales_viajes_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 25" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Elementos de aseo y cafetería" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        
        <td><input name="totales_aseo_cafeteria_admin" id="totales_aseo_cafeteria_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 30" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Útiles, papelería y fotocopias" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_papeleria_admin" id="totales_papeleria_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 35" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Combustible y lubricantes" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_combustibles_admin" id="totales_combustibles_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 45" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Taxis y buses" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input id="totales_transportes_admin" name="totales_transportes_admin" class="form-control form-control-sm" type="number" readonly/></td>
      </tr>
      <tr>
        <td><input value="51 95 65" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Parqueadero" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_parqueadero_admin" id="totales_parqueadero_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 60" name="code" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Casino y restaurante" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_casino_admin" id="totales_casino_admin" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="51 95 95" name="code_otros" id="code_otros" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Otros (exámenes médicos de ingreso y regalos 20 años)" name="concepto" id="concepto" type="text" class="form-control form-control-sm" readonly></td>
        <td><input id="totales_otros_gastos_admin" name="totales_otros_gastos_admin" class="form-control form-control-sm" type="number" readonly/></td>
      </tr>
      <tr>
        <td colspan="1"></td>
        <td style="text-align: right;" readonly><b>TOTAL $</b></td>
        <td><input id="total_tables_admin" class="form-control form-control-sm" type="number" reandonly/></td>
      </tr>
    <!-- <tr>
        <td colspan="1"></td>
        <td style="text-align: right;"><b>TOTAL $</b></td>
        <td><input id="total_relacion_gastos" class="input_short" type="number" readonly></td>
      </tr> -->
    </tbody>
  </table>
<table class="table_relacion_two">
    <thead>
    <tr>
      <th style="border: none;"></th>
      <th style="border: none;"><b>GASTOS DE CONTRATOS</b></th>
      <th style="border: none;"></th>
    </tr>
    <tr>
      <th style="font-weight: lighter;">CÓDIGO</th>
      <th style="font-weight: lighter;">CONCEPTO</th>                            
      <th style="font-weight: lighter;">VALOR</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td><input value="74 05 21" name="code_viaticos" id="code_viaticos" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Viáticos" type="text" class="form-control form-control-sm" readonly></td>
        <td><input id="totales_viaticos_contratos" class="form-control form-control-sm" type="number" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 35" name="code_" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Contratos por servicios (Asistencia técnica, procesam)" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_servicios_contratos" id="totales_servicios_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 35 35" name="code_" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Teléfono" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_telefono_contratos" id="totales_telefono_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 35 40" name="code_" id="" type="text" class="form-control form-control-smt" readonly></td>
        <td><input value="Correo, portes y telegramas" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_correo_portes_contratos" id="totales_correo_portes_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 35 50" name="code_" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Fletes y acarreos" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_fletes_contratos" id="totales_fletes_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 40" name="code_" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Gastos legales (Pbción cttos, estamp, consul, tmnos ref" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_legales_contratos" id="totales_legales_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 45" name="code_mantenimiento_contratos" id="code_mantenimiento_contratos" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Mantenimiento y reparaciones" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_mantenimiento_contratos" id="totales_mantenimiento_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>

      <tr>
        <td><input value="74 20 95 20" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Gastos de representación y relaciones públicas (dulces regalo)" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_representacion_contratos" id="totales_representacion_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 95 30" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Útiles, papelería y fotocopias" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_papeleria_contratos" id="totales_papeleria_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 95 35" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Combustible y lubricantes" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_combustibles_contratos" id="totales_combustibles_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 95 45" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Transporte, peajes y parqueadero" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_transportes_contratos" id="totales_transportes_contratos" class="form-control form-control-sm" type="number" readonly/></td>
      </tr>
      <tr>
        <td><input value="74 20 95 60" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Restaurante, cafetería y aseo (Lavanderia)" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_otros_servicios_contratos" id="totales_otros_servicios_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 95 80" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Suministros" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="totales_suministros_contratos" id="totales_suministros_contratos" type="number" class="form-control form-control-sm" readonly></td>
      </tr>


      <!-- Gastos de viaje -->
      <tr><td></td><td style="text-align: center;">GASTOS DE VIAJE</td><td></td></tr>
      <tr>
        <td><input value="74 20 55 05" name="code_alojamiento" id="code_alojamiento" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Alojamiento y manutención" type="text" class="form-control form-control-sm" readonly></td>
        <td><input  name="alojamiento_gastos_contratos_viaje" id="alojamiento_gastos_contratos_viaje" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
       <tr>
        <td><input value="74 20 55 15" name="code" id="code" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Pasajes Aéreos (multa por cambio día)" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 20" name="codigo_" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Pasajes terrestres" name="concepto" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 30" name="codigo" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Restaurante,cafetería y aseo" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 35" name="codigo" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Parqueadero y peajes" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 40" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Fletes y acarreos" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 45" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Suministros" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 50" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Llamadas telefónicas e Internet" type="text" class="form-control form-control-sm" readonly></td>
        <td><input name="" id="" type="number" class="form-control form-control-sm" readonly></td>
      </tr>
      <tr>
        <td><input value="74 20 55 95" name="" id="" type="text" class="form-control form-control-sm" readonly></td>
        <td><input value="Otros" type="text" class="form-control form-control-sm" readonly></td>
        <td><input id="" name="" class="form-control form-control-sm" type="number" readonly></td>
      </tr>
     
      <tr>
        <td colspan="1"></td>
        <td style="text-align: right;" readonly><b>TOTAL $</b></td>
        <td><input id="total_tables" name="total_tables" class="form-control form-control-sm" type="number" reandonly/></td>
      </tr>
    </tbody>

  </table>

  </div>
    
    <br><br><br>
</div>

</div>
</div>
<?php include("template/footer.php"); ?>