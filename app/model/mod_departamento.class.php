<?php
class Modulo_Departamento{
	function Guardar($pais_codigo, $dep_nombre){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_departamentos (pais_codigo, dep_nombre) VALUES (?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_codigo, $dep_nombre));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_departamentos ORDER BY dep_nombre ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($dep_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_departamentos WHERE dep_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($dep_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($dep_codigo, $pais_codigo, $dep_nombre){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_departamentos SET pais_codigo = ?, dep_nombre = ? WHERE dep_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($pais_codigo, $dep_nombre, $dep_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($dep_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_departamentos WHERE dep_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($dep_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
