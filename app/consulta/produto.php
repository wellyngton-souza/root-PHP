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
                    <div class="w-full md:w-2/3 lg:w-1/3 p-8 pt-12 pb-8 md:rounded-lg bg-white">
                        <h2 class="text-xl my-2">Produto PHP</h2>
                        <form action="../home.php">
                            <?php
                                include_once("../../backend/conexao.php");

                                $sql = "select * from tb_produto;";

                                foreach ($conn->query($sql) as $row) {
                                    echo "<div class='grid grid-cols-5'>";
                                    echo "<div class='my-2'>" . $row['nm_produto'] . "</div>";
                                    echo "<div class='my-2'>" . $row['nm_tipo'] . "</div>";
                                    echo "<div class='my-2'>" . $row['nm_tamanho'] . "</div>";
                                    echo "<div class='my-2 mx-2'>" . $row['nm_valor'] . "</div>";
                                    echo "<div class='my-2'>" . $row['validade'] . "</div>";
                                    echo "</div>";
                                }

                                $conn = null;
                            ?>
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