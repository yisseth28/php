<?php
session_start();
//Iniciar las variables
$min=1;
$max=20;
$number=0;
if (isset($_SESSION['numbers'])){
    $numbers=$_SESSION['numbers'];
}else{
    $numbers=array();
}

//Generar el número aleatorio
$number=mt_rand($min,$max);

//En caso que ya se haya generado el número aleatorio, generar otro
do{
    ($number=mt_rand($min,$max));
} while (in_array($number,$numbers));

//Agregar el número nuevo a la variable de sesion
$numbers[]= $number;
$_SESSION['numbers']=$numbers;

//Regresamos a pantalla principal
header('location:ejercicio_random.php');

?>