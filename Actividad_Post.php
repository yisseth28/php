<?php
    $tittle="Calculadora Básica"
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
            <form action="process.php" method="post">
                <div class="mb-3">
                    <h4>Ingresa 2 números</h4>
                </div>
                <div class="row">
                    <div class="col-2">
                        <input type="number" class="form-control" name="num1" placeholder="Ingrese número">
                    </div>
                    <div class="col-1">
                        <select name="operador" class="form-control" >
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">x</option>
                            <option value="/">/</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <input type="number" class="form-control" name="num2" placeholder="Ingrese número" >
                    </div>
                </div>
                <div class="mt-3" >
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
                <div>
                    <?php 
                        if(isset($_REQUEST['result'])){
                            echo "<p style=color:green>El resultado de la operación es ". ($_REQUEST['result']);
                        }
                    ?>
                </div>
                <?php
                    if(isset($_REQUEST['error']) && $_REQUEST['error']==1){
                        echo "<p style=color:red>Los datos para la operación se encuentran incompletos</p>";
                        die();
                    }else if(isset($_REQUEST['error']) && $_REQUEST['error']==2){
                        echo "<p style=color:red>El operador ingresado, no es un operador válido</p>";
                        die();
                    }else if (isset($_REQUEST['error']) && $_REQUEST['error']==3){
                        echo "<p style=color:red>Error. No es posible dividir entre 0 </p>";
                        die();
                    }
                ?>
            </form>
        </main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>