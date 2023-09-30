<?php
$username=isset($_COOKIE['user'])?$_COOKIE['user']:null;
$password=isset($_COOKIE['password'])?$_COOKIE['password']:null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ddiv, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="process_r.php" method="POST">
            <div>
                <label for="">Usuario</label>
                <input type="text" name="user" value= "<?=$username?>">
            </div>
            <div>
                <label for="">Contraseña</label>
                <input type="password" name="password" value= "<?=$password?>">
            </div>
            <p><input type="checkbox" name="remember" <?= empty($password) ? '' : 'checked' ?> >Recuerdame </p>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>