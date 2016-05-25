<?php

class Modulo_Participante{

  function Guardar($tpar_codigo,$usu_codigo,$par_hojavida,$par_nacionalidad,$par_sitioweb){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "INSERT INTO mod_participante VALUES (?,?,?,?,?)";

      $query = $pdo->prepare($sql);
  		$query->execute(array($tpar_codigo,$usu_codigo,$par_hojavida,$par_nacionalidad,$par_sitioweb));
  		ConexionBD::CerrarBD();
  }

  function Modificar($par_codigo,$tpar_codigo,$usu_codigo,$par_hojavida,$par_nacionalidad,$par_sitioweb){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_usuarios SET tpar_codigo = ?, usu_codigo = ?,par_hojavida = ?, par_nacionalidad = ?, par_sitioweb = ?   WHERE $par_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($tpar_codigo,$usu_codigo,$par_hojavida,$par_nacionalidad,$par_sitioweb,$par_codigo));
      ConexionBD::CerrarBD();
  }

  function Eliminar($par_codigo){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "DELETE FROM mod_participante WHERE par_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($par_codigo));
      ConexionBD::CerrarBD();
  }

	function Consultar_Codigo($per_codigo){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_participante WHERE per_codigo = ?";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($per_codigo));

  		$result = $query->fetch(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

  }
?>
