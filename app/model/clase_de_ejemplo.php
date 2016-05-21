<?php
class Gestion_Usuarios{
	function Guardar($usu_nom, $usu_ape){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO usuarios (usu_nom, usu_ape) VALUES (?,?)";
		$query = $pdo->prepare($sql);
		$query->execute(array($usu_nom, $usu_ape));
		ConexionBD::CerrarBD();
	}
	function ConsultarTodo(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM usuarios ORDER BY usu_nom";
		$query = $pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
	function ConsultarporCodigo($codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM usuarios WHERE usu_cod = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($codigo));
		$result = $query->fetch(PDO::FETCH_BOTH);
		ConexionBD::CerrarBD();
		return $result;
	}
		function Modificar($usu_cod, $usu_nom, $usu_ape){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE usuarios SET usu_nom = ?, usu_ape = ? WHERE usu_cod = ?";
		$query = $pdo->prepare($sql);
		$query->execute(array($usu_nom, $usu_ape, $usu_cod));
		ConexionBD::CerrarBD();
	}
}
?> 
