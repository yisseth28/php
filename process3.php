<?php
    session_start();
    try{
        $data=$_REQUEST;
        $correo=trim($data['correo']);
        $asunto=trim($data['asunto']);
        $mensaje=trim($data['mensaje']);
        if(empty($correo) || empty($asunto) || empty($mensaje)){
            throw new Exception("Hacen falta datos, verifique");
        }
        

    //Validar el correo electrónico
        if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
            throw new Exception("El correo no es válido");
        }
    //Validar el asunto (cantidad de caracteres)
        if(strlen($asunto)<5){
            throw new Exception ("El asunto del correo, es demasiado corto");
        }
    // Validar el mensaje
        if(strlen($mensaje)<5){
            throw new Exception ("El mensaje del correo, es demasiado corta");
        }
    // cabeceras
        $cabeceras=  "MIME-Version:1.0\r\n";
        $cabeceras.= "content-type: text/html; charset=UTF-8\r\n";
        $cabeceras.= "From= AndreaZ<yisseth28@hotmail.com>\r\n";
    
    //Plantilla html
    $mensaje=wordwrap($mensaje, 50, "<br>");
    $html="
        <h3>Nuevo mensaje</h3>
        <p><strong>Asunto:</strong>$asunto</p>
        <p><strong>Mensaje:</strong>$mensaje>/p>
        <br><br><br>
        <p>Firma</p>
    ";
    //Enviamos el correo
    if (!mail($correo, $asunto, $html, $cabeceras)) {
        throw new Exception ("Correo no enviado, hubo un problema al enviar el correo, intentalo nuevamente");
    };

    $_SESSION['success']="Se envió el correo exitosamente";
    header('location:gestor_correo.php');

    } catch (\throwable $th){
        $_SESSION['error']= $th->getMessage();
        header('location:gestor_correo.php');
    }
    
?>