<?php

class Modulo_Perfiles{

  function Guardar($per_codigo, $per_nombre, $per_descripcion){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "INSERT INTO mod_perfiles VALUES (?,?,?)";

      $query = $pdo->prepare($sql);
  		$query->execute(array($per_codigo, $per_nombre, $per_descripcion));
  		ConexionBD::CerrarBD();
  }

  function Modificar($per_codigo, $per_nombre, $per_descripcion){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_usuarios SET per_nombre = ?, per_descripcion = ? WHERE $per_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($per_nombre, $per_descripcion, $per_codigo));
      ConexionBD::CerrarBD();
  }

  function Eliminar($per_codigo){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "DELETE FROM mod_perfiles WHERE $per_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($per_codigo));
      ConexionBD::CerrarBD();
  }

	function Consultar_Codigo($per_codigo){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_perfiles WHERE per_codigo = ?";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($per_codigo));

  		$result = $query->fetch(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

  }
?>
