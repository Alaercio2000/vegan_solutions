<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script defer src="https://kit.fontawesome.com/c9300953f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/loginProfissional.css">

</head>
<body>
    <header>
        <div class="container p-3 text-center">

            <img src="../../assets/img/img-login/logoLogin.png" alt="logo" width="200px">

        </div>
    </header>

    <main class="container text-center">

        <form action="" method="POST" class="row">

            <div class="row px-5 mb-3 d-flex align-items-center col-lg-5 col-md-8 col-sm-10 inner-div-form">

                <div class="col-lg-12">
                    <h3>Acesso Profissional</h3>
                    <h6>Não possui uma conta? <a href="cadastro.php">Registre-se</a></h6>
                </div>

                <div class="form-group col-lg-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group col-lg-12">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>

                <div class="col-lg-12">
                    <p><a href="">Esqueceu sua senha?</a></p> 
        
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

            </div>


        </form>

    </main>
    
    <footer></footer>
</body>
</html>