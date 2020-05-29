<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
  </head>
  <body>
    <h1 align="center">Competencia</h1>
    <form class="" action="../Controlador/ControladorCompetencia.php" method="post">
      Código Competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia" value="">
      <br>
      Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia" value="">
      <br>
      <input type="hidden" name="Registrar" id="Registrar" value="">
      <!-- //hidden para identificar que vista realiza la peticion -->
      <button type="submit" name="button">Registrar</button>
    </form>
  </body>
</html>
