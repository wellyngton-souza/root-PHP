<?php
    include_once("../conexao.php");

    $sql = "insert into tb_produto (nm_produto, nm_tipo, nm_tamanho, nm_valor, validade) values ('" 
     . $_POST['name']. "','"
     . $_POST['type']. "','"
     . $_POST['tamanho']. "','"
     . $_POST['valor']. "','"
     . $_POST['validade']. "');"
    ;

    $conn->exec($sql);

    $conn = null;

    header("Location: ".$_SERVER['HTTP_REFERER']."");
?>