<?php require_once ('inc_navs.php'); ?>
<script src="<?php echo URI ?>public/client/api-report-eval.js"></script>
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
   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-secondary shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                     Evaluaciones Realizadas</div>
                  <div class="h5 mb-0 font-weight-bold text-secondary" id="contador">0</div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-tasks fa-2x text-secondary"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Earnings (Annual) Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                     Promedio de Evaluaciones</div>
                  <div id="promedio" class="h5 mb-0 font-weight-bold text-info">0%</div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-chart-line fa-2x text-info"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Tasks Card Example -->
   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Puntaje Perfecto
                  </div>
                  <div class="row no-gutters align-items-center">
                     <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-success" id="en-objetivo">0%</div>
                     </div>
                     <div class="col">
                        <div class="progress progress-sm mr-2">
                           <div id="in-bar" class="progress-bar bg-success" role="progressbar"
                                style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="far fa-smile-wink fa-2x text-success"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Fuera de Objetivo
                  </div>
                  <div class="row no-gutters align-items-center">
                     <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-warning" id="fuera-objetivo">0%</div>
                     </div>
                     <div class="col">
                        <div class="progress progress-sm mr-2">
                           <div id="out-bar" class="progress-bar bg-warning" role="progressbar"
                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="far fa-sad-tear fa-2x  text-danger"></i> 
               </div>
            </div>
         </div>
      </div>
   </div>

</div>

<div class="row mt-3">
   <div class="col-md-12">
      <table class="table table-striped table-sm" id="tbl_evaluaciones">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col" >Fecha</th>
               <th scope="col" >Operador</th>
               <th scope="col" >Coordinador</th>
               <th scope="col" >Evaluador</th>
               <th scope="col" >Servicio</th>
               <th scope="col" >Evaluaci&oacute;n</th>
               <th scope="col"  >Detalle</th>
               <th scope="col"  >Acciones</th>
            </tr>
         </thead>
         <tbody id="tbl_eval">
            <tr></tr>
         </tbody>
      </table>

   </div>
</div>

