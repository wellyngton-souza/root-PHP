<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "root";
    $database = "bd_comerce";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo "conectado";

    } catch(PDOException $e) {
        echo "Falha na conexão: " . $e->getMessage();
    }
?>