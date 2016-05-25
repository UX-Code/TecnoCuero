<?php
class Modulo_Empresa{
	function Guardar($emp_dv, $emp_nombre, $emp_tel){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_empresas (emp_dv, emp_nombre, emp_tel) VALUES (?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_dv, $emp_nombre, $emp_tel));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_empresas ORDER BY emp_nombre ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($emp_nit){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_empresas WHERE emp_nit = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_nit));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($emp_nit, $emp_dv, $emp_nombre, $emp_tel){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_empresas SET emp_dv = ?, dep_nombre = ? WHERE emp_nit = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_nit, $emp_dv, $emp_nombre, $emp_tel, $emp_nit));
		ConexionBD::CerrarBD();
	}

	function Eliminar($emp_nit){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_empresas WHERE emp_nit = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_nit));
		ConexionBD::CerrarBD();
	}
}
?> 
