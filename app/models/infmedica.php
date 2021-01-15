<?php

namespace App\Models;

/**
 *
 */
class Infmedica {

   public static function create($data) {
      $sql = "INSERT INTO inf_laboral(usuario, codempleado, biometrico, cargo_id, equipo_id, ingresodt, estado_id) VALUES (:usuario, :codempleado, :biometrico, :cargo_id, :equipo_id, :ingresodt, :estado_id)";
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
      $sql = "SELECT il.id, il.usuario, il.codempleado, il.biometrico, il.cargo_id, cc.cargo, il.equipo_id, ce.area_id, ca.area, ca.alias, ce.jefe as jefe_id, cj.nombre as jefe_nombre, cj.usuario as jefe_usuario , il.ingresodt, il.estado_id FROM inf_laboral il LEFT JOIN cfg_cargos cc ON cc.id = il.equipo_id LEFT JOIN cfg_equipos ce ON ce.id = il.equipo_id LEFT JOIN cfg_areas ca ON ca.id = ce.area_id LEFT JOIN cfg_jefes cj ON cj.id = ce.jefe WHERE  il.id = :id";
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
      $sql = "SELECT il.id, il.usuario, il.codempleado, il.biometrico, il.cargo_id, cc.cargo, il.equipo_id, ce.area_id, ca.area, ca.alias, ce.jefe as jefe_id, cj.nombre as jefe_nombre, cj.usuario as jefe_usuario , il.ingresodt, il.estado_id FROM inf_laboral il LEFT JOIN cfg_cargos cc ON cc.id = il.equipo_id LEFT JOIN cfg_equipos ce ON ce.id = il.equipo_id LEFT JOIN cfg_areas ca ON ca.id = ce.area_id LEFT JOIN cfg_jefes cj ON cj.id = ce.jefe";
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
      $sql = "SELECT il.id, il.usuario, il.codempleado, il.biometrico, il.cargo_id, cc.cargo, il.equipo_id, ce.area_id, ca.area, ca.alias, ce.jefe as jefe_id, cj.nombre as jefe_nombre, cj.usuario as jefe_usuario , il.ingresodt, il.estado_id FROM inf_laboral il LEFT JOIN cfg_cargos cc ON cc.id = il.equipo_id LEFT JOIN cfg_equipos ce ON ce.id = il.equipo_id LEFT JOIN cfg_areas ca ON ca.id = ce.area_id LEFT JOIN cfg_jefes cj ON cj.id = ce.jefe WHERE il.usuario = :usuario";
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
      $sql = "UPDATE inf_laboral SET usuario=:usuario, codempleado=:codempleado, biometrico=:biometrico, cargo_id=:cargo_id, equipo_id=:equipo_id, ingresodt=:ingresodt, estado_id=:estado_id WHERE id = :id";
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
      $sql = 'DELETE FROM inf_laboral WHERE id = :id';
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
