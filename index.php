<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>login</title>
</head>
<body>
	<main>
		<article>
			<section>
				<form action="#" class="min-h-screen flex items-center justify-center bg-gray-200" method="POST">
					<div class="w-full md:w-2/3 lg:w-1/3 overflow-hidden rounded-lg bg-white">
						<img src="https://assets.elanco.com/8e0bf1c2-1ae4-001f-9257-f2be3c683fb1/0c51eaa4-f68e-431f-9adc-3b34432393ce/bpc-48_-_filhotes.jpg?w=3840&q=75&auto=format" alt="capa">
						<div class="p-8">
							<h2 class="text-xl my-2">login</h2>
							<h3 class="my-2">Gmail</h3>
							<input class="w-full px-2 py-1 border border-black" type="email" name="gmail">
							<h3 class="my-2">Senha</h3>
							<input class="w-full px-2 py-1 border border-black" type="password" name="senha">
							<button class="w-full block py-2 my-4 bg-pink-200">Logar</button>
							<div class="p-2 font-bold text-blue-500"><a href="./app/perfil/cadastro.php">Fazer Cadastro</a></div>
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
		include("./backend/conexao.php");

		$gmail = $_POST['gmail'];
		$senha = $_POST['senha'];

		$sql = "select * from tb_usuario where nm_gmail = '$gmail' and nm_senha = '$senha';";

		try{
			$result = $conn->query($sql);
			if($result) header('Location: app/home.php');
		} catch(Exception $e){
			echo "error";
		}
	}
?>