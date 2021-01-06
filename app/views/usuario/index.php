<div class="row justify-content-md-center">
   <div class="col-md-8">
      <div class="card">
         <div class="card-header">
            <h3 class="text-muted">Perfil de Usuario</h3>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-4">
                  <img class="rounded-circle" src="<?php echo URI ?>public/images/avatar.png" alt="alt" width="50%"/>
               </div>
               <div class="col-md-8">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-fill bg-primary" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#laboral" role="tab" aria-controls="laboral" aria-selected="false">Laboral</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#medica" role="tab" aria-controls="medica" aria-selected="false">Medica</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#emergencia" role="tab" aria-controls="emergencia" aria-selected="false">Emergencia</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#direccion" role="tab" aria-controls="direccion" aria-selected="false">Direccion</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#acceso" role="tab" aria-controls="acceso" aria-selected="false">Acceso</a>
                     </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="personal" role="tabpanel" aria-labelledby="personal-tab">Caso 1</div>
                     <div class="tab-pane" id="laboral" role="tabpanel" aria-labelledby="laboral-tab">Caso 2</div>
                     <div class="tab-pane" id="medica" role="tabpanel" aria-labelledby="medica-tab">Caso 3</div>
                     <div class="tab-pane" id="emergencia" role="tabpanel" aria-labelledby="emergencia-tab">Caso 4</div>
                     <div class="tab-pane" id="direccion" role="tabpanel" aria-labelledby="direccion-tab">Caso 5</div>
                     <div class="tab-pane" id="acceso" role="tabpanel" aria-labelledby="acceso-tab">Caso 6</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>