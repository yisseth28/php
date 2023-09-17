<?php
session_start();
//Variables para generar el password
$caracteres='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$caracteresEspeciales='#$%"@&!';
$length=10;
$passwd='';

//Ciclo para generar el password
for($i=0; $i<$length; $i++){
    $num =mt_rand(0,strlen($caracteres)-1); //Sólo se obtiene un número aleatorio
    $passw .=$caracteres[$num]; 
}
$_SESSION['passw']= str_shuffle($passw. $caracteresEspeciales);
header("location:generador_cont.php");
?>