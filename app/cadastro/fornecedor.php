<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <?php
        include("../components/navbar-cadastro.php");
    ?>
    <main>
        <article>
            <section>
                <div class="min-h-screen pt-16 md:pt-0 md:flex items-center justify-center md:bg-gray-200">
                    <div class="w-full md:w-2/3 lg:w-1/3 p-8 py-10 md:rounded-lg bg-white">
                        <h2 class="text-xl my-2">Fornecedor PHP</h2>
                        <form action="../home.php">
                            <h4>Nome</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>CPF</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>RG</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>Rua</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>Bairro</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>Telefone</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>Gmail</h4>
                            <input class="w-full px-2 py-1 mb-4 border border-black" type="text">
                            <h4>Foto</h4>
                            <input class="w-full px-2 py-1 mb-4 cursor-pointer border border-black" type="file" name="" id="">
                            <button class="w-full px-2 py-1 my-4 border border-black bg-green-300">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <?php
        include("../components/cabecalhoScript.php");
    ?>
</body>
</html>