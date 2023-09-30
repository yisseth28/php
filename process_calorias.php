<?php
    //Crear variables
    $sexo=trim($_REQUEST['sexo']);
    $peso=trim($_REQUEST['peso']);
    $altura=trim($_REQUEST['altura']);
    $edad=trim($_REQUEST['edad']);
    $actividad=trim($_REQUEST['actividad']);

    //Validar que exitan los datos
    if (empty($sexo) || empty($peso) || empty($altura) || empty($edad) || empty($actividad)){
        header("location:calculadora_calorias.php?error");
        die();
    }else{
    //Validar TMB según el sexo
        switch ($sexo){
            case "femenino":
                $TMB=(655.1+(9.563*$peso)+(1.850*$altura)-(4.676*$edad));
                header('location:calculadora_calorias.php?tasa='. $TMB);
                break;
            case "masculino":
                $TMB=(66.5+(13.75*$peso)+(5.003*$altura)-(6.755*$edad));
                header('location:calculadora_calorias.php?tasa='. $TMB);
                break;
            default:
                echo "Seleccione un sexo válido";
                break;
        }
        switch ($actividad){
            case "sedentario":
                $calorias=$TMB*1.2;
                header('location:calculadora_calorias.php?result='. $calorias);
                break;
            case "ejercicio ligero":
                $calorias=$TMB*1.375;
                header('location:calculadora_calorias.php?result='. $calorias);
                break;
            case "ejercicio moderado":
                $calorias=$TMB*1.55;
                header('location:calculadora_calorias.php?result='. $calorias);
                break;
            case "ejercicio intenso":
                $calorias=$TMB*1.725;
                header('location:calculadora_calorias.php?result='. $calorias);
                break;
            case "ejercicio muy intenso":
                $calorias=$TMB*1.9;
                header('location:calculadora_calorias.php?result='. $calorias);
                break;
            default:
                echo "Seleccione un tipo de actividad válida";
                break;
        }
         
    }


?>
