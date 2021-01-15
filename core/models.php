<?php

namespace Core;

class Models {

   private $connect;
   private $dsn;
   private static $instance;

   public function __construct() {
      $options = [
          \PDO::ATTR_PERSISTENT => TRUE,
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
          \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
      ];
      $this->dsn = DATABASE['driver'] . ":host=" . DATABASE['hostname'] . ";dbname=" . DATABASE['database'];
      try {
         $this->connect = new \PDO($this->dsn, DATABASE['username'], DATABASE['password'], $options);
         $this->connect->exec("SET CHARACTER SET UTF8");
      } catch (\PDOException $e) {
         $result = [
             'response' => false,
             'class' => 'danger',
             'title' => 'Error de Conexion',
             'mensjae' => $e->getMessage(),
             'data' => $e->getTraceAsString(),
         ];

         header('Content-Type: appliction/json');
         echo json_encode($result);
         die();
      }
   }

   /**
    * 
    * @param type $sql
    * @param type $params
    * @return boolean
    */
   public function consulta($sql, $params = []) {
      $link = $this->connect;
      $link->beginTransaction();
      $query = $link->prepare($sql);

      if ($params) {
         if (!$query->execute($params)) {
            $link->rollBack();
            $error = $query->errorInfo();
            return $error;
         }
      } else {
         if (!$query->execute()) {
            $link->rollBack();
            $error = $query->errorInfo();
            return $error;
         }
      }



      if (strpos($sql, 'INSERT') !== FALSE) {
         $id = $link->lastInsertId();
         $link->commit();
         return $id;
         die();
      }

      if (strpos($sql, 'SELECT') !== FALSE) {
         $result = $query->rowCount() > 0 ? $query->fetchAll() : false;
         return $result;
      }

      if (strpos($sql, 'UPDATE') !== FALSE) {
         $link->commit();
         return true;
         die();
      }

      if (strpos($sql, 'DELETE') !== FALSE) {
         if ($query->rowCount() > 0) {
            $link->commit();
            return true;
            die();
         }
         $link->rollBack();
         return false;
      }

      $link->commit();
      return true;
      die();
   }

   public function cerrar() {
      return $this->connect = null;
   }

   public static function instance() {
      if (!isset(self::$instance)) {
         $class = __CLASS__;
         self::$instance = new $class;
      }
      return self::$instance;
   }

   public function __clone() {
      trigger_error("La clonacion de este objeto no esta permitida", E_USER_ERROR);
   }

}
