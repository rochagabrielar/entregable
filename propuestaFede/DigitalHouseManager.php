<?php
  require_once 'autoload.php';

  class DigitalHouseManager
  {
    protected $listaAlumnos = [];
    protected $listaProfesores = [];
    protected $listaCursos = [];


    // Getters

    public function getListaAlumnos()
    {
      return $this->listaAlumnos;
    }

    public function getListaProfesores()
    {
      return $this->listaProfesores;
    }

    public function getListaCursos()
    {
      return $this->listaCurso;
    }

    // Setters

    public function setListaAlumnos()
    {
      return $this->listaAlumnos = $listaAlumnos;
    }

    public function setListaProfesores()
    {
      return $this->listaProfesores = $listaProfesores;
    }

    public function setListaCursos()
    {
      return $this->listaCurso = $listaCursos;
    }

    // Parte H 1 dar de alta un curso

    public function altaCurso($nombre, $codigoCurso, $cupoMaximoDeAlumnos){
      $nuevoCurso = new Curso($nombre, $codigoCurso, $cupoMaximoDeAlumnos);
      array_push($this->listaCursos, $nuevoCurso);
      return $nuevoCurso;
    }

    // H 2 dar de alta el profesor adjunto

    public function altaAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras){
      $nuevoProfesorAdjunto = new Adjunto($nombre, $apellido, 0, $codigoProfesor, $cantidadDeHoras);
      array_push($this->listaProfesores, $nuevoProfesorAdjunto);
      return $nuevoProfesorAdjunto;
    }

    // H3

    public function altaProfesor($nombre, $apellido, $codigoProfesor, $especialidad){
      $nuevoProfesorTitular = new Profesor($nombre, $apellido, 0, $codigoProfesor, $especialidad);
      array_push($this->listaProfesores, $nuevoProfesorTitular);
      return $nuevoProfesorTitular;
    }

    // H4

    public function altaAlumno($nombre, $apellido, $codigoAlumno){
      $nuevoAlumno = new Alumno($nombre, $apellido, $codigoAlumno);
      array_push($this->listaAlumnos, $nuevoAlumno);
      return $nuevoAlumno;
    }

    // I 1 Tomar el curso al que se quiere inscribir de la lista de cursos.

    public function buscarCurso($codigoCurso){
      foreach ($this->listaCursos as $curso) {
        if ($curso->getCodigoCurso() = $codigoCurso) {
          return $curso;
        }
      }
    }

    // I Tomar al alumno al que se quiere inscribir de a lista de alumnos.

    public function buscarAlumno($codigoAlumno){
      foreach ($this->listaAlumnos as $alumno) {
        if ($alumno->getCodigoAlumno() = $codigoAlumno) {
          return $alumno;
        }
      }
    }

    // I Inscribir al alumno si hay cupo disponible. - Informar por pantalla la inscripción.

    public function inscribirAlumno($codigoAlumno, $codigoCurso){
      $curso = $this->buscarCurso($codigoCurso);
      $alumno = $this->buscarAlumno($codigoAlumno);
      $curso->agregarUnAlumno($alumno);
    }

    // buscar profesor

    public function buscarProfesor($codigoProfesor){
      foreach ($this->listaProfesores as $profesor) {
        if ($profesor->getCodigoProfesor() == $codigoProfesor) {
          return $profesor;
        }
      } else {
        return false;
      }
    }

    // buscar profesor adjunto

    public function buscarAdjunto($codigoAdjutno){
      foreach ($this->listaAdjuntos as $adjunto) {
        if ($adjunto->getCodigoAdjunto() == $codigoAdjutno) {
          return $adjunto;
        }
      } else {
        return false;
      }
    }

    // Asignar profesores

    public function asignarProfesoresACurso($profesor, $adjunto, $curso){
      $curso-> setProfesor($profesor);
      $curso-> setAdjunto($adjunto);
    }











  }




 ?>
