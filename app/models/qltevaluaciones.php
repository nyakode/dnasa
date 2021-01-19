<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

class Qltevaluaciones {

   public static function create($data) {
      $sql = "INSERT INTO qlt_evaluaciones(form_id, creacion_dt, creador_id, operador_id, coordinador_di, preg_1, preg_2, preg_3, preg_4, preg_5, preg_6, preg_7, preg_8, preg_9, preg_10, preg_11, preg_12, preg_13, preg_14, preg_15, preg_16, preg_17, preg_18, preg_19, preg_20, preg_21, preg_22, preg_23, preg_24, preg_25, preg_26, preg_27, preg_28, preg_29, preg_30, comentario, final_dt) VALUES (:form_id, :creacion_dt, :creador_id, :operador_id, :coordinador_di, :preg_1, :preg_2, :preg_3, :preg_4, :preg_5, :preg_6, :preg_7, :preg_8, :preg_9, :preg_10, :preg_11, :preg_12, :preg_13, :preg_14, :preg_15, :preg_16, :preg_17, :preg_18, :preg_19, :preg_20, :preg_21, :preg_22, :preg_23, :preg_24, :preg_25, :preg_26, :preg_27, :preg_28, :preg_29, :preg_30, :comentario, :final_dt)";
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
             'data' => $data
         ];

