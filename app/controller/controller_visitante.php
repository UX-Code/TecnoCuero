<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_visitante.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$usu_codigo = $_POST["txtusu_codigo"];
			$even_codigo = $_POST["txteven_codigo"];
			$vis_fecha = $_POST["txt_fecha"];
			$vis_hora = $_POST["txt_hora"];
				Modulo_Pais::Guardar($usu_codigo, $even_codigo, $vis_fecha, $vis_hora);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$vis_codigo = $_POST["txt_codigo"];
			$usu_codigo = $_POST["txtusu_codigo"];
			$even_codigo = $_POST["txteven_codigo"];
			$vis_fecha = $_POST["txt_fecha"];
			$vis_hora = $_POST["txt_hora"];
			try{
				Modulo_Pais::Modificar($vis_codigo, $usu_codigo, $even_codigo, $vis_fecha, $vis_hora);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$vis_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($vis_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
