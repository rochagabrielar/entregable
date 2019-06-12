<?php

// declaro variables para tomar los atributos de cada instancia de la clase
// Los atributos son privada para protegerlos- encapsulamiento

class Alumno {
private $intCodigo_Alum;
private $strNombreAlum;
private $strApellidoAlum;

// constructor con los atributos básicos, el codigo es auto incremental
  public function __construct(integer $suCodigo, string $suNombre, $suApelido)
    {
      $this->intCodigo_Alum= $suCodigo;
      $this->strNombreAlum= $suNombre;
      $this->strApellidoAlum= $suApellido;
    }
// getters
    public function getCodigo()
      {
        return $this->intCodigo_Alum;
      }

     public function getNombre()
       {
         return $this->strNombreAlum;
       }

     public function getApellido()
       {
         return $this->strApellidoAlum;
       }

// setters
    public function setCodigo(integer $valor)
      {
        $this->intCodigo_Alum = $valor;
      }

    public function setNombre(string $valor)
      {
        $this->strNombreAlum = $valor;
      }

      public function setApellido(string $valor)
  		{
  			$this->strApellidoAlum = $valor;
  		}

}

 ?>
