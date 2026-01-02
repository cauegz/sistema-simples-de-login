<?php require 'auth/protege.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo <?= $_SESSION['usuario_nome'] ?></h1>
    <h3>Você está logado</h3>
    <a href="logout.php" onclick="confirma_sair()">Sair</a>
</body>
<script src="assets/js/script.js"></script>
</html>