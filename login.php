<?php
    session_start();
    if(isset($_SESSION['erro'])){
        echo $_SESSION['erro'];
        unset($_SESSION['erro']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
</head>
<body>
    <div class="card">
        <h1>Sistema de login</h1>
        <form action="auth/valida_login.php" method="post" class="form-login">
            <label>Nome: <input type="text" name="name" id="input-nome" class="input-login"></label>
            <label>Senha: <input type="password" name="senha" id="input-senha" class="input-login"></label>
            <button type="submit" class="botao-login">Enviar</button>
        </form>
        <p class="texto-login">Ainda não possui uma conta? <a href="cadastro.php">Cadastrar</a></p>
        <h6>por Cauê Zanardi</h6>
    </div>
</body>
</html>