<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_departamento.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$pais_codigo = $_POST["txtpais_codigo"];
			$dep_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Guardar($pais_codigo,$dep_nombre);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$dep_codigo = $_POST["txt_codigo"];
			$pais_codigo = $_POST["txtpais_codigo"];
			$dep_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Modificar($dep_codigo,$pais_codigo,$dep_nombre);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$dep_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($dep_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
