<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_empresa.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$emp_dv = $_POST["txt_dv"];
			$emp_nombre = $_POST["txt_nombre"];
			$emp_tel = $_POST["txt_telefono"];
			try{
				Modulo_Pais::Guardar($emp_dv, $emp_nombre, $emp_tel);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$emp_nit = $_POST["txt_nit"];
			$emp_dv = $_POST["txt_dv"];
			$emp_nombre = $_POST["txt_nombre"];
			$emp_tel = $_POST["txt_telefono"];
			try{
				Modulo_Pais::Modificar($emp_nit, $emp_dv, $emp_nombre, $emp_tel);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$emp_nit = $_POST["txt_nit"];
			try{
				Modulo_Pais::Eliminar($emp_nit);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
