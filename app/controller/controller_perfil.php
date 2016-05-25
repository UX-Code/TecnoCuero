<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_perfil.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$per_nombre = $_POST["txt_nombre"];
			$per_descripcion = $_POST["txt_descripcion"];
				Modulo_Pais::Guardar($per_nombre, $per_descripcion);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$per_codigo = $_POST["txt_codigo"];
			$per_nombre = $_POST["txt_nombre"];
			$per_descripcion = $_POST["txt_descripcion"];
			try{
				Modulo_Pais::Modificar($per_codigo, $per_nombre, $per_descripcion);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$per_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($per_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
