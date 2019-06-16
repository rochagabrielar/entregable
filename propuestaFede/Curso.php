<?php

// require_once profesor.php;
  // require_once 'autoload.php';

  class Curso {
  private $intCodigo_Curso;
  private $strNombreCurso;
  private $intMax;
  private $intcantidad;
  private $listaAlumnos = [];

// constructor
  public function __construct(integer $suCodigo, string $suNombre)
    {
      $this->intCodigo_Curso= $suCodigo;
      $this->strNombreCurso= $suNombre;
      $this->strmax= $suMax;
      $this->intCantidad= $suCantidad;
    }
// getters
  public function getCodigo()
    {
      return $this->$intCodigo_Curso;
    }

  public function getNombre()
    {
      return $this->strNombreCurso;
    }

  public function getMax()
    {
     return $this->intMax;
    }

  public function getCantidad()
    {
      return $this->intCantidad;
    }

  public function getProfesor()
    {
      return $this->Profesor[];
    }
// setters
  public function setCodigo(string $valor)
    {
      $this->$intCodigo_Curso = $valor;
    }

  public function setNombre(string $valor)
    {
      $this->strNombreCurso = $valor;
    }

  public function setMax($valor)
    {
      $this->intMax = $valor;
    }

  public function setCantidadAlumnos(integer $intMax, $valor)
    {
      if $valor > $intMax ) {

        return 'La cantidad de alumnos supera el valor máximo';
      }
      $this->intMax = $valor;
    }
// Metodo que permite agregar un alumno a la listaAlumnos
    public function agregarUnAlumno(Alumno $unAlumno)
    {
      if (count($this->getListaAlumnos()) < $this->getMax()) {
        array_push($this->listaAlumnos, $unAlumno);
        return true;
      } else {
        return false;
      }
    }


}

 ?>
