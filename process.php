<?php
//Crear variables
$num1=intval(trim($_REQUEST['num1']));
$num2=intval(trim($_REQUEST['num2']));
$operador=$_REQUEST['operador'];
$operadores=['+','-','*','/'];
$result=0;

//Validar los datos
if(!isset($num1) || !isset($num2)){
 header('location:Actividad_Post.php?error=1');
  die();
}
//Validar el operador
if(!in_array($operador,$operadores)){
    header('location:Actividad_Post.php?error=2');
    die();
}
//Calcular el resultado
switch($operador){
   case "+":
       $result=$num1 + $num2;
       header('location:Actividad_Post.php?result='. $result);
       break;
    case "-":
        $result=$num1 - $num2;
        header('location:Actividad_Post.php?result='. $result);
        break;
    case "*":
        $result=$num1 * $num2;
        header('location:Actividad_Post.php?result='. $result);
        break;
    case "/":
        if($num2 !== 0){
            $result=($num1 / $num2);
            header('location:Actividad_Post.php?result='. $result);
        }elseif ($num2 === 0){
           header('location:Actividad_Post.php?error=3');
        }        
}                
//Regresar a index con el resultado
?>