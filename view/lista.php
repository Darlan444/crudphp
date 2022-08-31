<?php
include '../includes/header2.php';
include '../includes/nav2.php';
include '../model/lista-model.php';

?>

<h1 class="h1-lista">TABELA DE PRODUTOS</h1>

<section class="table-section">

    <div class="table-div">

        <table class="table table-stripedr">
            <thead class="table-head">
                <tr class="table-r">
                    <th scope="col" class="codigo">CÓDIGO</th>
                    <th scope="col" class="table-nome">NOME</th>
                    <th scope="col" class="table-marca">Marca</th>
                    <th scope="col" class="table-valor">Valor</th>
                    <th scope="col" class="table-qtd">Quantidade</th>
                    <th scope="col" class="table-act">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    showLista();
                ?>
            </tbody>
        </table>

    </div>

</section>
