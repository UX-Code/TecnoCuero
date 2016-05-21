<?php

class Modulo_Acceso{

  function Guardar($usu_codigo, $per_codigo, $acc_clave, $acc_estado){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "INSERT INTO mod_acceso (usu_codigo, per_codigo, acc_clave, acc_estado) VALUES (?,?,?,?,?)";

      $query = $pdo->prepare($sql);
  		$query->execute(array($usu_codigo, $per_codigo, $acc_clave, $acc_estado));
  		ConexionBD::CerrarBD();
  }

  function Modificar_Perfil($usu_codigo, $per_codigo){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_acceso SET per_codigo = ? WHERE $usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($per_codigo, $usu_codigo));
      ConexionBD::CerrarBD();
  }

  function Modificar_Clave($usu_codigo, $acc_clave){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_acceso SET acc_clave = ? WHERE $usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($acc_clave, $usu_codigo));
      ConexionBD::CerrarBD();
  }

  function Modificar_Estado($usu_codigo, $acc_estado){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_acceso SET acc_estado = ? WHERE $usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($acc_estado, $usu_codigo));
      ConexionBD::CerrarBD();
  }

  function Ultimo_Acceso($usu_codigo){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      date_default_timezone_set('America/Bogota');
      $fecha_hoy = date("Y-m-d");

      $sql = "UPDATE mod_acceso SET acc_ultimo_acceso = ? WHERE $usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($fecha_hoy, $usu_codigo));
      ConexionBD::CerrarBD();
  }

	function Consultar_Accesos(){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_acceso ";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($per_codigo));

  		$result = $query->fetchALL(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

  function Consultar_AccesoUsuario($usu_codigo){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_acceso ";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($per_codigo));

  		$result = $query->fetch(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

  }
?>
