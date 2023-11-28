<?php
    echo    "<header>
                <nav class='w-full h-16 flex items-center justify-between text-white border-box px-8 fixed bg-blue-500'>
                    <div>
                        <ul class='flex'>
                            <li>
                                <p class='h-16 drop-down-nav flex items-center cursor-pointer'>Consulta</p>
                                <div class='w-64 bg-blue-500'>
                                    <a class='hover:font-bold' href='./cliente.php'>cliente</a>
                                    <a class='hover:font-bold' href='./funcionario.php'>funcionario</a>
                                    <a class='hover:font-bold' href='./fornecedor.php'>fornecedor</a>
                                    <a class='hover:font-bold' href='./produto.php'>produto</a>
                                </div>
                            </li>
                            <li>
                                <p class='h-16 drop-down-nav flex items-center ml-8 cursor-pointer'>Cadastro</p>
                                <div class='w-64 bg-blue-500'>
                                    <a class='hover:font-bold' href='../cadastro/cliente.php'>cliente</a>
                                    <a class='hover:font-bold' href='../cadastro/funcionario.php'>funcionario</a>
                                    <a class='hover:font-bold' href='../cadastro/fornecedor.php'>fornecedor</a>
                                    <a class='hover:font-bold' href='../cadastro/produto.php'>produto</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class='flex items-center' onclick='abrir();'>
                        <h3 class='mr-4'>usuario</h3>
                        <div class='w-8 h-8 rounded-full bg-blue-200'></div>
                        <div class='w-64 bg-orange-500' id='perfilbusca'>
                            <a class='hover:font-bold' href='./cliente.php'>cliente</a>
                            <a class='hover:font-bold' href='./funcionario.php'>funcionario</a>
                            <a class='hover:font-bold' href='./fornecedor.php'>fornecedor</a>
                            <a class='hover:font-bold' href='./produto.php'>produto</a>
                        </div>
                    </div>
                </nav>
            </header>";
    ?>