<?php

class Modulo_Visitantes{

  function Guardar($usu_codigo, $even_codigo, $vis_fecha, $vis_hora){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "INSERT INTO mod_visitantes  (even_codigo, vis_fecha, vis_hora, usu_codigo)  VALUES (?,?,?,?)";

      $query = $pdo->prepare($sql);
  		$query->execute(array($usu_codigo, $even_codigo, $vis_fecha, $vis_hora));
  		ConexionBD::CerrarBD();
  }

  function Modificar($usu_codigo, $even_codigo, $vis_fecha, $vis_hora){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE mod_visitantes SET even_codigo = ?, vis_fecha = ?, vis_hora = ? WHERE usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($even_codigo, $vis_fecha, $vis_hora, $usu_codigo));
      ConexionBD::CerrarBD();
  }

 	function Consultar_Visitantes_Evento($even_codigo){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_visitantes WHERE even_codigo = ?";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($even_codigo));

  		$result = $query->fetchALL(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

  }
?>
