<?php
    session_start();
    $tittle="Gestor de correo electrónico";
    $error = isset($_SESSION['error'])?$_SESSION['error']:null;
    $success = isset($_SESSION['success'])?$_SESSION['success']:null
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
    <main class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-header h2">Completa el formulario</div>
                    <div class="card-body">
                        <?php if($error != null): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                                <?php unset($_SESSION['error']);?>
                            </div>
                        <?php endif; ?>
                        <?php if($success != null): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $success ?>
                                <?php unset($_SESSION['success']);?>
                            </div>
                        <?php endif; ?>

                        <form action="process3.php" method="post">
                            <div class="mb-3">
                                <label for="correo" class="form-label">correo electrónico</label>
                                <input type="email" class="form-control" name="correo">
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto del correo</label>
                                <input type="text" class="form-control" name="asunto">
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Cuerpo del correo</label>
                                <textarea name="mensaje" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form> 
                    </div>              
                </div> 
            </div>
        </div>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
