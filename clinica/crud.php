<?php
require_once"conexion.php";
class Crud extends Conexion{
	public function mostrarDatos(){
		$sql="SELECT Id_terapia
					Nombre terapia
					Beneficios
					Descripcion
					Duracion
					Precio
				from t_crud";
			$query=Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
	}
}
?>