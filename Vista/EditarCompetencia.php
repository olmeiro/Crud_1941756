<?php
  require_once('../Modelo/Competencia.php');
  require_once('../Modelo/CrudCompetencia.php');

  $CrudCompetencia = new CrudCompetencia(); //Crear un objeto tipo CrudCompetencia
  $Competencia = $CrudCompetencia::ObtenerCompetencia($_GET["CodigoCompetencia"]);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
  </head>
  <body>
    <h1 align="center">Competencia</h1>
    <form class="" action="../Controlador/ControladorCompetencia.php" method="post">
      Código Competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia"
      value="<?php echo $Competencia->getCodigoCompetencia();?>">
      <br>
      Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia"
      value="<?php echo $Competencia->getNombreCompetencia(); ?>">
      <br>
      <input type="hidden" name="Modificar" id="Modificar" value="">
      <!-- //hidden para identificar que vista realiza la peticion -->
      <button type="submit" name="button">Modificar</button>
    </form>
  </body>
</html>
