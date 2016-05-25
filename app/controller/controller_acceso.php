<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_empleado.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
		    $usu_codigo = $_POST["txtacc_codigo"];
			$per_codigo = $_POST["txtper_codigo"];			
			$acc_clave = $_POST["txt_clave"];
			$acc_estado = $_POST["txt_estado"];			
			$acc_utimo_acceso = $_POST["txt_ultimo_acceso"];
			try{
				Modulo_Pais::Guardar($usu_codigo, $per_codigo, $acc_clave, $acc_estado, $acc_utimo_acceso);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$acc_codigo = $_POST["txt_codigo"];
			$usu_codigo = $_POST["txtacc_codigo"];
			$per_codigo = $_POST["txtper_codigo"];			
			$acc_clave = $_POST["txt_clave"];
			$acc_estado = $_POST["txt_estado"];			
			$acc_utimo_acceso = $_POST["txt_ultimo_acceso"];
			try{
				Modulo_Pais::Modificar($acc_codigo, $usu_codigo, $per_codigo, $acc_clave, $acc_estado, $acc_utimo_acceso);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$acc_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($acc_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
