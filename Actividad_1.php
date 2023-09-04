<?php
//Traducir a español los días de la semana en base a lo que dé la función date('l')
    $dia=date('l');
    switch($dia){
        case 'Monday':
            echo "Hoy es Lunes";
        break;
        case 'Tuesday':
            echo "Hoy es Martes";
        break;
        case 'Wednesday':
            echo "Hoy es Miércoles";
        break;
        case 'Thursday':
            echo "Hoy es Jueves";
        break;
        case 'Friday':
            echo "Hoy es viernes :)";
        break;
        case 'Saturday';
            echo "Hoy es Sábado";
        break;
        case 'Sunday';
            echo "Hoy es Domingo";
        break;
    }
?>