<?php
require_once('../Modelo/Competencia.php');
require_once('../Modelo/CrudCompetencia.php'); //incluir el modelo CrudCompetencia

$CrudCompetencia = new CrudCompetencia(); //crear un objeto CrudCompetencia
$ListaCompetencias = $CrudCompetencia->ListarCompetencias(); //llamado almetodo listar competencias
//var_dump($ListaCompetencias);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listar</title>
   </head>
   <body>
     <h1 align="center">Listado De Competencias</h1>
     <table align="center" border="1">
       <thead>
         <tr>
           <th>Código Competencia</th>
           <th>Nombre Competencia</th>
           <th>Acciones</th>
         </tr>
       </thead>
       <tbody>
         <?php
          foreach ($ListaCompetencias as $Competencia) {
            // code...
            ?>
            <tr>
              <td>
                <?php echo $Competencia->getCodigoCompetencia(); ?>
              </td>
              <td>
                <?php echo $Competencia->getNombreCompetencia(); ?>
              </td>
              <td>
                <a href="EditarCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>">Editar</a>
                <a href="../Controlador/ControladorCompetencia.php?CodigoCompetencia=<?php echo $Competencia->getCodigoCompetencia(); ?>&Accion=EliminarCompetencia">Eliminar</a>
                <!-- <?php echo $Competencia->getNombreCompetencia() ?> -->
              </td>
            </tr>
            <?php
          }
          ?>
       </tbody>
     </table>
   </body>
 </html>
