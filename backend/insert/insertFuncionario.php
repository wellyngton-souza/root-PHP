<?php
    include_once("../conexao.php");

    $sql = "insert into tb_funcionario
    (nm_funcionario, cpf, rg, rua, bairro, cep, cidade, estado, telefone, gmail)
    values ('"
        . $_POST['nome'] . "','"
        . $_POST['cpf'] . "','"
        . $_POST['rg'] . "','"
        . $_POST['rua'] . "','"
        . $_POST['bairro'] . "','"
        . $_POST['cep'] . "','"
        . $_POST['cidade'] . "','"
        . $_POST['estado'] . "','"
        . $_POST['telefone'] . "','"
        . $_POST['gmail'] . "'
    )";

    $conn->exec($sql);

    $conn = null;
    
    header("Location: ".$_SERVER['HTTP_REFERER']."");
?>