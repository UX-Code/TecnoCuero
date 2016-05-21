<?php
class Modulo_Tipo_Evento{
	function Guardar($teven_nombre, $teven_descripcion){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_tipoevento (teven_nombre,teven_descripcion) VALUES (?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($teven_nombre, $teven_descripcion));
		ConexionBD::CerrarBD();
	}
	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_tipoevento ORDER BY teven_nombre";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	function ConsultarporCodigo($teven_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_tipoevento WHERE teven_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($teven_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
		function Modificar($teven_codigo, $teven_nombre, $teven_descripcion){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_tipoevento SET teven_nombre = ?, teven_descripcion = ? WHERE teven_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($teven_nombre, $teven_descripcion, $teven_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($teven_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_tipoevento WHERE teven_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($teven_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
