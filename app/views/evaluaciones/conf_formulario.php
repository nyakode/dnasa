<?php require_once ('inc_navs.php'); ?>
<script src="<?php echo URI ?>public/client/api-qlform.js"></script>
<div class="row mt-3">
   <div class="col-md-7">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Formularios</h5>

            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fomulario</th>
                     <th scope="col">Creador</th>
                     <th scope="col">Creacion</th>
                     <th scope="col">Estado</th>
                     <th scope="col">Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                  </tr>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                  </tr>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                  </tr>
               </tbody>
            </table>


         </div>
      </div>
   </div>

   <div class="col-md-5">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Administraci&oacute;n</h5>
            <form id="qadmform">
               <div class="form-group">
                  <input type="text" class="form-control" id="id" placeholder="Id">
               </div>
               <div class="form-group">
                  <label for="frm_nombre">T&iacute;tulo del Formulario</label>
                  <input type="text" class="form-control" id="frm_nombre" name="frm_nombre" placeholder="T&iacute;tulo del Formulario">
               </div>
               <div class="form-group">
                  <label for="frm_descripcion">Descripci&oacute;n</label>
                  <input type="text" class="form-control" id="frm_descripcion" name="frm_descripcion" placeholder="Descripci&oacute;n">
               </div>
               <div class="form-group">
                  <label for="tipo_form">Tipo de Formulario</label>
                  <select class="form-control" id="tipo_form" name="tipo_form">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                  </select>
               </div>
               <div class="form-group">
                  <p class="text-muted">
                     Estado del Formulario
                  </p>
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                     <label class="btn btn-raised btn-secondary active">
                        <input type="radio" name="estado" id="estado1" autocomplete="off" value="1"> Activo
                     </label>
                     <label class="btn btn-raised btn-secondary">
                        <input type="radio" name="estado" id="estado2" autocomplete="off" checked value="0"> Inactivo
                     </label>
                  </div>
               </div>

               <button type="button" id="frm_process" class="btn btn-raised btn-primary btn-block ">Procesar</button>
               
            </form>
         </div>
      </div>
   </div>
</div>