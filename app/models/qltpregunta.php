<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of qltformulario
 *
 * @author nyakode
 */
class Qltpregunta {

   public static function create($data) {
      $sql = "INSERT INTO qlt_preguntas(formulario_id, detalle_pregunta, pregunta, valor) VALUES (:formulario_id, :detalle_pregunta, :pregunta, :valor)";
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute($data);
         //$rst = $query->fetchAll();

         if ($rst = $query->fetchAll()) {
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
         return $result;
         die();
      }
   }

   public static function readOne($data) {
      $sql = "SELECT qlp.id, qlp.formulario_id, qlf.frm_nombre, qlp.detalle_pregunta, qlp.pregunta,  qlp.valor FROM qlt_preguntas qlp LEFT JOIN qlt_formulario qlf ON qlf.id = qlp.formulario_id WHERE qlp.id = :id";
      
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute($data);
         $rst = $query->fetchAll();

         if (!empty($rst)) {
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
             'data' => $data
         ];
         
           return $result;
         die();
      }
   }

   public static function readAll() {
      $sql = "SELECT qlp.id, qlp.formulario_id, qlf.frm_nombre, qlp.detalle_pregunta, qlp.pregunta,  qlp.valor FROM qlt_preguntas qlp LEFT JOIN qlt_formulario qlf ON qlf.id = qlp.formulario_id ";
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute();
         $rst = $query->fetchAll();

         if (isset($rst)) {
            $result = ["data" =>$rst];
            
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
         return $result;
         die();
      }
   }

   public static function filter($data) {
      $sql = "SELECT qlp.id, qlp.formulario_id, qlf.frm_nombre, qlf.frm_descripcion, qlp.detalle_pregunta, qlp.pregunta,  qlp.valor FROM qlt_preguntas qlp LEFT JOIN qlt_formulario qlf ON qlf.id = qlp.formulario_id  WHERE qlp.formulario_id = :formulario_id";
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute($data);
         $rst = $query->fetchAll();

         if (!empty($rst)) {
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
         return $result;
         die();
      }
   }

   public static function update($data) {
      $sql = "UPDATE qlt_preguntas SET formulario_id=:formulario_id ,detalle_pregunta = :detalle_pregunta, pregunta = :pregunta, valor = :valor  WHERE id = :id";
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute($data);
         $rst = $query->fetchAll();

         if (!empty($rst)) {
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
                'data' => $data
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
             'data' => $query
         ];
         return $result;
         die();
      }
   }

   public static function delete($data) {
      $sql = 'DELETE FROM qlt_preguntas WHERE id = :id';
      try {
         $cn = \Core\Models::instance();
         $query = $cn->consulta($sql);
         $query->execute($data);
         $rst = $query->fetchAll();

         if (!empty($rst)) {
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
             'data' => $e
         ];
         return $result;
         die();
      }
   }

}
