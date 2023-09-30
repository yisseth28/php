<!DOCTYPE html>
<?php $tittle="Calculadora de calorias";?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tittle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form action="process_calorias.php" method="post">
        <div class="container mt-5">
            <main class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card header h4">Completa el formulario</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <p>Utilizaremos la formula de <strong>Harrys Benedict</strong>, una de las más usadas en todo el mundo</p>
                                    <label>Sexo*</label>
                                    <select name="sexo" name="sexo" class="form-control">
                                        <option value="femenino">Femenino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Tu peso en kilogramos *</label>
                                    <input type="number" name="peso" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tu altura en centímetros *</label>
                                    <input type="number" name="altura" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Tu edad en años *</label>
                                    <input type="number" name="edad" class="form-control">
                                </div>
                                <div class="mb-3 ">
                                    <label>Nivel de actividad *</label>
                                    <select name="actividad" class="form-control">
                                        <option value="sedentario">Sedentario</option>
                                        <option value="ejercicio ligero">Ejercicio ligero</option>
                                        <option value="ejercicio moderado">Ejercicio moderado</option>
                                        <option value="ejercicio intenso">Ejercicio intenso</option>
                                        <option value="ejercicio muy intenso">Ejercicio muy intenso</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Calcular</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card header h4">Resultados </div>
                            <div class="card-body">
                                <?php
                                    if(isset($_REQUEST['error'])){
                                        echo "<p style=color:red>Por favor ingrese los datos solicitados <strong>". ($_REQUEST['error']);
                                    }
                                    if(isset($_REQUEST['result'])){
                                        echo "<p style=color:green>Tus calorías calculadas para mantener peso son: <strong>". ($_REQUEST['result']);                                
                                    }
                                    if(isset($_REQUEST['tasa'])){
                                        echo "<p style=color:green>Tu tasa metabólica basal(TMB) es: <strong>". ($_REQUEST['tasa']);
                                    }
                                    
                                ?>
                            </div>
                        </div>
                    </div>  
                </div> 
            </main>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>