<?php
class Modulo_Ciudad{
	function Guardar($dep_codigo, $ciu_codigo, $ciu_nombre){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_ciudades (dep_codigo, ciu_codigo, ciu_nombre) VALUES (?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($dep_codigo, $ciu_codigo, $ciu_nombre));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_ciudades ORDER BY ciu_nombre ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($ciu_codigoPK){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_ciudades WHERE ciu_codigoPK = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($ciu_codigoPK));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($ciu_codigoPK, $dep_codigo, $ciu_codigo, $ciu_nombre){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_ciudades SET dep_codigo = ?, ciu_codigo = ?, ciu_nombre = ? WHERE ciu_codigoPK = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($dep_codigo, $ciu_codigo, $ciu_nombre, $ciu_codigoPK));
		ConexionBD::CerrarBD();
	}

	function Eliminar($ciu_codigoPK){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_ciudades WHERE ciu_codigoPK = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($ciu_codigoPK));
		ConexionBD::CerrarBD();
	}
}
?> 
