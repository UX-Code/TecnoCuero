<?php
class Modulo_Empleado{
	function Guardar($emp_nit, $usu_codigo, $empl_cargo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO mod_empleados (emp_nit,usu_codigo,empl_cargo) VALUES (?,?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_nit, $usu_codigo, $empl_cargo));
		ConexionBD::CerrarBD();
	}

	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_empleados ORDER BY emp_nit ASC";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}

	function ConsultarporCodigo($empl_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM mod_empleados WHERE empl_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($empl_codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	
	function Modificar($empl_codigo, $emp_nit, $usu_codigo, $empl_cargo){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE mod_empleados SET emp_nit = ?, usu_codigo = ?, empl_cargo = ? WHERE empl_codigo = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($emp_nit, $usu_codigo, $empl_cargo, $empl_codigo));
		ConexionBD::CerrarBD();
	}

	function Eliminar($empl_codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM mod_empleados WHERE empl_codigo = ?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($empl_codigo));
		ConexionBD::CerrarBD();
	}
}
?> 
