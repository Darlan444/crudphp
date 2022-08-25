<?php

function showProdutos(){

$conn = connection();

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("SELECT * FROM produtos");

    $sql->execute();

    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

    echo '<main class="principal">
            <section class="section-principal">';

    foreach ($sql->fetchAll() as $k => $v) {

        echo '
            <div class="produto">
                <div class="img-produto">
                    <img class="img-card" src="'.$v['img'].'" alt="img-produto">
                </div>
                <div class="span-produto">
                    <span class="span-card">'.$v['nome_produto'].'</span></br>
                    <span class="span-card2">Marca - '.$v['marca'].'</span></br>
                    <span class="span-card3">Quantidade - '.$v['quantidade'].'</span></br>
                </div>
            </div>';

    }
    echo '</section>
        </main>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}