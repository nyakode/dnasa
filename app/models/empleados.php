<?php

namespace App\Models;

/**
 * 
 */

class Empleados {

   public static function create($data) {
      $sql = "INSERT INTO 'table'() VALUES ()";
      try {
         $cn = \Core\Models::instance();
         $cn->consulta($sql);
         $cn->execute($data);
         $rst = $cn->fetch_all();

         if ($rst->fetchColumn() > 0) {
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
      $sql = "SELECT e.id,e.iacceso_id, ia.usuario, ia.perfil, ia.avatar, e.icontacto_id, ic.telefono, ic.celular, ic.correo, e.idireccion_id, cc.corregimiento, cc.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono, e.ilaboral_id, il.cargo_id, cc2.cargo, il.codempleado, il.equipo_id, ca.area, ca.alias, cj.nombre AS jefe_nombre, cj.usuario AS jefe_usuario, il.estado_id, ce2.estado, il.ingresodt, e.imedica_id, im.cond_medica, im.tipo_sangre, im.medico, e.ipersonal_id, ip.nombres, ip.apellido, ip.cedula, ip.ecivil_id, ip.genero_id, ip.nacimientodt FROM empleados e LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN inf_direccion id ON id.id = e.idireccion_id LEFT JOIN cfg_corregimientos cc ON cc.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN inf_medica im ON im.id = e.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_equipos ce ON ce.id = il.equipo_id LEFT JOIN cfg_areas ca ON ca.id = ce.area_id LEFT JOIN cfg_jefes cj ON cj.id = ce.jefe LEFT JOIN cfg_cargos cc2 ON cc2.id = il.cargo_id LEFT JOIN cfg_estados ce2 ON ce2.id = il.estado_id WHERE e.id = :id";
      try {
         $cn = \Core\Models::instance();
         $cn->consulta($sql);
         $cn->execute($data);
         $rst = $cn->fetch_all();

         if (empty($rst)) {
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
      $sql = "SELECT e.id,e.iacceso_id, ia.usuario, ia.perfil, ia.avatar, e.icontacto_id, ic.telefono, ic.celular, ic.correo, e.idireccion_id, cc.corregimiento, cc.distrito_id, cd.distrito, cd.provincia_id, cp.provincia, e.iemergencia_id, ie.contacto, ie.relacion, ie.telefono, e.ilaboral_id, il.cargo_id, cc2.cargo, il.codempleado, il.equipo_id, ca.area, ca.alias, cj.nombre AS jefe_nombre, cj.usuario AS jefe_usuario, il.estado_id, ce2.estado, il.ingresodt, e.imedica_id, im.cond_medica, im.tipo_sangre, im.medico, e.ipersonal_id, ip.nombres, ip.apellido, ip.cedula, ip.ecivil_id, ip.genero_id, ip.nacimientodt FROM empleados e LEFT JOIN inf_acceso ia ON ia.id = e.iacceso_id LEFT JOIN inf_contacto ic ON ic.id = e.icontacto_id LEFT JOIN inf_direccion id ON id.id = e.idireccion_id LEFT JOIN cfg_corregimientos cc ON cc.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id LEFT JOIN inf_emergencia ie ON ie.id = e.iemergencia_id LEFT JOIN inf_laboral il ON il.id = e.ilaboral_id LEFT JOIN inf_medica im ON im.id = e.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = e.ipersonal_id LEFT JOIN cfg_equipos ce ON ce.id = il.equipo_id LEFT JOIN cfg_areas ca ON ca.id = ce.area_id LEFT JOIN cfg_jefes cj ON cj.id = ce.jefe LEFT JOIN cfg_cargos cc2 ON cc2.id = il.cargo_id LEFT JOIN cfg_estados ce2 ON ce2.id = il.estado_id";
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute();
         $rst = $query->fetchAll();

         if (empty($rst)) {
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
      $sql = "SELECT * FROM table WHERE data = :data";
      try {
         $cn = \Core\Models::instance();
         $cn->consulta($sql);
         $cn->execute();
         $rst = $cn->fetch_all();

         if (empty($rst)) {
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
         $cn->consulta($sql);
         $cn->execute();
         $rst = $cn->fetch_all();

         if (empty($rst)) {
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
      $sql = 'DELETE FROM `empleados` WHERE id = :id';
      try {
         $cn = \Core\Models::instance();
         $cn->consulta($sql);
         $cn->execute($data);
         $rst = $cn->fetchall();

         if (empty($rst)) {
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
