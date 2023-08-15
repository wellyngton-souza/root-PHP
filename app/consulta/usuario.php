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
    <header>
        <nav class="w-full h-16 flex items-center justify-between text-white border-box px-8 fixed bg-blue-500">
            <div>
                <ul class="flex">
                    <li>
                        <p class="h-16 drop-down-nav flex items-center cursor-pointer">Consulta</p>
                        <div class="w-64 bg-green-500">
                            <a class="hover:font-bold" href="./cliente.php">cliente</a>
                            <a class="hover:font-bold" href="./funcionario.php">funcionario</a>
                            <a class="hover:font-bold" href="./fornecedor.php">fornecedor</a>
                            <a class="hover:font-bold" href="./produto.php">produto</a>
                            <a class="hover:font-bold" href="./usuario.php">usuario</a>
                        </div>
                    </li>
                    <li>
                        <p class="h-16 drop-down-nav flex items-center ml-8 cursor-pointer">Cadastro</p>
                        <div class="w-64 bg-orange-500">
                            <a class="hover:font-bold" href="../cadastro/cliente.php">cliente</a>
                            <a class="hover:font-bold" href="../cadastro/funcionario.php">funcionario</a>
                            <a class="hover:font-bold" href="../cadastro/fornecedor.php">fornecedor</a>
                            <a class="hover:font-bold" href="../cadastro/produto.php">produto</a>
                            <a class="hover:font-bold" href="../cadastro/usuario.php">usuario</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                <h3 class="mr-4">usuario</h3>
                <div class="w-8 h-8 rounded-full bg-blue-200"></div>
            </div>
        </nav>
    </header>
    <main>
        <article>
            <section>
                <div class="min-h-screen pt-16 md:pt-0 md:flex items-center justify-center md:bg-gray-200">
                    <div class="w-full md:w-2/3 lg:w-1/3 p-8 py-16 md:rounded-lg bg-white">
                        <h2 class="text-xl my-2">Usuario PHP</h2>
                        <form action="../home.php">
                            <button class="w-full px-2 py-1 my-4 border border-black bg-green-300">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
        </article>
    </main>
</body>
</html>