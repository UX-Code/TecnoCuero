<?php
 require_once("conexion.php");
 require_once("usuarios.class.php");
 $usuario = Gestion_Usuarios::ConsultarporCodigo($_GET["codigo_usuario"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>MODIFICAR USUARIO</h1>
	<form action="usuarios.controller.php" method="POST">
		<label>Codigo Usuario: <?php echo $usuario["usu_cod"]; ?></label>
		<input type="hidden" name="txt_codigo" readonly value="<?php echo $usuario["usu_cod"]; ?>"><br>

		<label>Tu nombre</label>
		<input type="text" name="txt_nombre" required value="<?php echo $usuario["usu_nom"]; ?>"><br>

		<label>tu apellido</label>
		<input type="text" name="txt_apellido" required value="<?php echo $usuario["usu_ape"]; ?>"><br>

		<button name="action" value="U">Modificar</button>
	</form>
</body>
</html> 
