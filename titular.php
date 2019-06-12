<?php
	require_once 'profesor.php';

	class Titular extends Profesor {
		protected $especialidad;

		public function __construct($suNombre, $suApellido, $suCodigo, $suFechaIngreso, $suEspecialidad)
		{
			parent::__construct($suNombre, $suApellido, $suCodigo, $suFechaIngreso);
			$this->especialidad = $suEspecialidad;
		}

		public function setEspecialidad($suEspecialidad)
		{
			$this->especialidad = $suEspecialidad;
		}

		public function getEspecialidad()
		{
			return $this->especialidad;
		}

	}
