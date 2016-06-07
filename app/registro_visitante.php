<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="views/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="views/assets/font-awesome/css/font-awesome.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="views/assets/main.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8"/>
    <script type="text/javascript" src="views/assets/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="views/assets/materialize/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
          $('select').material_select();
        });
    </script>
  </head>

  <body>
    <nav class="blue-grey darken-4">
      <img src="views/assets/Images/LogoSISCOAD.png">
      <ul>
        <a href="#" class="active"><li class="active"><i class="fa fa-users"></i>Gestionar Visitantes</li></a>
      </ul>
    </nav>

    <section>
        <div class="container-fluid ">
          <div class="row lime">
            <div class="col l12">
              <h1 class="white-text">GESTIONAR VISITANTES</h1>
            </div>
          </div>

          <div class="row">
            <form action="" method="post">
              <div class="col l7 offset-l1">
                <div class="col l12 blue-grey lighten-5 notice">
                  <p> <strong> Paso 1. </strong> Registrar los datos de identificación del visitante. <br> Importante: Verificar el número de identificación antes de guardar</p>
                </div>

                <div class="input-field col s6">
                 <select name="usu_tipoidentidad">
                   <option value="" disabled selected>Selecciona una opción</option>
                   <option value="CC">Cedula de Ciudadanía</option>
                   <option value="TI">Tarjeta de Identidad</option>
                 </select>
                 <label>Tipo de Documento</label>
                </div>

                <div class="input-field col s6">
                  <input id="usu_tipoidentidad" type="text" class="validate">
                  <label for="usu_codigo">Número de Documento</label>
                </div>
              </div>

              <div class="col l3">
                <a class="waves-effect waves-light btn btn-large cyan accent-4"><i class="fa fa-floppy-o"></i> Registrar Visitante</a>
              </div>
            </form>
          </div>
        </div>
    </section>


  </body>
</html>
