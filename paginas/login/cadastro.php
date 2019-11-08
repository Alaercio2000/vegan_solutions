<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre-se!</title>
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
    <link rel="stylesheet" href="../../assets/css/cadastroProfissional.css">
</head>
<body>
    <header>
        <div class="container p-3 text-center">

            <img src="../../assets/img/img-login/logoLogin.png" alt="logo" width="200px">

        </div>
    </header>

    <main class="container text-center">

        <form action="" method="POST" class="row">

            <div class="row my-3 inner-div-form-profissional col-lg-9">

                <div class="col-12">
                    <h3>Cadastro Profissional</h3>
                </div>

                <div class="col-12">
                    <h5>Dados de acesso</h5>
                </div>

                <div class="form-group col-lg-12">
                    <label for="nome">Usuário</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder=" ">
                </div>

                <div class="form-group col-lg-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>

                <div class="form-group col-lg-6">
                    <label for="confirmarSenha">Confirmar senha</label>
                    <input type="password" class="form-control" name="confirmarSenha" id="confirmarSenha">
                </div>

                <hr>

                <div class="col-lg-12">
                    <h5>Dados de contato</h5>
                </div>

                <div class="form-group col-lg-6">
                    <label for="nome">Pessoa de contato</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder=" ">
                </div>

                <div class="form-group col-lg-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group col-lg-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder=" ">
                </div>

                <div class="form-group col-lg-6">
                    <label for="celular">Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular" placeholder=" ">
                </div>

                <div class="form-group col-lg-12">
                    <label for="site">Site</label>
                    <input type="text" class="form-control" name="site" id="site" placeholder=" ">
                </div>

                <hr>

                <div class="col-lg-12">
                    <h5>Sua empresa</h5>
                </div>

                <div class="form-group col-lg-10">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder=" ">
                </div>

                <div class="form-group col-lg-2">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" name="numero" id="numero" placeholder=" ">
                </div>

                <div class="form-group col-lg-6">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder=" ">
                </div>

                <div class="form-group col-lg-3">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder=" ">
                </div>

                <div class="form-group col-lg-3">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder=" ">
                </div>

                <div class="form-group col-lg-2">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" id="estado" placeholder=" ">
                </div>

                <div class="form-group col-lg-5">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" name="pais" id="pais" placeholder=" ">
                </div>

                <div class="form-group col-lg-5">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder=" ">
                </div>

                <div class="form-group col-lg-12">
                    <label for="nomeEmpresa">Nome da sua empresa</label>
                    <input type="text" class="form-control" name="nomeEmpresa" id="nomeEmpresa" placeholder=" ">
                </div>

                <div class="form-group col-lg-12">
                    <label for="suaEmpresa">Descreva sua empresa</label>
                    <textarea id="suaEmpresa" name="suaEmpresa" class="form-control"></textarea>
                </div>

                <div class="col-lg-12">
                    <h5>Setor de atividade</h5>
                </div>

                <div class="form-check col-lg-3 my-3">
                    <input class="form-check-input" type="radio" name="setor" id="nutricao" value="nutricao">
                    <label class="form-check-label" for="nutricao">
                        Nutrição
                    </label>
                </div>
                <div class="form-check col-lg-3 my-3">
                    <input class="form-check-input" type="radio" name="setor" id="gastronomia" value="gastronomia">
                    <label class="form-check-label" for="gastronomia">
                        Gastronomia
                    </label>
                </div>

                <div class="col-lg-12">
                    
                    <button type="submit" class="btn btn-primary">Criar conta</button>
        
                    <p>Já tem uma conta? <a href="login.php">Entrar</a></p>

                </div>

            </div>
        </form>
    </main>

    <?php include('modals.php') ?>
    
    <footer></footer>
</body>
</html>