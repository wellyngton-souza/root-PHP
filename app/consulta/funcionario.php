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
        include("../components/navbar-consulta.php");
    ?>
    <main>
        <article>
            <section>
                <div class="min-h-screen pt-16 md:pt-0 md:flex items-center justify-center md:bg-gray-200">
                    <div class="w-full md:w-2/3 lg:w-1/3 p-8 pt-24 pb-16 md:rounded-lg bg-white">
                        <h2 class="text-xl my-2">Funcionario PHP</h2>
                        <div>
                            <?php
                                include_once("../../backend/conexao.php");

                                $sql = "select * from tb_funcionario;";

                                foreach ($conn->query($sql) as $row) {
                                    echo "<div class='my-8'>";
                                    echo "<p>" . $row['nm_funcionario'] . "</p>";
                                    echo "<p>" . $row['cpf'] . "</p>";
                                    echo "<p>" . $row['rg'] . "</p>";
                                    echo "<p>" . $row['rua'] . "</p>";
                                    echo "<p>" . $row['bairro'] . "</p>";
                                    echo "<p>" . $row['cep'] . "</p>";
                                    echo "<p>" . $row['cidade'] . "</p>";
                                    echo "<p>" . $row['estado'] . "</p>";
                                    echo "<p>" . $row['telefone'] . "</p>";
                                    echo "<p>" . $row['gmail'] . "</p>";
                                    echo "</div>";
                                } 

                                $conn = null;
                            ?>
                        </div>
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