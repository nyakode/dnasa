<?php require_once ('inc_navs.php'); ?>
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
   <div class="col-md-8">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Preguntas</h5>

            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fomulario</th>
                     <th scope="col">Codigo</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Tipo</th>
                     <th scope="col">Opciones</th>
                     <th scope="col">Valor</th>
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
                     <td>@mdo</td>
                     <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-sm btn-success">
                              <i class="far fa-edit"></i>
                           </button>
                           <button type="button" class="btn  btn-sm btn-danger">
                              <i class="far fa-trash-alt"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-sm btn-success">
                              <i class="far fa-edit"></i>
                           </button>
                           <button type="button" class="btn  btn-sm btn-danger">
                              <i class="far fa-trash-alt"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                           <button type="button" class="btn btn-sm btn-success">
                              <i class="far fa-edit"></i>
                           </button>
                           <button type="button" class="btn  btn-sm btn-danger">
                              <i class="far fa-trash-alt"></i>
                           </button>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>


         </div>
      </div>
   </div>

   <div class="col-md-4">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title"> Administraci&oacute;n</h5>
            <form>
               <div class="form-group">
                  <input type="text" class="form-control" id="id" placeholder="Id">
               </div>
               <div class="form-group">
                  <label for="formulario_id" class="bmd-label-floating">Formulario</label>
                  <select class="form-control" id="formulario_id">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                     <option>5</option>
                  </select>
               </div>

               <div class="form-group">
                  <label for="pregunta">C&oacute;digo de Pregunta</label>
                  <input type="text" class="form-control" id="cod_pregunta" placeholder="C&oacute;digo de Pregunta" maxlength="10">
               </div>
               <div class="form-group">
                  <label for="pregunta"> Pregunta</label>
                  <input type="text" class="form-control" id="pregunta" placeholder="Pregunta">
               </div>
               <div class="form-group">
                  <label for="valor">Valor de la pregunta</label>
                  <input type="text" class="form-control" id="valor" placeholder="Valor de la Pregunta">
               </div>

               <button type="submit" class="btn btn-raised btn-primary btn-block ">Procesar</button>
            </form>
         </div>
      </div>
   </div>
</div>