<?php
	require_once("conexion.php");
	require_once("usuarios.class.php");
	$accion = $_REQUEST["action"];
	switch ($accion) {
		case 'C':
			$usu_nom = $_POST["txt_nombre"];
			$usu_ape = $_POST["txt_apellido"];
			try{
				Gestion_Usuarios::Guardar($usu_nom, $usu_ape);
				echo "Guardo con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
		case 'U':
			$usu_cod = $_POST["txt_codigo"];
			$usu_nom = $_POST["txt_nombre"];
			$usu_ape = $_POST["txt_apellido"];
			try{
				Gestion_Usuarios::Modificar($usu_cod, $usu_nom, $usu_ape);
				echo "Modifico con exito!";
			}catch(Exception $e){
				echo $e;
			}
		break;
	}
	header("Location: index.php");
?>
