<?php

class Modulo_Usuarios{

  function Guardar_Usuario($usu_codigo, $usu_tipoidentidad, $usu_estado, $usu_fecharegistro){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "INSERT INTO mod_usuarios VALUES (?,?,?,?)";

      $query = $pdo->prepare($sql);
  		$query->execute(array($usu_codigo, $usu_tipoidentidad, $usu_estado, $usu_fecharegistro));
  		ConexionBD::CerrarBD();
  }

  function Guardar_DatosBasicos($usu_codigo, $usu_nombre, $usu_apellidop, $usu_apellidom, $usu_telefono, $usu_correo, $usu_genero, $usu_estrato, $usu_paisresidencia, $usu_municipioresidencia, $usu_ciudadresidencia){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO mod_usuarios VALUES (?,?,?,?,?,?,?,?,?,?,?)";

      $query = $pdo->prepare($sql);
      $query->execute(array($usu_codigo, $usu_nombre, $usu_apellidop, $usu_apellidom, $usu_telefono, $usu_correo, $usu_genero, $usu_estrato, $usu_paisresidencia, $usu_municipioresidencia, $usu_ciudadresidencia));
      ConexionBD::CerrarBD();
  }

  function Guardar_DetalleDatos($usu_codigo, $usu_fechanacimiento, $usu_paisnacimiento, $usu_municipionacimiento, $ciudadnacimiento, $usu_fechaexp_doc, $usu_paisexp_doc, $usu_munexp_doc, $usu_ciuexp_doc){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO mod_usuarios VALUES (?,?,?,?,?,?,?,?)";

      $query = $pdo->prepare($sql);
      $query->execute(array($usu_codigo, $usu_fechanacimiento, $usu_paisnacimiento, $usu_municipionacimiento, $ciudadnacimiento, $usu_fechaexp_doc, $usu_paisexp_doc, $usu_munexp_doc, $usu_ciuexp_doc));
      ConexionBD::CerrarBD();
  }

  // Falta modificar datos basicos de la tabla usuarios_datosbasico asociada con el estado del usuario.

  // Esta consulta se debe hacer un inner join trayendo todos los campos del usuario
  	function Consultar_Codigo($usu_codigo){
  		$pdo = ConexionBD::AbrirBD();
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$sql = "SELECT * FROM mod_usuarios WHERE usu_codigo = ?";

  		$query = $pdo->prepare($sql);
  		$query->execute(array($usu_codigo));

  		$result = $query->fetch(PDO::FETCH_BOTH);

  		ConexionBD::CerrarBD();
  		return $result;
  	}

    function Consultar_DatosBasicos($usu_codigo){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT * FROM usuarios_datosbasico WHERE usu_codigo = ?";

      $query = $pdo->prepare($sql);
      $query->execute(array($usu_codigo));

      $result = $query->fetch(PDO::FETCH_BOTH);

      ConexionBD::CerrarBD();
      return $result;
    }

  }
?>
