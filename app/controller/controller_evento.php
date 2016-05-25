<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_evento.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$even_nombre = $_POST["txt_nombre"];
			$even_slogan = $_POST["txt_slogan"];
			$even_fechainicio = $_POST["txt_fechainicio"];
			$even_fechafin = $_POST["txt_fechafin"];
			$even_lugar = $_POST["txt_lugar"];
			$even_coord_lat = $_POST["txt_coord_lat"];
			$even_coord_lon = $_POST["txt_coord_lon"];
			$teven_codigo = $_POST["txtteven_codigo"];
			$even_registro_sofia = $_POST["txt_registro_sofia"];
			$even_precio = $_POST["txt_precio"];
			try{
				Modulo_Pais::Guardar($even_nombre,$even_slogan,$even_fechainicio,$even_fechafin,$even_lugar,$even_coord_lat,$even_coord_lon,$teven_codigo,$even_registro_sofia,$even_precio);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$even_codigo = $_POST["txt_codigo"];
			$even_nombre = $_POST["txt_nombre"];
			$even_slogan = $_POST["txt_slogan"];
			$even_fechainicio = $_POST["txt_fechainicio"];
			$even_fechafin = $_POST["txt_fechafin"];
			$even_lugar = $_POST["txt_lugar"];
			$even_coord_lat = $_POST["txt_coord_lat"];
			$even_coord_lon = $_POST["txt_coord_lon"];
			$teven_codigo = $_POST["txtteven_codigo"];
			$even_registro_sofia = $_POST["txt_registro_sofia"];
			$even_precio = $_POST["txt_precio"];
			try{
				Modulo_Pais::Modificar($even_codigo, $even_nombre,$even_slogan,$even_fechainicio,$even_fechafin,$even_lugar,$even_coord_lat,$even_coord_lon,$teven_codigo,$even_registro_sofia,$even_precio);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$even_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($even_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
