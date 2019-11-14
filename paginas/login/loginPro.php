<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veganices</title>
    <link rel="stylesheet" href="/veganices/assets/css/bootstrap/coresBootstrap.min.css">
    <link rel="stylesheet" href="/veganices/paginas/login/assets/css/forms.css">
    <link rel="stylesheet" href="/veganices/paginas/login/assets/css/modal.css">
</head>

<body>
<?php include '../header/header.php'; ?>

<main class="container text-center">

    <form action="" method="POST" class="row">

        <div class="row px-5 mb-3 d-flex align-items-center col-lg-5 col-md-8 col-sm-10 inner-div-form">

            <div class="col-lg-12">
                <h3>Acesso Profissional</h3>
                <h6>Não possui uma conta? <a href="cadastroPro.php">Registre-se</a></h6>
            </div>

            <div class="form-group col-lg-12 my-3">
                <input type="email" class="form-control text-center" name="email" id="email" placeholder="E-mail">
            </div>

            <div class="form-group col-lg-12 my-3">
                <input type="password" class="form-control text-center" name="senha" id="senha" placeholder="Senha">
            </div>

            <div class="col-lg-12 my-3">
                <p><a href="">Esqueceu sua senha?</a></p> 
    
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>

        </div>


    </form>

</main>
<div class="fixed-bottom">
<?php include '../footer/footer.php'; ?>
</div>