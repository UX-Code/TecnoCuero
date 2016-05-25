<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_tipoevento.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$teven_nombre = $_POST["txt_nombre"];
			$teven_descripcion = $_POST["txt_descripcion"];
			try{
				Modulo_Pais::Guardar($teven_nombre, $teven_descripcion);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$teven_codigo = $_POST["txt_codigo"];
			$teven_nombre = $_POST["txt_nombre"];
			$teven_descripcion = $_POST["txt_descripcion"];
			try{
				Modulo_Pais::Modificar($teven_codigo, $teven_nombre, $teven_descripcion);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$teven_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($teven_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
