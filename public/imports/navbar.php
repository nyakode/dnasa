
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="<?php echo URI; ?>">
      <img src="<?php echo URI . 'public/images/csslogo.png' ?>" width="30" height="30" alt="">
      <?php echo APPNAME; ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
            <a class="nav-link" href="<?php echo URI . 'home/index' ?>">Inicio</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo URI . 'evaluaciones' ?>">Evaluaciones</a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Something else here</a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
         </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
         <li class="nav-item dropdown me-1">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?php
               if (isset($_COOKIE[LOGIN])) {
                  $a = json_decode($_COOKIE[LOGIN], true);
                  echo($a['usuario']);
               }
               ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="<?php echo URI ?>usuario">Perfil</a>
               <a class="dropdown-item" href="#">Another action</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="<?php echo URI ?>home/logout">Cerrar Sesion</a>
            </div>
         </li>
      </ul>
   </div>
</nav>

<div class="container-fluid mt-2">