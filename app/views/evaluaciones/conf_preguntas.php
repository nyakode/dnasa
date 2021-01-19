<?php require_once ('inc_navs.php'); ?>
<script src="<?php echo URI ?>public/client/api-qlpreguntas.js"></script>
<style>
   .btn.btn-sm {
      padding: 0px;
      margin-left: 3px;
      margin-right: 3px;

   }
   .btn-group{
      margin: 1px
   }

   .dataTables_wrapper .dataTables_filter input {
      border: 0px;
      border-radius: 0px;
      padding: 5px;
      background-color: transparent;
      margin-left: 3px;
   }

   .dataTables_wrapper .dataTables_length select {
      border: 0px;
      border-radius: 0px;
      padding: 5px;
      background-color: transparent;
      padding: 4px;
   }

</style>
<div class="row mt-3">
   <div class="col-md-9">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Preguntas</h5>

            <table class="table table-striped" id="tbl_preguntas">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fomulario</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Descripci&oacute;n</th>
                     <th scope="col">Valor</th>
                     <th scope="col">Acciones</th>
                  </tr>
               </thead>
               <tbody id="tbl_preg">
                  <tr></tr>
               </tbody>
            </table>

         </div>
      </div>
   </div>

   <div class="col-md-3">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Administraci&oacute;n</h5>
            <form id="frm_regunta">
               <div class="form-group">
                  <input type="text" class="form-control" id="id" placeholder="Id" readonly>
               </div>
               <div class="form-group">
                  <label for="formulario_id" class="bmd-label-floating">Formulario</label>
                  <select class="form-control" id="formulario_id" name="formulario_id"></select>
               </div>
               <div class="form-group">
                  <label for="pregunta"> Pregunta</label>
                  <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Pregunta">
               </div>
               <div class="form-group">
                  <label for="detalle_pregunta">Descripci&oacute;n</label>
                  <textarea class="form-control" name="detalle_pregunta" id="detalle_pregunta"></textarea>
               </div>
               <div class="form-group">
                  <label for="valor">Valor de la pregunta</label>
                  <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor de la Pregunta">
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