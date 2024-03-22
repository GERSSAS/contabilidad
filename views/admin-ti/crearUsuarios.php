<?php include("template/header.php");?>

<div class="form-control">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">DATOS PERSONALES</h6>
</div>
<br>
                <div class="container g-3 mt-3 ">
 <div class="row">
 
                        <div class="col-6">
                            <label for="identificacion" class="form-label">Cedula</label>
                            <input type="number" class="form-control" name="identificacion" id="identificacion" required minlength="5" aria-describedby="basic-addon1">
                        </div>
<br>
<br>
                        <div class=" col-6">
                            <label for="nombres" class="inputEmail3" class="form-label">Nombre</label>
                            <input type="text" class="form-control" style="text-transform:uppercase;" name="nombres" id="nombres">
                        </div>
<br>
<br>
                        <div class="col-6 ">
                            <label for="apellidos" class="inputEmail3" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" style="text-transform:uppercase;" name="apellidos" id="apellidos" minlength="3" required aria-label="" aria-describedby="basic-addon1">
                        </div>
<br>
<br>
                       
                        <div class="col-6">
                            <label for="area" class="form-label">Rol:</label>
                            <select name="area" id="rol" class="form-select" aria-label=".form-select-sm example">
                                <option value=""></option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                <option value="APROBADOR">APROBADOR</option>
                                <option value="USUARIO">USUARIO</option>
                                <option value="ADMIN_TI">ADMIN-TI</option>
                                
                            </select>
                         </diV>
                         <br>
                         <br>


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
                         </diV>
                         <br>
                         <br>
<div class="col-6">
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
      <br>
      <br>
      <div class="col-6">
                            <label for="correo" class="inputEmail3" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="correo" id="correo" required aria-label="" aria-describedby="basic-addon1">
                        </div>
      <br>
      <br>
      <div class=" col-6">
                            <label for="pass" class="inputEmail3" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" style="text-transform:uppercase;" name="pass" id="pass">
                        </div>

</DIV>
</div>
</div>
<br>
<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-primary" data-bs-toggle="button">REGISTRAR</button>
  </div>             

</DIV>




