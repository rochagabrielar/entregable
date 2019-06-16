<?php

  // require_once 'autoload.php';
  require_once 'Alumno.php';

  $alumno = new Alumno(3, 'Federico', 'Portas');

  echo "<pre>";
  var_dump($alumno);
  echo "</pre>";
