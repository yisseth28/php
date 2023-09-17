<?php
    session_start();
    $tittle="Generador de contraseñas";
    $passw= isset ($_SESSION['passw']) ? $_SESSION['passw']:[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $tittle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <header>
        <h1 class= "border-bottom" ><?php echo $tittle ?> </h1>
    </header>
    <main>
        <form action="generador.php" method='post'>
            <div class="mb-3">
                <p>Genera tu contraseña</p>
            </div>
            <div class="btn btn-success"> Generar Ahora </div>
        </form>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




</div>
            
</body>
</html>