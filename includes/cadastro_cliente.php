<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../styles/cadastro/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <h2>Cadastro Cliente</h2>
            <form action="#" method="POST">
                <p>nome</p>
                <input type="text" name="nome">
                <p>cpf</p>
                <input type="text" name="cpf">
                <p>rg</p>
                <input type="text" name="rg">
                <p>cep</p>
                <input type="text" name="cep">
                <p>rua</p>
                <input type="text" name="rua">
                <p>num</p>
                <input type="text" name="num">
                <p>bairro</p>
                <input type="text" name="bairro">
                <p>cidade</p>
                <input type="text" name="cidade">
                <p>estado</p>
                <input type="text" name="estado">
                <p>celular</p>
                <input type="text" name="celular">
                <p>gmail</p>
                <input type="text" name="gmail"><br>
                <button>Confirmar Cadastro</button>
            </form>
        </div>
    </main>
</body>
</html>

<?php

  if(!empty($_POST))
  {
  $cliente = array($_POST['nome'],
                   $_POST['cpf'],
                   $_POST['rg'],
                   $_POST['cep'],
                   $_POST['rua'],
                   $_POST['num'],
                   $_POST['bairro'],
                   $_POST['cidade'],
                   $_POST['estado'],
                   $_POST['email']);
  
  $caminho = "./cliente.txt";
  $conteudo = "
Cliente: $cliente[0],$cliente[1],$cliente[2],$cliente[3],$cliente[4],$cliente[5],$cliente[6],$cliente[7],$cliente[8],$cliente[9]
";
        

        if(file_put_contents($caminho,$conteudo,FILE_APPEND))
        {
          echo"<script> alert('Dados cadastrado com sucesso');</script>";
        }
        else
        {
          echo"<script> alert('Erro ao cadastrar!');</script>";
        }

  }


?>