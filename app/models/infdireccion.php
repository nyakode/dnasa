<?php

namespace App\Models;

/**
 *
 */
class Infdireccion {

   public static function create($data) {
      $sql = "INSERT INTO inf_direccion(corregimiento_id, direccion) VALUES (:corregimiento_id, :direccion)";
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
      $sql = "SELECT id.id, id.corregimiento_id, cc.corregimiento, cc.distrito_id, cd.distrito,cd.provincia_id, cp.provincia, id.direccion FROM inf_direccion id LEFT JOIN cfg_corregimientos cc ON cc.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id WHERE  cd.id = :id";
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
      $sql = "SELECT id.id, id.corregimiento_id, cc.corregimiento, cc.distrito_id, cd.distrito,cd.provincia_id, cp.provincia, id.direccion FROM inf_direccion id LEFT JOIN cfg_corregimientos cc ON cc.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id";
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
      $sql = "SELECT id.id, id.corregimiento_id, cc.corregimiento, cc.distrito_id, cd.distrito,cd.provincia_id, cp.provincia, id.direccion FROM inf_direccion id LEFT JOIN cfg_corregimientos cc ON cc.id = id.corregimiento_id LEFT JOIN cfg_distritos cd ON cd.id = cc.distrito_id LEFT JOIN cfg_provincias cp ON cp.id = cd.provincia_id  WHERE id.corregimiento_id = :corregimiento_id";
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
      $sql = "UPDATE inf_direccion SET corregimiento_id=corregimiento_id,direccion=direccion WHERE id = :id";
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
      $sql = 'DELETE FROM inf_direccion WHERE id = :id';
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
