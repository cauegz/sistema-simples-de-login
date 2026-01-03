<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
    <script src="https://kit.fontawesome.com/c25eca0384.js" crossorigin="anonymous"></script>   
</head>
<body>
        <?php
            session_start();
            if(isset($_SESSION['erro'])){
                echo '<div class="caixa-erro"><i class="fa-solid fa-triangle-exclamation" style="color:yellow;"></i><p class="paragrafo-erro">' . $_SESSION['erro'] . '</p></div>';
                unset($_SESSION['erro']);
            }
        ?>
        <h1>Sistema de login</h1>
        <form action="auth/valida_login.php" method="post" class="form">
            <div class="input-group">
                <i class="fa-solid fa-user icon"></i>
                <input type="text" name="name" id="input-nome" class="input-login" placeholder="Nome" required> 
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="senha" id="input-senha" class="input-login" placeholder="Senha" required>
                <i class="fa-regular fa-eye eye" id="mostra-senha" onclick="muda_senha('input-senha')"></i>
            </div>
            <button type="submit" class="botao-login">LOGIN</button>
        </form>
        <p class="texto-login">Ainda não possui uma conta? <a href="cadastro.php">Cadastrar</a></p>
        <script src="assets/js/script.js"></script>
</body>
</html>