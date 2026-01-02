<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "login-simples";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error) {
        echo "Falha na conexão: " . $conn ->connect_error;
    }