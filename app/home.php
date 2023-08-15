<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./global.css">
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
                            <a class="hover:font-bold" href="./consulta/cliente.php">cliente</a>
                            <a class="hover:font-bold" href="./consulta/funcionario.php">funcionario</a>
                            <a class="hover:font-bold" href="./consulta/fornecedor.php">fornecedor</a>
                            <a class="hover:font-bold" href="./consulta/produto.php">produto</a>
                            <a class="hover:font-bold" href="./consulta/usuario.php">usuario</a>
                        </div>
                    </li>
                    <li>
                        <p class="h-16 drop-down-nav flex items-center ml-8 cursor-pointer">Cadastro</p>
                        <div class="w-64 bg-orange-500">
                            <a class="hover:font-bold" href="./cadastro/cliente.php">cliente</a>
                            <a class="hover:font-bold" href="./cadastro/funcionario.php">funcionario</a>
                            <a class="hover:font-bold" href="./cadastro/fornecedor.php">fornecedor</a>
                            <a class="hover:font-bold" href="./cadastro/produto.php">produto</a>
                            <a class="hover:font-bold" href="./cadastro/usuario.php">usuario</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex items-center">
                <h3 class="mr-4">usario</h3>
                <div class="w-8 h-8 rounded-full bg-blue-200"></div>
            </div>
        </nav>
    </header>
    <main>
        <article>
            <section>
                <div class="min-h-screen pt-16 md:pt-0 md:flex items-center justify-center md:bg-gray-200">
                    <div class="w-full md:w-2/3 lg:w-1/3 p-8 md:rounded-lg bg-white">
                        <h2 class="text-xl">Gerenciamento de Dados</h2>
                        <div>
                            <h3 class="text-lg my-2">Bem Vindo</h3>
                            <p>locale_accept_from_http</p>
                            <p>locale_accept_from_http</p>
                            <p>locale_accept_from_http</p>
                            <p>locale_accept_from_http</p>
                            <p>locale_accept_from_http</p>
                            <p>locale_accept_from_http</p>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
</body>
</html>