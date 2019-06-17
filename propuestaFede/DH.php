<?php
  require_once 'Profesor.php';
  require_once 'Alumno.php';
  require_once 'Curso.php';
  require_once 'DigitalHouseManager.php';
  require_once 'Adjunto.php';
  require_once 'Profesor.php';

  // Creando profesores adjuntos y titulares
  $skynet = new Profesor;
  $deLargue = new Adjunto;
  $saraConnor = new Profesor;
  $frankieFourFingers = new Adjunto;


  $skynet->altaProfesor(023, "Hernando", "Marton", "2012-02-03");
  $saraConnor->altaProfesor(005, "Sara", "Connor", "1985-04-18");
  $deLargue->altaAdjunto("Alex", "DeLargue", 230, "1985-07-25");
  $frankieFourFingers->altaAdjunto("Frankie", "Four Fingers", 098, "2001-04-26");

  // Alta de cursos

  $cursoFullStack->altaCurso("Full Stack", 20001, 3);
  $cursoAndroid->altaCurso("Android", 20002, 2);

  $skynet->asignarProfesor(20002, 023, 005);
  $saraConnor->asignarProfesor(005, "Sara", "Connor", "1985-04-18");
  $deLargue->altaAdjunto("Alex", "DeLargue", 230, "1985-07-25");
  $frankieFourFingers->altaAdjunto("Frankie", "Four Fingers", 098, "2001-04-26");







































?>
