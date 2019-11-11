
<link rel="stylesheet" href="../../assets/css/modal.css">
<link rel="stylesheet" href="../../assets/css/forms.css">
<script defer src="../../assets/js/modal.js"></script>


<div class="modals">
    <div id="modal-cadastro" class="modal-cadastro container text-center align-items-center d-none">
        <form action="" method="POST">
    
            <div class="row d-flex flex-column my-3 align-items-center">
                <div class="close-modal" onClick="hideModalCadastro()">X</div>

                <h3>Cadastro</h3>

                <button type="submit" class="btn btn-light border my-2 mt-4 col-6 btn-social">
                    <i class="fab fa-facebook-square"></i>
                    Entrar com Facebook
                </button>

                <button type="submit" class="btn btn-light border my-2 mb-4 col-6 btn-social">
                    <i class="fab fa-google"></i>
                    Entrar com Google
                </button>
                
                <p>Ou cadastre-se usando seu e-mail</p>

                <div class="form-group col-10 my-2">
                    <input type="text" class="form-control text-center" name="nome" id="nome" placeholder="Nome">
                </div>

                <div class="form-group col-10 my-2">
                    <input type="email" class="form-control text-center" name="email" id="email" placeholder="E-mail">
                </div>

                <div class="form-group col-10 my-2">
                    <input type="password" class="form-control text-center" name="senha" id="senha" placeholder="Senha">
                </div>

            </div>
    
            <button type="submit" class="btn btn-primary mb-2">Criar conta</button>

            <p> Já tem uma conta? <a href="javascript:void()" onClick="showModalLogin()">Entrar</a></p>

            <p class="my-2">Você é profissional? <a href="/paginas/login/cadastroPro.php">Clique aqui</a></p>

        </form>
    </div>

    <div id="modal-login" class="modal-login container text-center align-items-center d-none">
        <form action="" method="POST">
    
            <div class="row d-flex flex-column my-3 align-items-center">

                <div class="close-modal" onClick="hideModalLogin()">X</div>

                <h3 class="mb-2">Entre em sua conta</h3>

                <h6>Não possui uma conta? <a href="javascript:void()" onClick="showModalCadastro()">Registre-se</a></h6>

                <button type="submit" class="btn border my-2 mt-4 col-6">
                    <i class="fab fa-facebook-square"></i>
                    Entrar com Facebook
                </button>

                <button type="submit" class="btn border my-2 mb-4 col-6">
                    <i class="fab fa-google"></i>
                    Entrar com Google
                </button>

                <div class="form-group col-10 my-3">
                    <input type="email" class="form-control text-center" name="email" id="email" placeholder="E-mail">
                </div>

                <div class="form-group col-10 my-3">
                    <input type="password" class="form-control text-center" name="senha" id="senha" placeholder="Senha">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Entrar</button>

            <p><a href="">Esqueceu sua senha?</a></p> 

            <p class="my-2">Você é profissional? <a href="/paginas/login/loginPro.php">Clique aqui</a></p>

        </form>
    </div>
</div>
