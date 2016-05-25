<?php
class Modulo_Tipo_Participante{
	function Guardar($tpar_nombre, $tpar_descripcion){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_tipoparticipante (tpar_nombre, tpar_descripcion) VALUES (?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($tpar_nombre, $tpar_descripcion));
		ConexionBD::CerrarBD();
	}
	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_tipoparticipante ORDER BY tpar_nombre";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	function ConsultarporCodigo($tpar_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_tipoparticipante WHERE tpar_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($tpar_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
		function Modificar($tpar_codigo, $tpar_nombre, $tpar_descripcion){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_tipoparticipante SET tpar_nombre = ?, tpar_descripcion = ? WHERE tpar_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($tpar_nombre, $tpar_descripcion, $tpar_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($tpar_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_tipoparticipante WHERE tpar_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($tpar_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
