<?php
    session_start();
    $tittle="Números Random";
    //Revisar si existen números aleatorios generados
    if (isset($_SESSION['numbers'])){
        $numbers=$_SESSION['numbers'];
    }else{
        $numbers=array();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $tittle ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" >
        <header>
            <h1 class="border-bottom text-info"><?php echo $tittle ?></h1>
        </header>
        <main>
        <?php if(empty($numbers)):?>
            <p>Genera tu primer número</p>
            <a href="process1.php" class="btn btn-success">Generar ahora </a>
        <?php else: ?>
            <p>El número generado es el: </p>
            <p class="h2"> <?php echo end($numbers) ?></p>
            <a href="process1.php" class="btn btn-success">Generar otro</a>
            <a href="restart.php" class='btn btn-danger'> Reiniciar</a>
    <!-- Seccion de números anteriores -->
        <div class="row" mt-5>
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header text-bg-primary">
                        Números anteriores
                    </div>
                    <div class="card-body">
                        <?php foreach(array_reverse($numbers) as $key => $number): ?>
                            <?php if($key == 0): ?>
                                <span class="badge bg-success"><?php echo $number; ?></span>
                            <?php else:?> 
                                <span class="badge bg-primary"><?php echo $number; ?></span>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>

        </main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>