<?php

namespace App\Models;

/**
 *
 */
class Empleados {

   public static function create($data) {
      $sql = "INSERT INTO empleados(ipersonal_id, ilaboral_id, idireccion_id, imedica_id, iacceso_id, iemergencia_id, icontacto_id) VALUES (:ipersonal_id, :ilaboral_id, :idireccion_id, :imedica_id, :iacceso_id, :iemergencia_id, :icontacto_id)";
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

   public static function readOne($data) {
      $sql = "SELECT e.id,  e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id WHERE e.id = :id AND il.estado_id = 1";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Obtenidos!',
                'message' => 'Los datos han obtenido satisfactoriamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'no ha sido posible obtener los datos solicitados',
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

   public static function readAll() {
      $sql = "SELECT e.id, e.id, e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Obtenidos!',
                'message' => 'Los datos han obtenido satisfactoriamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'no ha sido posible obtener los datos solicitados',
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

   public static function filter($data) {
      $sql = "SELECT e.ipersonal_id, ip.nombres, ip.apellidop, ip.apellidom, ip.cedula, ip.nacimientodt, ip.genero_id, cg.genero, e.ilaboral_id, il.usuario, il.codempleado, il.ingresodt, il.salario, il.cargo_id, cc.cargo, il.direccion_id, il.estado_id, ce.estado, il.unidad_id, e.idireccion_id, id.corregimiento_id, cc2.corregimiento, cc2.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, id.direccion, e.imedica_id, im.tipo_sangre, ct.tiposangre, im.cond_medica, im.medico, e.iacceso_id, ia.perfil, cp2.perfil, ia.avatar, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono as tcontacto, e.icontacto_id, ic.telefono as tfijo, ic.celular, ic.correo FROM empleados e LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN cfg_cargos cc ON cc.id = il.cargo_id LEFT JOIN cfg_estados ce ON ce.id = il.estado_id LEFT JOIN inf_direccion id ON id.id = e.ilaboral_id LEFT JOIN cfg_corregimientos cc2 ON cc2.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc2.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_medica im ON im.id = e.imedica_id LEFT JOIN cfg_tiposangre ct ON ct.id = im.tipo_sangre LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN cfg_perfiles cp2 ON cp2.id = ia.perfil LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id WHERE il.usuario = :data AND il.estado_id = 1	";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Obtenidos!',
                'message' => 'Los datos han obtenido satisfactoriamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'no ha sido posible obtener los datos solicitados',
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

   public static function update($data) {
      $sql = "UPDATE empleados SET ipersonal_id=:ipersonal_id,ilaboral_id=:ilaboral_id,idireccion_id=:idireccion_id,imedica_id=:imedica_id,iacceso_id=:iacceso_id,iemergencia_id=:iemergencia_id,icontacto_id=:icontacto_id WHERE id = ids";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Datos Actualizados!',
                'message' => 'Los datos han actualizado satisfactoriamente',
                'data' => $rst
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso completado con errores!',
                'message' => 'no ha sido posible actualizar los datos ',
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

   public static function delete($data) {
      $sql = 'DELETE FROM empleados WHERE id = :id';
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql, $data);
         if ($rst) {
            $result = [
                'response' => true,
                'class' => 'success',
                'title' => 'Proceso Correcto',
                'mensjae' => 'El registro ha sido eliminado',
                'data' => $rst,
            ];
         } else {
            $result = [
                'response' => true,
                'class' => 'alert',
                'title' => 'Proceso Completado con Errores',
                'mensjae' => 'Se ha generado un error al eliminar el registro',
                'data' => $rst,
            ];
         }
         $cn->cerrar();
         return $result;
         die();
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error en la consulta',
             'mensjae' => $e->getMessage(),
             'data' => $e->getCode(),
         ];
         return $result;
         die();
      }
   }

}
