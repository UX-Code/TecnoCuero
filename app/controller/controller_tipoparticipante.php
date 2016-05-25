<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_tipoparticipante.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$tpar_nombre = $_POST["txt_nombre"];
			$tpar_descripcion = $_POST["txt_descripcion"];
			try{
				Modulo_Pais::Guardar($tpar_nombre, $tpar_descripcion);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$tpar_codigo = $_POST["txt_codigo"];
			$tpar_nombre = $_POST["txt_nombre"];
			$tpar_descripcion = $_POST["txt_descripcion"];
			try{
				Modulo_Pais::Modificar($tpar_codigo, $tpar_nombre, $tpar_descripcion);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$tpar_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($tpar_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
