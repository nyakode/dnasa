<script src="<?php echo URI ?>public/client/api-auth.js"></script>
<style type="text/css">
   .main {
      display: -ms-flexbox;
      display: -webkit-box;
      display: flex;
      -ms-flex-align: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      padding-top: 40px;
      padding-bottom: 40px;
      /* background-color: #f5f5f5;*/
   }

   .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
   }
   .form-signin .checkbox {
      font-weight: 400;
   }
   .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
   }
   .form-signin .form-control:focus {
      z-index: 2;
   }
   .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
   }
   .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
   }

</style>

<div>
<div class="main text-center">
   <form class="form-signin" id="loginForm" novalidate>
      <img class="mb-4" src="<?php echo URI . 'public/images/csslogo.png' ?>" alt="" width="72" height="72">
      <h1 class="h3 font-weight-normal">DNASA</h1>
      <h2 class="h4 mb-4"><small>Direcci&oacute;n Nacional de Asistencia de los Servicios al Asegurado</small></h2>
      <label for="usuario" class="sr-only">Nombre de Usuario</label>
      <input type="text" id="usuario" name ="usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
      <label for="clave" class="sr-only">Clave de Acceso</label>
      <input type="password" id="clave" name ="clave" class="form-control" placeholder="Clave de Acceso" required>
      <div class="checkbox mb-3">
         <label>
            <input type="checkbox" value="remember-me"> Recordar Datos
         </label>
      </div>
      <button id="btn-submit" class="btn btn-lg btn-outline-primary  btn-block" type="button">Iniciar Sesi&oacute;n</button>

      <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y") ?></p>
   </form>
</div>
