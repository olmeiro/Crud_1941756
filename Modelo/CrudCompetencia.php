<?php
  //require_once('../conexion.php');
  require_once('../conexionProfe.php');
  require_once('../Modelo/Competencia.php');

  class CrudCompetencia
  {
    public function __construct(){}

    public function InsertarCompetencia($Competencia) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Insert = $Db->prepare('INSERT INTO competencia VALUES(:CodigoCompetencia, :NombreCompetencia)');
        $Insert->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
        $Insert->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());

        try
        {
          $Insert->execute();//ejecutar el INSERT
          echo "Registro exitoso";
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }

    //Listar todos los registros de la tabla:
    public function ListarCompetencias()
    {
      //echo "listar competencias";
      $Db = Db::Conectar();
      $ListaCompetencias = [];
      $Sql = $Db->query('SELECT * FROM competencia');
      $Sql->execute();
      foreach($Sql->fetchAll() as $Competencia)
      {
        $MyCompetencia = new Competencia();
        // echo $Competencia['CodigoCompetencia'].".....".$Competencia['NombreCompetencia'];
        $MyCompetencia -> setCodigoCompetencia($Competencia['CodigoCompetencia']);
        $MyCompetencia -> setNombreCompetencia($Competencia['NombreCompetencia']);
        $ListaCompetencias[] = $MyCompetencia;
      }
      return $ListaCompetencias;
    }

    public function ObtenerCompetencia ($CodigoCompetencia)
    {
      //Código para obtener una competencia:
        $Db = Db::Conectar();
        $Sql = $Db->prepare('SELECT * FROM  competencia WHERE CodigoCompetencia =:CodigoCompetencia'); //aca agrego mas campo si quiero buscar por mas campos luego el bind value
        $Sql->bindValue('CodigoCompetencia',$CodigoCompetencia); //evita la inyeccion SQL
        $MyCompetencia = new Competencia();
        try
        {
          $Sql -> execute();//ejecutar el UPDATE
          $Competencia = $Sql -> fetch();//se lleva el array obtenido en $Compentencia luego de realizar el sql
          $MyCompetencia -> setCodigoCompetencia($Competencia['CodigoCompetencia']);
          $MyCompetencia-> setNombreCompetencia($Competencia['NombreCompetencia']);
          //echo "Registro exitoso";
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la MODIFICACION.
          die();
        }
        return $MyCompetencia;
    }

    public function ModificarCompetencia($Competencia) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('UPDATE competencia SET NombreCompetencia=:NombreCompetencia WHERE CodigoCompetencia=:CodigoCompetencia');//para usar bindvalue para evitar sqlInjection
        $Sql->bindValue('CodigoCompetencia',$Competencia->getCodigoCompetencia());
        $Sql->bindValue('NombreCompetencia',$Competencia->getNombreCompetencia());

        try
        {
          $Sql->execute();//ejecutar el UPDATE
          echo "Modificación exitosa";
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }

    public function EliminarCompetencia($CodigoCompetencia) //Se recibe objeto Competencia
    {
        $Db = Db::Conectar(); //Conectar a BBDD revisar conexion
        //Definir la insercion a realizar.
        $Sql = $Db->prepare('DELETE FROM competencia WHERE CodigoCompetencia=:CodigoCompetencia');//para usar bindvalue para evitar sqlInjection
        $Sql->bindValue('CodigoCompetencia',$CodigoCompetencia);
        try
        {
          $Sql->execute();//ejecutar el DELETE
          echo "Eliminación éxitosa";
        }
        catch(Exception $e)
        {
          echo $e->getMessage();//Mostrar errores en la insercion.
          die();
        }
    }
  }
 ?>
