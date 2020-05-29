<?php
  class Competencia
  {
      //Parámetros de entrada
      private $CodigoCompetencia; //talcual esta en BBDD
      private $NombreCompetencia;

      //definir constructor:
      public function __construct(){}

      //Setter y getters para cada atributo de la clase:

      public function setCodigoCompetencia($CodigoCompetencia)
      {
        $this ->CodigoCompetencia = $CodigoCompetencia;
      }

      public function getCodigoCompetencia()
      {
        return $this -> CodigoCompetencia;
      }

      public function setNombreCompetencia($NombreCompetencia)
      {
        $this ->NombreCompetencia = $NombreCompetencia;
      }

      public function getNombreCompetencia()
      {
        return $this -> NombreCompetencia;
      }

  }

  //testear que la clase y métodos funcionan:

  // $Competencia = new Competencia(); //creo SplObjectStorage
  // $Competencia -> setCodigoCompetencia(27);
  // $Competencia -> setNombreCompetencia('Python');
  // echo "Código competencia: " . $Competencia->getCodigoCompetencia().
  //       " Nombre competencia: " . $Competencia-> getNombreCompetencia();


 ?>
