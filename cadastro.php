<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="auth/valida_cadastro.php" method="post">
        <label>Nome: </label> <input type="text" name="name" id="input-nome-cadastro">
        <label>Email: </label> <input type="email" name="email" id="input-email-cadastro">
        <label>Senha: </label> <input type="password" name="senha" id="input-senha-cadastro">
        <button type="submit">Cadastrar</button>
    </form>
</body> 
</html>