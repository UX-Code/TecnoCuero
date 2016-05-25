<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_ciudad.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$dep_codigo = $_POST["txt_codigo"];
			$ciu_codigo = $_POST["txtciu_codigo"];
			$ciu_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Guardar($dep_codigo,$ciu_codigo,$ciu_nombre);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$ciu_codigoPK = $_POST["txt_codigoPK"];
			$dep_codigo = $_POST["txt_codigo"];
			$ciu_codigo = $_POST["txtciu_codigo"];
			$ciu_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Modificar($ciu_codigoPK,$dep_codigo,$ciu_codigo,$ciu_nombre);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$ciu_codigoPK = $_POST["txt_codigoPK"];
			try{
				Modulo_Pais::Eliminar($ciu_codigoPK);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
