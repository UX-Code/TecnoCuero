<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_empleado.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
		    $usu_codigo = $_POST["txtusu_codigo"];
			$emp_nit = $_POST["txt_nit"];			
			$empl_cargo = $_POST["txt_cargo"];
			try{
				Modulo_Pais::Guardar($usu_codigo,$emp_nit,$empl_cargo);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$empl_codigo = $_POST["txt_codigo"];
			$usu_codigo = $_POST["txtusu_codigo"];
			$emp_nit = $_POST["txt_nit"];			
			$empl_cargo = $_POST["txt_cargo"];
			try{
				Modulo_Pais::Modificar($empl_codigo, $usu_codigo, $emp_nit, $empl_cargo);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$empl_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($empl_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
