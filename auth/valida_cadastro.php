<?php
    require __DIR__ . "/../config/conexao.php";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "
        INSERT INTO USUARIO (nome, email, senha) 
        VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("sss", $name, $email, $senhaHash);
    $stmt -> execute();

    header("Location: ../login.php");