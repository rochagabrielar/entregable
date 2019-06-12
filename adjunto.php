<?php
	require_once 'profesor.php';

	class Adjunto extends Profesor {
		protected $horasCursada;

		public function __construct($suNombre, $suApellido, $suCodigo, $suFechaIngreso, $susHorasCursada)
		{
			parent::__construct($suNombre, $suApellido, $suCodigo, $suFechaIngreso);
			$this->horasCursada = $susHorasCursada;
		}

		public function setHorasCursada($susHorasCursada)
		{
			$this->horasCursada = $susHorasCursada;
		}

		public function getHorasCursada()
		{
			return $this->horasCursada;
		}

	}
