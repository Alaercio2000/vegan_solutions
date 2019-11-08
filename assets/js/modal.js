function showModalLogin(){
    hideModalCadastro();
    document.getElementById("modal-login").classList.remove("d-none");
}

function showModalCadastro(){
    hideModalLogin();
    document.getElementById("modal-cadastro").classList.remove("d-none");
}

function hideModalLogin(){
    document.getElementById("modal-login").classList.add("d-none");
}

function hideModalCadastro(){
    document.getElementById("modal-cadastro").classList.add("d-none");
}