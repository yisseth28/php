<?php
$data=$_REQUEST;
if(isset($data['remember'])){ //Si existe remember
    //Se almacenan las cookies
    setcookie('user', $data['user'],time()+60*60*24*365);
    setcookie('password', $data['password'],time()+60*60*24*365);
}else{
    if(isset($_COOKIE['user'])){
      //Se elimina la cookie que guarda los datos del usuario
      setcookie('user',null,time()-60);
      setcookie('password', null, time()-60);
    }
}
header("location: cookies.php")
?>