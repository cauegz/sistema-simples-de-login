<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
    <script src="https://kit.fontawesome.com/c25eca0384.js" crossorigin="anonymous"></script> 
</head>
<body>
    <span id="mensagem-erro"></span>
    <h1>Cadastro</h1>
    <form action="auth/valida_cadastro.php" method="post" class="form">
        <div class="input-group">
            <i class="fa-solid fa-user icon"></i>
            <input type="text" name="name" id="input-nome-cadastro" placeholder="Nome" required minlength="4">
        </div>

        <div class="input-group">
        <i class="fa-solid fa-message icon"></i>
            <input type="email" name="email" id="input-email-cadastro" placeholder="Email" required>
        </div>

        <div class="input-group">
            <i class="fa-solid fa-lock icon"></i>
            <input type="password" name="senha" id="input-senha-cadastro" placeholder="Senha" minlength="6" required>
            <i class="fa-regular fa-eye eye" id="mostra-senha" onclick="muda_senha('input-senha-cadastro', 'mostra-senha')"></i>
        </div>

        <div class="input-group">
            <i class="fa-solid fa-lock icon"></i>
            <input type="password" name="senha" id="input-confirma-senha-cadastro" placeholder="Confirmar senha" minlength="6" required>
            <i class="fa-regular fa-eye eye" id="mostra-confirma-senha" onclick="muda_senha('input-confirma-senha-cadastro', 'mostra-confirma-senha')"></i>
        </div>

        <button type="submit" onclick="verifica_senha()">CADASTRAR</button>
        <p class="texto-login">Já possui uma conta? <a href="login.php">Login</a></p>
    </form>
    <script src="assets/js/script.js"></script>
</body> 
</html>