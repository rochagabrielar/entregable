<?php

// require_once 'autoload.php';

function CalculaAntiguedad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}

 ?>
