<?php require_once 'inc_navs.php';?>
<script src="<?php echo URI ?>public/client/api-evaluacion.js"></script>
<style type="text/css">
   .bmd-form-group{
      padding-top: 1px;
   }
</style>

<div class="container mt-3">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title" id="c_title">Nombre del Formulario</h5>
               <h6 class="card-subtitle mb-2 text-muted" id="c_descript">Breve descripcion</h6>
            </div>
            <div class="card-body">

               <form action="" id="evaluaciones">
                <div class="form-group">
                      <input type="text" id="creador" name="creador" hidden value="<?php
if (isset($_COOKIE[LOGIN])) {
    $a = json_decode($_COOKIE[LOGIN], true);
    echo ($a['id']);
}
?> ">
                    </div>
               <div class="form-group">
                      <input type="text" id="inicio" name="inicio" hidden>
                    </div>
                <div class="form-group">
                      <input type="text" id="form_id" name="form_id" hidden>
                    </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-8">
                           <p>Seleccionar Coordinador</p>
                        </div>
                        <div class="col-md-4">
                        <select class="form-control" id="coordinador_id" name="coordinador_id">
                           <option>1</option>
                        </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">

                     <div class="row">
                        <div class="col-md-8">
                           <p>Seleccionar Operador</p>
                        </div>
                        <div class="col-md-4">
                           <select class="form-control" id="opeador_id" name="opeador_id">
                              <option>1</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-8">
                           <p>Seleccione el Servicio</p>
                        </div>
                        <div class="col-md-4">
                           <select class="form-control" id="exampleFormControlSelect1">
                              <option>1</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="list-group" id="preg_evaluacion">

                  </div>
                  <button type='button' class='btn btn-raised btn-secondary btn-block' id='p_evaluar' name='p_evaluar'>Procesar evaluación</button>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="selectForm" tabindex="-1" role="dialog" aria-labelledby="selectFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="selectFormTitle">Formulario a Evaluar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="frmSelect">
            <div class="form-group">

               <select class="form-control" id="formulario_id">

               </select>
            </div>
         </form>
         <div class="row">
         <div class="col-md-12">
            <div id="detalle_id"></div>
         </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="dismissmodal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="buildForm">Seleccionar Formulario</button>
      </div>
    </div>
  </div>
</div>