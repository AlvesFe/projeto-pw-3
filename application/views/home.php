<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/extra.css')?>">

    <title>Atividade PWII</title>
</head>

<body class="bg-dark">

        <div class="jumbotron col-8 mx-auto my-8">

            <div class="text-center">
                <h1 class="display-4">Seja bem-vindo ao sistema!</h1>
                <h4 class="font-weight-normal mt-3">Para acessar as funcionalidades faça o login ou cadastro abaixo</h4>
            </div>

            <div class="mt-5 mx-auto col-3">
                <a href="<?php echo base_url('index.php/welcome/login')?>" class="btn btn-primary text-center d-block p-3">Login/Cadastro</a>
            </div>

        </div>

    <script src="./javascript/jquery.js"></script>
    <script src="./javascript/bootstrap.bundle.js"></script>
</body>

</html>