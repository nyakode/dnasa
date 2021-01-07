<?php

namespace App\Models;

/**
 * 
 */
class Cfgtipoform {
	public static function create($data) {
		$sql = "INSERT INTO cfg_tipoform(tipo) VALUES (:tipo)";
		try {
			$cn    = \Core\Models::instance();
			$query = $cn->consulta($sql);
			$query->execute($data);
			$rst = $query->fetchAll();

			if ($rst->fetchColumn() > 0) {
				$result = [
					'response' => true,
					'class'    => 'success',
					'title'    => 'Datos Registrados!',
					'message'  => 'Los datos han sido almacenados correctamente',
					'data'     => $rst
				];
			} else {
				$result = [
					'response' => true,
					'class'    => 'alert',
					'title'    => 'Proceso completado con errores!',
					'message'  => 'Se ha generado un error al intentar regstrar los datos',
					'data'     => $rst
				];
			}
			$cn->cerrar();
			return $result;
			die();
		} catch (\PDOException $e) {
			$result = [
				'response' => false,
				'class'    => 'danger',
				'title'    => 'Error en la consulta!',
				'message'  => $e->getMessage(),
				'data'     => $e->getCode()
			];
		}
	}

	public static function readAll() {
		$sql = "SELECT * FROM cfg_tipoform";
		try {
			$cn    = \Core\Models::instance();
			$query = $cn->consulta($sql);
			$query->execute();
			$rst = $query->fetchAll();

			if (isset($rst)) {
				$result = [
					'response' => true,
					'class'    => 'success',
					'title'    => 'Datos Obtenidos!',
					'message'  => 'Los datos han obtenido satisfactoriamente',
					'data'     => $rst
				];
			} else {
				$result = [
					'response' => true,
					'class'    => 'alert',
					'title'    => 'Proceso completado con errores!',
					'message'  => 'no ha sido posible obtener los datos solicitados',
					'data'     => $rst
				];
			}
			$cn->cerrar();
			return $result;
			die();
		} catch (\PDOException $e) {
			$result = [
				'response' => false,
				'class'    => 'danger',
				'title'    => 'Error en la consulta!',
				'message'  => $e->getMessage(),
				'data'     => $e->getCode()
			];
			return $result;
			die();
		}
	}

	public static function update($data) {
		$sql = "UPDATE cfg_tipoform SET tipo = :tipo WHERE id = :id";
		try {
			$cn    = \Core\Models::instance();
			$query = $cn->consulta($sql);
			$query->execute($data);
			$rst = $query->fetchAll();

			if (empty($rst)) {
				$result = [
					'response' => true,
					'class'    => 'success',
					'title'    => 'Datos Actualizados!',
					'message'  => 'Los datos han actualizado satisfactoriamente',
					'data'     => $rst
				];
			} else {
				$result = [
					'response' => true,
					'class'    => 'alert',
					'title'    => 'Proceso completado con errores!',
					'message'  => 'no ha sido posible actualizar los datos ',
					'data'     => $rst
				];
			}
			$cn->cerrar();
			return $result;
			die();
		} catch (\PDOException $e) {
			$result = [
				'response' => false,
				'class'    => 'danger',
				'title'    => 'Error en la consulta!',
				'message'  => $e->getMessage(),
				'data'     => $e->getCode()
			];
		}
	}

	public static function delete($data) {
		$sql = 'DELETE FROM cfg_tipoform WHERE id = :id';
		try {
			$cn    = \Core\Models::instance();
			$query = $cn->consulta($sql);
			$query->execute($data);
			$rst = $query->fetchAll();

			if (empty($rst)) {
				$result = [
					'response' => true,
					'class'    => 'success',
					'title'    => 'Proceso Correcto',
					'mensjae'  => 'El registro ha sido eliminado',
					'data'     => $rst,
				];
			} else {
				$result = [
					'response' => true,
					'class'    => 'alert',
					'title'    => 'Proceso Completado con Errores',
					'mensjae'  => 'Se ha generado un error al eliminar el registro',
					'data'     => $rst,
				];
			}
			$cn->cerrar();
			return $result;
			die();
		} catch (\PDOException $e) {
			$result = [
				'response' => false,
				'class'    => 'danger',
				'title'    => 'Error en la consulta',
				'mensjae'  => $e->getMessage(),
				'data'     => $e->getCode(),
			];
			return $result;
			die();
		}
	}
}