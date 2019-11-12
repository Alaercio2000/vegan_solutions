<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/bootstrap/coresBootstrap.min.css">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <title>Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php require("../header/header.php"); ?>

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <a target="_blank" href="https://www.revistalofficiel.com.br/moda/5-marcas-brasileiras-sustentaveis-para-voce-ficar-de-olho-em-2019">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 imgensSlide" height="500" src="assets/img/reciclagem.jpg" href="http://google.com" alt="Primeiro Slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:rgb(40, 41, 38);">Tecidos sustentáveis</h5>
                        <p>Marcas brasileiras oferecem produtos de vestuário e calçados</p>
                    </div>
                </div>
            </div>
        </a>

        <a target="_blank" href="http://dnanatural.com.br/6-dicas-para-comecar-uma-dieta-vegetariana-ou-vegana/">
            <div class="carousel-item">
                <img class="d-block w-100 imgensSlide" height="500" src="assets/img/organicos.jpg" alt="Segundo Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Diversidade na Alimentação</h5>
                    <p style="color:rgb(202, 204, 195);"> Como iniciar uma dieta vegana de forma saudável</p>
                </div>
            </div>
        </a>

        <a target="_blank" href="http://www.belagil.com/blog/2016/8/2/a-alimentao-viva-ou-crudivorismo">
            <div class="carousel-item">
                <img class="d-block w-100 imgensSlide" height="500" src="assets/img/crudi.jpg" alt="Terceiro Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:rgb(40, 41, 38);">Conhece o crudivorísmo?</h5>
                    <p>Entenda como funciona e os benefícios para quem segue esse hábito</p>
                </div>
            </div>
        </a>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>


    <div class="container-fluid mt-5 mb-3">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/img/crudi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ALIMENTAÇÃO CRUA</h5>
                        <p class="card-text">Comer alimentos crus pode melhorar a digestão e aumentar a vitalidade.</p>
                        <a target="_blank" href="http://www.belagil.com/blog/2016/8/2/a-alimentao-viva-ou-crudivorismo" class="btn btn-success"> Veja matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/img/prancha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BITUCAS DE CIGARRO VIRAM PRANCHA DE SURF</h5>
                        <p class="card-text">Ação reduz pontas de cigarros na ruas, praias e oceanos.</p>
                        <a target="_blank" href="https://vegmag.com.br/blogs/meio-ambiente/bitucas-viram-pranchas-de-surfe" class="btn btn-success"> Veja matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/img/cosmetico.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">COSMÉTICOS NATURAIS</h5>
                        <p class="card-text">Veja como fazer hidratante, pasta de dente, tônico pra pele, entre outros produtos de beleza veganos.</p>
                        <a target="_blank" href="https://revistaglamour.globo.com/Beleza/noticia/2016/11/beleza-vegana-saiba-como-fazer-cosmeticos-naturais-em-casa.html" class="btn btn-success"> Veja matéria</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="assets/img/salada.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MOTIVOS PARA SE TORNAR VEGANO</h5>
                        <p class="card-text">Confira 9 benefícios de saúde descobertos pelos pesquisadores.
                        </p>
                        <a target="_blank" href="https://noticias.ambientebrasil.com.br/clipping/2018/10/05/147245-9-beneficios-para-a-saude-de-se-tornar-vegano.html" class="btn btn-success"> Veja matéria</a>
                    </div>
                </div>
            </div>


            <div class="container-fluid mt-5">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="assets/img/barato.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">MOVIMENTO SER VEGANO É (UM) BARATO</h5>
                                <p class="card-text">Compartilhe sua receita e divulgue essa idéia.</p>
                                <a target="_blank" href="https://vegmag.com.br/blogs/alimentacao/movimento-ser-vegano-e-um-barato" class="btn btn-success"> Veja matéria</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="assets/img/bolinho.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BOLINHO DE CASCA DE BANANA</h5>
                                <p class="card-text">É possível reaproveitar a casca da banana em diversas receitas, nesse caso, um bolinho que pode ser acompanhamento nas principais refeições.</p>
                                <a target="_blank" href="https://veganapratica.com/bolinho-de-casca-de-banana/" class="btn btn-success"> Veja matéria</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="assets/img/frugal.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">SAÚDE FRUGAL</h5>
                                <p class="card-text">Nutricionista clínico especializado em dietas veganas e crudívora tem página com receitas e mostra os benefícios de adotar essa dieta.</p>
                                <a target="_blank" href="http://saudefrugal.blogspot.com/" class="btn btn-success"> Veja matéria</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="assets/img/ayurveda.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AYURVEDA</h5>
                                <p class="card-text">Conheça a Medicina Ayurvedica, os doshas e como se beneficiar através da alimentação adequada ao seu perfil.
                                </p>
                                <a target="_blank" href="http://ayurveda.com.br/a-medicina-ayurvedica-ou-ayurveda/" class="btn btn-success"> Veja matéria</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php require("../footer/footer.php"); ?>

</body>

</html>