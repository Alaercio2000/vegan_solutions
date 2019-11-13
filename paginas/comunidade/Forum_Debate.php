<!DOCTYPE html>

<html lang="pt-br">

<head>
    
    <link rel="stylesheet" href="../../assets/css/bootstrap/coresBootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./assets/CSS/Comunidade.css">
    <link rel="stylesheet" href="./assets/CSS/Forum.css">

    <title>Forum</title>


</head>

<body>
    <?php require("../header/header.php") ?>

    <div class="container corpoConteudo">
        <div class="tamanhoDiv   ">
            <div
                class="tamanhoImagenForum d-flex align-items-end pl-4 pb-2 border-top border-right border-left rounded-top">
                <h1 class="corLetraForum">Forum Primeiros passos</h1>
            </div>
            <div class="d-flex border rounded ">
                <div class="pl-4 col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae cumque
                    mollitia at illum consequuntur provident maxime quasi sit sequi, architecto omnis vel natus nostrum
                    dolore commodi! Commodi sed laudantium nulla.</div>
                <div class=" col-4">Menbros: 456</div>

            </div>
        </div>


        <div class="mt-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <div class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow " src="./assets/IMG/super.jpg " alt="super">
                                
                            </button>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder= "Escreva o titulo do debate">
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control" rows="10" placeholder= "Escreva sua mensagem"></textarea>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>


        </div>



    </div>

     <!-- --------------------------------------- forum usuario site --------------------------------------------------------------- -->


     <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg ">
                <h4> <strong> O que mais tem sido falado... </strong> </h4>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="./assets/IMG/mulherGato.jpg" alt="Mulher Gato" class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                           
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>Quero ser
                                    vegana, mas como largar os peixes!!! Minhau!!!</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Selina</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Dificuldades </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?
                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/gato1.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/gato2.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/gato3.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/gato4.jpg" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="./assets/IMG/thor.jpg" alt="Mulher Gato"
                                class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>E necessario
                                    ser vegano para ser digno?</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Thor</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Primeiros passos </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?

                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/thor1.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/tror2.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/tror3.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/thor4.jpg" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom pb-4 mt-5">
                    <div class=" row col-lg-2">
                        <a class="linkComunidadecor" href="#">
                            <img src="./assets/IMG/bane.jpg" alt="Mulher Gato"
                                class="img-thumbnail  rounded-circle imgUsuarioRedonda ml-2 shadow ">
                        </a>
                    </div>
                    <div class="col-lg">
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"> <strong>Como atingir a
                                    necessecidade proteica com alimentacao vegana</strong> </a>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario">
                                <strong>‎Bane</strong></a>
                            <small class=" text-muted">em</small>
                            <a href="#" style="text-decoration: none" class="LinksForunUsuario"><strong> Forum
                                    Primeiros passos </strong> </a>
                            <small class="text-muted"> ,Ontem as 23:50</small>
                        </div>
                        <div class="mb-2">
                            <a href="#" style="text-decoration: none" class="LinksForun">
                                veniam veritatis, ratione exercitationem, maiores possimus blanditiis voluptatum
                                fugit odit culpa earum nobis facere et ea eius. Tempora illum quod odio?
                            </a>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 border-right">
                                <small class="text-muted"> 18 Comentatios </small>
                            </div>
                            <div class="col-lg-4">
                                <small class="text-muted"> 50 Visualizações </small>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-wrap col-3 justify-content-between">
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/bane1.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/bane2.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/bane3.jpg" alt="gato1"></figure>
                        </div>
                        <div>
                            <figure><img class="imagensPostadas" src="./assets/IMG/bane4.jpg" alt="gato1"></figure>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>


    <!----------------------------navegacao----------------------------------- -->

    <div class="container d-flex justify-content-center mt-5 ">

        <div>

            <nav aria-label="Page navigation example ">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>



    </div>

    <!-------------------------------------footer ------------------------------------------------ -->

    <?php require("../footer/footer.php") ?>