         return $result;
      }
   }

   public static function readAll() {
      $sql = "SELECT qe.id, qe.form_id, qe.creacion_dt, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, qe.operador_id,il.usuario,ip.nombres, ip.apellidop , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1, qe.preg_2, qe.preg_3, qe.preg_4, qe.preg_5, qe.preg_6, qe.preg_7, qe.preg_8, qe.preg_9, qe.preg_10, qe.preg_11, qe.preg_12, qe.preg_13, qe.preg_14, qe.preg_15, qe.preg_16, qe.preg_17, qe.preg_18, qe.preg_19, qe.preg_20, qe.preg_21, qe.preg_22, qe.preg_23, qe.preg_24, qe.preg_25, qe.preg_26, qe.preg_27, qe.preg_28, qe.preg_29, qe.preg_30, qe.comentario, qe.final_dt FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id";
      try {
         $cn = \Core\Models::instance();
         $rst = $cn->consulta($sql);
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
      $sql = "SELECT qe.id, qe.form_id, qe.creacion_dt, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, qe.operador_id,il.usuario,ip.nombres, ip.apellidop , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1, qe.preg_2, qe.preg_3, qe.preg_4, qe.preg_5, qe.preg_6, qe.preg_7, qe.preg_8, qe.preg_9, qe.preg_10, qe.preg_11, qe.preg_12, qe.preg_13, qe.preg_14, qe.preg_15, qe.preg_16, qe.preg_17, qe.preg_18, qe.preg_19, qe.preg_20, qe.preg_21, qe.preg_22, qe.preg_23, qe.preg_24, qe.preg_25, qe.preg_26, qe.preg_27, qe.preg_28, qe.preg_29, qe.preg_30, qe.comentario, qe.final_dt FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id WHERE qe.id = :id";
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

   public static function readByUser($data) {
      $sql = "SELECT qe.id, qe.form_id, qe.creacion_dt, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, qe.operador_id, il.usuario, ip.nombres, ip.apellidop , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1, qe.preg_2, qe.preg_3, qe.preg_4, qe.preg_5, qe.preg_6, qe.preg_7, qe.preg_8, qe.preg_9, qe.preg_10, qe.preg_11, qe.preg_12, qe.preg_13, qe.preg_14, qe.preg_15, qe.preg_16, qe.preg_17, qe.preg_18, qe.preg_19, qe.preg_20, qe.preg_21, qe.preg_22, qe.preg_23, qe.preg_24, qe.preg_25, qe.preg_26, qe.preg_27, qe.preg_28, qe.preg_29, qe.preg_30, qe.comentario, qe.final_dt FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id WHERE il.usuario = :usuario";
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

   public static function readByEvaluator($data) {
      $sql = "SELECT qe.id, qe.form_id, qe.creacion_dt, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, qe.operador_id,il.usuario,ip.nombres, ip.apellidop , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1, qe.preg_2, qe.preg_3, qe.preg_4, qe.preg_5, qe.preg_6, qe.preg_7, qe.preg_8, qe.preg_9, qe.preg_10, qe.preg_11, qe.preg_12, qe.preg_13, qe.preg_14, qe.preg_15, qe.preg_16, qe.preg_17, qe.preg_18, qe.preg_19, qe.preg_20, qe.preg_21, qe.preg_22, qe.preg_23, qe.preg_24, qe.preg_25, qe.preg_26, qe.preg_27, qe.preg_28, qe.preg_29, qe.preg_30, qe.comentario, qe.final_dt FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id WHERE qe.creador_id = :creador_id";
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

   public static function readByTeam($data) {
      $sql = "SELECT qe.id, qe.form_id, qe.creacion_dt, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, qe.operador_id,il.usuario,ip.nombres, ip.apellidop , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1, qe.preg_2, qe.preg_3, qe.preg_4, qe.preg_5, qe.preg_6, qe.preg_7, qe.preg_8, qe.preg_9, qe.preg_10, qe.preg_11, qe.preg_12, qe.preg_13, qe.preg_14, qe.preg_15, qe.preg_16, qe.preg_17, qe.preg_18, qe.preg_19, qe.preg_20, qe.preg_21, qe.preg_22, qe.preg_23, qe.preg_24, qe.preg_25, qe.preg_26, qe.preg_27, qe.preg_28, qe.preg_29, qe.preg_30, qe.comentario, qe.final_dt FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id WHERE qe.coordinador_di = :coordinador_di";
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

   public static function readByEvaluatorPeriod($data) {
      $sql = "SELECT qe.id,DATE(qe.creacion_dt) as fecha, qe.form_id, qf.frm_nombre, (week(qe.creacion_dt) DIV 4) + 1 as periodo, qe.creador_id, concat(ipa.nombres, ', ', ipa.apellidop) as nombreEvaluador, qe.operador_id,il.usuario, concat(ip.nombres, ', ', ip.apellidop) as nombreOperador , qe.coordinador_di, cj.nombre as nombre_jefe, qe.preg_1 + qe.preg_2 + qe.preg_3 + qe.preg_4 + qe.preg_5 + qe.preg_6 + qe.preg_7 + qe.preg_8 + qe.preg_9 + qe.preg_10 + qe.preg_11 + qe.preg_12 + qe.preg_13 + qe.preg_14 + qe.preg_15 + qe.preg_16 + qe.preg_17 + qe.preg_18 + qe.preg_19 + qe.preg_20 + qe.preg_21 + qe.preg_22 + qe.preg_23 + qe.preg_24 + qe.preg_25 + qe.preg_26 + qe.preg_27 + qe.preg_28 + qe.preg_29 + qe.preg_30 as totalEvaluacion, qe.comentario FROM qlt_evaluaciones qe LEFT JOIN empleados em ON em.id = qe.operador_id LEFT JOIN inf_acceso ia ON ia.id = qe.creador_id LEFT JOIN cfg_jefes cj ON cj.id = qe.coordinador_di LEFT JOIN inf_laboral il ON il.id = em.ilaboral_id LEFT JOIN inf_personal ip ON ip.id = em.ipersonal_id LEFT JOIN inf_personal ipa ON ipa.id = qe.creador_id LEFT JOIN qlt_formulario qf ON qf.id = qe.form_id WHERE qe.creador_id = :creador_id";
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

         return $result;
         die();
      }
   }

   public static function countEvaluationPeriod($data) {
      $sql = "SELECT COUNT(form_id) as cantidad FROM qlt_evaluaciones   WHERE  (week(creacion_dt) DIV 4) + 1 =  (week(NOW()) DIV 4) + 1 AND creador_id = :creador_id;";
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

         return $result;
         die();
      }
   }

   public static function avgEvaluationPeriod($data) {
      $sql = "SELECT TRUNCATE ( ( sum( preg_1 + preg_2 + preg_3 + preg_4 + preg_5 + preg_6 + preg_7 + preg_8 + preg_9 + preg_10 + preg_11 + preg_12 + preg_13 + preg_14 + preg_15 + preg_16 + preg_17 + preg_18 + preg_19 + preg_20 + preg_21 + preg_22 + preg_23 + preg_24 + preg_25 + preg_26 + preg_27 + preg_28 + preg_29 + preg_30 )/ COUNT(form_id) ), 2) as promedio
FROM qlt_evaluaciones
WHERE (week(creacion_dt) DIV 4) + 1 = (week(NOW()) DIV 4) + 1
AND creador_id =:creador_id";
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

         return $result;
         die();
      }
   }

   public static function hightEvaluationPeriod($data) {
      $sql = "SELECT TRUNCATE((SELECT COUNT(form_id) as cantidad FROM qlt_evaluaciones   WHERE  (week(creacion_dt) DIV 4) + 1 =  (week(NOW()) DIV 4) + 1 AND ( preg_1 + preg_2 + preg_3 + preg_4 + preg_5 + preg_6 + preg_7 + preg_8 + preg_9 + preg_10 + preg_11 + preg_12 + preg_13 + preg_14 + preg_15 + preg_16 + preg_17 + preg_18 + preg_19 + preg_20 + preg_21 + preg_22 + preg_23 + preg_24 + preg_25 + preg_26 + preg_27 + preg_28 + preg_29 + preg_30 ) > 80  AND creador_id = :creador_id) / (SELECT COUNT(form_id) as cantidad FROM qlt_evaluaciones   WHERE  (week(creacion_dt) DIV 4) + 1 =  (week(NOW()) DIV 4) + 1 AND creador_id = :creador_id), 2) AS bueno;";
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

         return $result;
         die();
      }
   }

   public static function lowEvaluationPeriod($data) {
         $sql = "SELECT TRUNCATE((SELECT COUNT(form_id) as cantidad FROM qlt_evaluaciones   WHERE  (week(creacion_dt) DIV 4) + 1 =  (week(NOW()) DIV 4) + 1 AND ( preg_1 + preg_2 + preg_3 + preg_4 + preg_5 + preg_6 + preg_7 + preg_8 + preg_9 + preg_10 + preg_11 + preg_12 + preg_13 + preg_14 + preg_15 + preg_16 + preg_17 + preg_18 + preg_19 + preg_20 + preg_21 + preg_22 + preg_23 + preg_24 + preg_25 + preg_26 + preg_27 + preg_28 + preg_29 + preg_30 ) < 80  AND creador_id = :creador_id) / (SELECT COUNT(form_id) as cantidad FROM qlt_evaluaciones   WHERE  (week(creacion_dt) DIV 4) + 1 =  (week(NOW()) DIV 4) + 1 AND creador_id = :creador_id), 2) AS malo;";
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

         return $result;
         die();
      }
   }

}
