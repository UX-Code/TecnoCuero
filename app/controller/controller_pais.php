<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_pais.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$pais_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Guardar($pais_nombre);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$pais_codigo = $_POST["txt_codigo"];
			$pais_nombre = $_POST["txt_nombre"];
			try{
				Modulo_Pais::Modificar($pais_codigo, $pais_nombre);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$pais_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($pais_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
