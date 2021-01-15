<?php

namespace App\Models;

class Referencias {

   // genero

   public static function filterGenero($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.jefe_id, cj.nombre as jefe_nombre, ca.area, ca.alias, il.area_id, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil as perfil_id, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN cfg_jefes cj ON cj.id = il.jefe_id LEFT JOIN cfg_areas ca ON ca.id = il.area_id WHERE ip.genero_id = :genero_id AND il.estado_id = 1";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Registrados!',
                'message' => 'Los datos han sido almacenados correctamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'Se ha generado un error al intentar regstrar los datos',
                'data' => $rst
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta!',
             'message' => $e->getMessage(),
             'data' => $e->getCode()
         ];
      }
   }

   // cargo
   public static function filterCargo($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.jefe_id, cj.nombre as jefe_nombre, ca.area, ca.alias, il.area_id, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil as perfil_id, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN cfg_jefes cj ON cj.id = il.jefe_id LEFT JOIN cfg_areas ca ON ca.id = il.area_id WHERE  il.estado_id = 1 AND il.cargo_id = :cargo_id";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
           $result =  [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Registrados!',
                'message' => 'Los datos han sido obtenidos satisfactoriamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'Se ha generado un error al intentar obteber los datos',
                'data' => $rst
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta!',
             'message' => $e->getMessage(),
             'data' => $e->getCode()
         ];
      }
   }

   // estado
   public static function filterEstado($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.jefe_id, cj.nombre as jefe_nombre, ca.area, ca.alias, il.area_id, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil as perfil_id, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN cfg_jefes cj ON cj.id = il.jefe_id LEFT JOIN cfg_areas ca ON ca.id = il.area_id WHERE il.estado_id = estado_id";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Registrados!',
                'message' => 'Los datos han sido almacenados correctamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'Se ha generado un error al intentar regstrar los datos',
                'data' => $rst
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta!',
             'message' => $e->getMessage(),
             'data' => $e->getCode()
         ];
      }
   }

   // perfil
   public static function filterPerfil($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.jefe_id, cj.nombre as jefe_nombre, ca.area, ca.alias, il.area_id, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil as perfil_id, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN cfg_jefes cj ON cj.id = il.jefe_id LEFT JOIN cfg_areas ca ON ca.id = il.area_id WHERE ia.perfil = :perfil_id AND il.estado_id = 1";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Registrados!',
                'message' => 'Los datos han sido almacenados correctamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'Se ha generado un error al intentar regstrar los datos',
                'data' => $rst
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta!',
             'message' => $e->getMessage(),
             'data' => $e->getCode()
         ];
      }
   }

   //equipos
   public static function filterEquipo($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.jefe_id, cj.nombre as jefe_nombre, ca.area, ca.alias, il.area_id, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil as perfil_id, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN cfg_jefes cj ON cj.id = il.jefe_id LEFT JOIN cfg_areas ca ON ca.id = il.area_id WHERE il.jefe_id = :jefe_id AND il.estado_id = 1";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Registrados!',
                'message' => 'Los datos han sido almacenados correctamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'Se ha generado un error al intentar regstrar los datos',
                'data' => $rst
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta!',
             'message' => $e->getMessage(),
             'data' => $e->getCode()
         ];
      }
   }

}
