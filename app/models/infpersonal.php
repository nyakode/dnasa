<?php

namespace App\Models;

/**
 *
 */
class Infpersonal {

   public static function create($data) {
      $sql = "INSERT INTO inf_personal(nombres, apellido, genero_id, ecivil_id, cedula, nacimientodt) VALUES (:nombres, :apellido, :genero_id, :ecivil_id, :cedula, :nacimientodt)";
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
      $sql = "SELECT ip.nombres, ip.apellido, ip.genero_id, cg.genero, ip.ecivil_id, ce.ecivil, ip.cedula, ip.nacimientodt FROM inf_personal ip LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN cfg_eciviles ce ON ce.id = ip.ecivil_id  WHERE  ip.id = :id";
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
      $sql = "SELECT ip.nombres, ip.apellido, ip.genero_id, cg.genero, ip.ecivil_id, ce.ecivil, ip.cedula, ip.nacimientodt FROM inf_personal ip LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN cfg_eciviles ce ON ce.id = ip.ecivil_id";
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
      $sql = "SELECT ip.nombres, ip.apellido, ip.genero_id, cg.genero, ip.ecivil_id, ce.ecivil, ip.cedula, ip.nacimientodt FROM inf_personal ip LEFT JOIN cfg_generos cg ON cg.id = ip.genero_id LEFT JOIN cfg_eciviles ce ON ce.id = ip.ecivil_id WHERE ip.cedula = :cedula";
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
      $sql = "UPDATE `inf_personal` SET nombres=:nombres,apellido=:apellido,genero_id=:genero_id,ecivil_id=:ecivil_id,cedula=:cedula,nacimientodt=:nacimientodt WHERE id = id";
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
      $sql = 'DELETE FROM inf_personal WHERE id = :id';
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
