<?php require_once ('inc_navs.php'); ?>
<script src="<?php echo URI ?>public/client/api-qlform.js"></script>
<style>
   .btn.btn-sm {
      padding: 0px;
      margin-left: 3px;
      margin-right: 3px;
      
   }
   .btn-group{
      margin: 1px
   }
</style>
<div class="row mt-3">
   <div class="col-md-7">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Formularios</h5>

            <table class="table table-striped table-responsive" id="tblFomrs">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fomulario</th>
                     <th scope="col">Descripcion</th>
                     <th scope="col">Creador</th>
                     <th scope="col">Tipo</th>
                     <th scope="col">Creacion</th>
                     <th scope="col">Estado</th>
                     <th scope="col">Acciones</th>
                  </tr>
               </thead>
               <tbody id="tbl_form">
                 
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
                  <input type="text" class="form-control" id="id" placeholder="Id" readonly>
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
                        <option >Selecciona una Opcion</option>   
                     
                  </select>
               </div>
               <div class="form-group">
              
                  <div class="switch">
                  <label id="idEstado">
                     <input id="estado" name="estado" type="checkbox" >
                     <i id="checkValue">Habilitar Formulario</i>
                  </label>
               </div>
               </div>
               <dii class="row">   
               <div class="col">
                  <button type="button" id="frm_process" class="btn btn-raised btn-primary btn-block ">Enviar Formulario</button>                  
               </div>
               <div class="col">
                  <button type="button" id="frm_reset" class="btn btn-raised btn-primary btn-block ">Limpiar Formulario</button>               
               </div>
               </dii>
               
            </form>
         </div>
      </div>
   </div>
</div>