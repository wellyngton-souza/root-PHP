<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Cadastro</title>
</head>
<body>
	<main>
		<article>
			<section>
				<form action="#" class="min-h-screen flex items-center justify-center md:bg-gray-200" method="POST">
					<div class="w-full md:w-2/3 lg:w-1/3 overflow-hidden rounded-lg bg-white">
                        <img src="https://fisiocarepet.com.br/wp-content/uploads/2022/02/cachorro.png" alt="capa">
                        <div class="p-8">
                            <h2 class="text-xl my-2">Cadastro</h2>
                            <h3 class="my-2">Gmail</h3>
                            <input class="w-full px-2 py-1 border border-black" type="email" name="gmail">
                            <h3 class="my-2">Senha</h3>
                            <input class="w-full px-2 py-1 border border-black" type="password" name="senha">
                            <button class="w-full block py-2 my-4 bg-pink-200">Cadastrar</button>
                            <div class="p-2 font-bold text-blue-500"><a href="../../index.php">Fazer Login</a></div>
                        </div>
					</div>
				</form>
			</section>
		</article>
	</main>
</body>
</html>

<?php
    if(!empty($_POST)){
        include("../../backend/conexao.php");

        $gmail = $_POST['gmail'];
        $senha = $_POST['senha'];

        $sql = "insert into tb_usuario (nm_gmail, nm_senha) values('$gmail', '$senha');";

        try{
            $conn->query($sql);
            header('Location: ../../index.php');
        } catch(Exception $e){
            echo "error";
        
        }
    }
?>