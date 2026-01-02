<?php
    session_start();
    require __DIR__ . "/../config/conexao.php";
    
    $name = $_POST['name'];
    $senha = $_POST['senha'];

    $sql = "
        SELECT nome, id, email, senha FROM USUARIO WHERE nome = ?
    ";

    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param('s', $name);
    $stmt -> execute();

    $result = $stmt->get_result();

    if($result -> num_rows == 1){
        $usuario = $result -> fetch_assoc();

        if(password_verify($senha, $usuario['senha'])){
            $_SESSION['logged'] = true;
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            header('Location: ../index.php');
            exit;
        }

        $_SESSION['erro'] = 'Senha inválida';
        header('Location: ../login.php');
        exit;
    }

    $_SESSION['erro'] = 'Usuário inexistente';
    header('Location: ../login.php');
    exit;