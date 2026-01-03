function confirma_sair() {
    return confirm('Tem certeza que deseja sair do sistema?');
}

function muda_senha(input_senha, i_olho){
    var olho = document.getElementById(i_olho);
    var senha = document.getElementById(input_senha);
    senha.type = senha.type === "password" ? "text" : "password";
    if(olho.classList.contains('fa-eye')){
        olho.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
         olho.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

function verifica_senha(){
    var senha1 = document.getElementById('input-senha-cadastro').value;
    var senha2 = document.getElementById('input-confirma-senha-cadastro').value;
    var erro = document.getElementById('mensagem-erro');

    if(senha1 != senha2){
        erro.innerHTML = `
            <div class="caixa-erro">
                <i class="fa-solid fa-triangle-exclamation" style="color:yellow;"></i>
                <p class="paragrafo-erro">As senhas não coincidem</p>
            </div>
        `;
        event.preventDefault();
    }
}