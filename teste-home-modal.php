<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veganices</title>
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/c9300953f9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/coresBootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/modal.css">

</head>

<body>

    <header class="bg-secondary sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 col-md-2">
                    <a class="col" href="home.html"><img class="p-1" height="70" src="img/logo.png" alt="Logo"></a>
                </div>
                <div class="col">
                    <nav class="nav d-flex justify-content-between">
                        <a class="nav-link py-4" href="#">Sobre</a>
                        <a class="nav-link py-4" href="#">Restaurantes</a>
                        <a class="nav-link py-4" href="#">Produtos</a>
                        <a class="nav-link py-4" href="#">Profissionais</a>
                        <a class="nav-link py-4" href="#">Blog</a>
                        <a class="nav-link py-4" href="#">Comunidade</a>
                        <a class="nav-link py-4" href="#">Acesse Registre-se</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="fundoBuscar" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5000">
                <img height="400px" src="img/imgSlide1.jpg" class="d-block w-100" alt="Imagens De Legumes e Vegetais">
            </div>
            <div class="carousel-item" data-interval="5000">
                <img height="400px" src="img/imgSlide2.jpg" class="d-block w-100" alt="Imagens De Legumes e Vegetais">
            </div>
            <div class="carousel-item">
                <img height="400px" src="img/imgSlide3.jpg" class="d-block w-100" alt="Imagens De Legumes e Vegetais">
            </div>
        </div>
    </div>

    <div id="buscarGeral" class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-6">
                <h4 class="text-center pb-3 text-light">
                    Aqui você encontra tudo para uma rotina vegana
                </h4>
                <form method="GET" class="form-inline">
                    <input class="form-control w-75" type="search" placeholder="O que você procura ?" aria-label="Search">
                    <button class="btn btn-info w-25" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>

    <main>

        <section class="py-5">
            <div id="recomendacoesPai" class="container">
                <div class="row">
                    <div class="col text-center">
                        <a href="#">
                            <img id="recomendacoes" src="img/restauranteImagemTeste.jpg" height="150" width="150" alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Encontre Restaurantes</h6>
                    </div>
                    <div class="col text-center">
                        <a href="#">
                            <img id="recomendacoes" src="img/diarioImagemTeste.jpg" height="150" width="150" alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Organize seu diario vegano</h6>
                    </div>
                    <div class="col text-center">
                        <a href="#">
                            <img id="recomendacoes" src="img/comunidadeImagemTeste.jpg" height="150" width="150" alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Comunidade de veganos</h6>
                    </div>
                    <div class="col text-center">
                        <a href="#">
                            <img id="recomendacoes" src="img/dicasImagemTeste.jpg" height="150" width="150" alt="Restaurante Veganos">
                        </a>
                        <h6 class="py-3">Encontre dicas importantes</h6>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="pt-4 pb-5">
            <h3 class="text-center pb-5">Destaques</h3>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <a href="#"><img height="200" src="img/restauranteImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Melhor Restaurante</h5>
                                <p class="card-text">Melhor restaurante do mês</p>
                                <a href="#" class="btn btn-primary">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <a href="#"><img height="200" src="img/nutricionistaImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês">
                                <div class="card-body">
                            </a>
                            <h5 class="card-title">Melhor Nutricionista</h5>
                            <p class="card-text">Melhor nutricionista do mês</p>
                            <a href="#" class="btn btn-primary">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <a href="#"><img height="200" src="img/postImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Melhor Post</h5>
                                <p class="card-text">Melhor post do mês</p>
                                <a href="#" class="btn btn-primary">Conhecer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>


        <section class="py-3">
            <h3 class="text-center pb-5">Depoimentos de Veganos</h3>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" id="depoimentos">
                            <a href="#"><img height="150" src="img/depoimentosImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Depoimentos 1</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis omnis delectus suscipit non ipsa vitae earum ratione, debitis at, laboriosam necessitatibus quisquam molestiae enim reiciendis facere! Expedita quia dolor veritatis.
                                </p>
                                <a href="#" class="btn btn-info">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" id="depoimentos">
                            <a href="#"><img height="150" src="img/depoimentosImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Depoimentos 2</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis omnis delectus suscipit non ipsa vitae earum ratione, debitis at, laboriosam necessitatibus quisquam molestiae enim reiciendis facere! Expedita quia dolor veritatis.
                                </p>
                                <a href="#" class="btn btn-info">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" id="depoimentos">
                            <a href="#"><img height="150" src="img/depoimentosImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Depoimentos 3</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis omnis delectus suscipit non ipsa vitae earum ratione, debitis at, laboriosam necessitatibus quisquam molestiae enim reiciendis facere! Expedita quia dolor veritatis.
                                </p>
                                <a href="#" class="btn btn-info">Conhecer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" id="depoimentos">
                            <a href="#"><img height="150" src="img/depoimentosImagemTeste.jpg" class="card-img-top" alt="Melhor Restaurante Mês"></a>
                            <div class="card-body">
                                <h5 class="card-title">Depoimentos 4</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis omnis delectus suscipit non ipsa vitae earum ratione, debitis at, laboriosam necessitatibus quisquam molestiae enim reiciendis facere! Expedita quia dolor veritatis.
                                </p>
                                <a href="#" class="btn btn-info">Conhecer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-5">
                <a href="#"><button class="btn btn-outline-info">
                        Mais Depoimentos

                    </button>
                </a>
            </div>
        </section>

        <hr>

        <section class="py-4">
            <h3 class="text-center py-5">Dicas</h3>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Produtos Cabelos</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/produtoCabelo.jfif" alt="Imagens Dicas">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Receitas Caseiras</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/fazerCasa.jfif" alt="Imagens Dicas">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Nutricionista</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/nutricionistaImagemTeste.jpg" alt="Imagens Dicas">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Salgados Veganos</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/salgadoVegano.jfif" alt="Imagens Dicas">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Supremento Vegano</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/coletaSeletiva.jpg" alt="Imagens Dicas">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 text-center">
                        <h5>Produtos Limpeza</h5>
                        <a href="#">
                            <img id="dicasImagens" class="p-4" height="200" width="300" src="img/produtosLimpeza.jfif" alt="Imagens Dicas">
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include ('modals.html') ?>

    <footer id="rodape" class="bg-dark text-light">
        <div class="container">
            <h5 class="p-3 text-center">@Copyright 2019 BeeVegan</h5>
        </div>
    </footer>
</body>

</html>