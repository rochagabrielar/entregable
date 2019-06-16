<?php

require_once 'antiguedad.php';
// require_once 'autoload.php';

class Profesor {
private $intCodigo_Prof;
private $strNombreProf;
private $strApellidoProf;
public $fechaIngreso;
private $intAntiguedad;


// constructor
  public function __construct(integer $suCodigo, string $suNombre, $suApelido, $suFechaIngreso)
    {
      $this->intCodigo_Prof= $suCodigo;
      $this->strNombreProf= $suNombre;
      $this->strApellidoProf= $suApellido;
      $this->strAntiguedad= CalculaAntiguedad($fechaIngreso);
    }
// getters
      public function getCodigo()
        {
          return $this->$intCodigo_Prof;
        }

     public function getNombre()
       {
         return $this->strNombreProf;
       }

     public function getApellido()
       {
         return $this->strApellidoProf;
       }

// setters
    public function setCodigo(integer $valor)
      {
        $this->$intCodigo_Prof = $valor;
      }
    public function setNombre(string $valor)
      {
        $this->strNombreProf= $valor;
      }

      public function setApellido(string $valor)
  		{
  			$this->strApellidoProf = $valor;
  		}



 ?>
