<?php
//Convertir a texto los meses del año en base a lo que da la función date('m')
$meses_anio=date('m');
switch($meses_anio){
   case '01':
        echo 'Estamos en el mes es Enero';
    break;
    case '02':
        echo 'Estamos en el mes es Febrero';
    break;
    case '03':
        echo 'Estamos en el mes de Marzo';
    break;
    case '04':
        echo 'Estamos en el mes de Abril';
    break;
    case '05';
        echo 'Estamos en el mes de Mayo';
    break;
    case '06':
        echo 'Estamos en el nes de Junio';
    break;
    case '07':
        echo 'Estamos en el mes de Julio';
    break;
    case '08':
        echo 'Estamos en el mes de Agosto';
    break;
    case '09':
        echo 'Estamos en el mes de Septiembre';
    break;
    case '10':
        echo 'Estamos en el mes de Octubre';
    break;
    case '11':
        echo 'Estamos en el mes de Noviembre';
    break;
    case '12':
        echo 'Estamos en el mes de Diciembre';
    break;
}
?>