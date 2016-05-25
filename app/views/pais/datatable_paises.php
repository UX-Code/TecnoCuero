<?php
 require_once("conexion.php");
 require_once("../../model/pais.class.php");
$usuarios = Gestion_Usuarios::ConsultarTodo();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
    	$('#datatable').DataTable({
    		"language":{
    			"url": "https://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
    		}
    	});
	});
	</script>
</head>
<body>

	<h1>GESTION USUARIO</h1>

	<a href="nuevo_usuario.php">Nuevo Usuario</a>

	<table id="datatable">
		<thead>
			<tr>
				<td>Item</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Acciones</td>
			</tr>
		</thead>

		<tbody>
			<?php
				$item = 1;
				foreach ($usuarios as $row) {
					echo "	<tr>
								<td>".$item."</td>
								<td>".$row["usu_nom"]."</td>
								<td>".$row["usu_ape"]."</td>
								<td>
									<a href='modifico_usuario.php?codigo_usuario=".$row["usu_cod"]."'>Modificar </a> -
									<a href=''>Eliminar</a>
								</td>
							</tr>";
					$item++;
				}
			?>
		</tbody>
	</table>
</body>
</html> 
