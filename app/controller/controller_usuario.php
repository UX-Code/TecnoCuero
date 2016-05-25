<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_usuario.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$usu_tipoidentidad = $_POST["txt_tipoidentidad"];
			$usu_estado = $_POST["txt_estado"];
			$usu_fecharegistro = $_POST["txt_fecharegistro"];
				Modulo_Pais::Guardar($usu_tipoidentidad, $usu_estado, $usu_fecharegistro);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$usu_codigo = $_POST["txt_codigo"];
			$usu_tipoidentidad = $_POST["txt_tipoidentidad"];
			$usu_estado = $_POST["txt_estado"];
			$usu_fecharegistro = $_POST["txt_fecharegistro"];
			try{
				Modulo_Pais::Modificar($usu_codigo, $usu_tipoidentidad, $usu_estado, $usu_fecharegistro);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$usu_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($usu_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
