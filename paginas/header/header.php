<?php
require("../login/modals.php");
?>
<script src="../login/assets/js/modal.js"></script>
<link rel="stylesheet" href="../login/assets/css/modal.css">
<link rel="stylesheet" href="../login/assets/css/forms.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    #menuHeader {
        transition: 0.6s;
        background-color: rgb(100, 100, 100, .3);
    }

    #iconeMenu {
        font-size: 50px;
        line-height: 70px;
        color: #ffffff;
    }

    #botaoMenu:focus {
        outline: thin dotted;
        outline: 0px auto -webkit-focus-ring-color;
        outline-offset: 0px;
    }

    #navBar {
        transition: 0.7s;
    }

    .nav-link {
        transition: 0.5s;
    }
</style>
<header class="fixed-top">
    <div id="menuHeader" class="container-fluid">
        <div class="row flex-row-reverse flex-md-row">
            <div class="col-6 col-pq-5 col-sm-8 col-md-2 pr-1">
                <a class="col" href="" onClick="window.location.href = window.location.href;">
                    <img class="p-2 p-pq-1" height="90" src="../../assets/img/img-header-menu/logo.png" alt="Logo">
                </a>
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-md">
                    <div>
                        <button id="botaoMenu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                            <i id="iconeMenu" class="material-icons">
                                menu
                            </i>
                        </button>
                    </div>
                    <div id="navBar" class="nav collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../sobre/sobre.php">Sobre</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../search/search.php">Restaurantes</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../search/search.php/">Produtos</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../search/search.php">Profissionais</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../blog/blog.php">Blog</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="../comunidade/comunidade.php">Comunidade</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="javascript:void(showModalLogin())">Acesse</a>
                            <a class="nav-link textMenu text-info font-weight-bold py-4 px-sm-1 px-md-2 px-lg-3 px-xl-4 pl-full-5 pr-full-4" href="javascript:void(showModalCadastro())">Registre-se</a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
</body>

</html>