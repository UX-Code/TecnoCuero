<?php
	require_once("../model/bd.conn.php");
	require_once("../model/mod_participante.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$tpar_codigo = $_POST["txttpar_codigo"];
			$usu_codigo = $_POST["txtusu_codigo"];
			$par_hojavida = $_POST["txt_hojavida"];
			$par_nacionalidad = $_POST["txt_nacionalidad"];
			$par_sitioweb = $_POST["txt_sitoweb"];
			try{
				Modulo_Pais::Guardar($tpar_codigo, $usu_codigo, $par_hojavida, $par_nacionalidad, $par_sitioweb);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$par_codigo = $_POST["txt_codigo"];
			$tpar_codigo = $_POST["txttpar_codigo"];
			$usu_codigo = $_POST["txtusu_codigo"];
			$par_hojavida = $_POST["txt_hojavida"];
			$par_nacionalidad = $_POST["txt_nacionalidad"];
			$par_sitioweb = $_POST["txt_sitoweb"];
			try{
				Modulo_Pais::Modificar($par_codigo, $usu_codigo, $par_hojavida, $par_nacionalidad, $par_sitioweb);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'E':
			$par_codigo = $_POST["txt_codigo"];
			try{
				Modulo_Pais::Eliminar($par_codigo);
				echo "Elimino con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
