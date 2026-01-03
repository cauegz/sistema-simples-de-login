<?php require 'auth/protege.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');</style>
    <script src="https://kit.fontawesome.com/c25eca0384.js" crossorigin="anonymous"></script>   
</head>
<body>
    <h1>Bem vindo <?= $_SESSION['usuario_nome'] ?></h1>
    <h3>Você está logado</h3>
    <a href="logout.php" onclick="return confirma_sair()">Sair</a>
</body>
<script src="assets/js/script.js"></script>
</html>