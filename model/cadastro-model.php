<?php

use FTP\Connection;

include '../config/conexao.php';

$conn = connection();


try {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $conn->prepare("INSERT INTO `produtos`(`nome_produto`, `marca`, `valor`, `quantidade`, `img`) 
                          VALUES (:nome_produto,:marca,:valor,:quantidade,:img)");

    $sql->bindParam(':nome_produto', $nome);
    $sql->bindParam(':marca', $marca);
    $sql->bindParam(':valor', $valor);
    $sql->bindParam(':quantidade', $qtd);
    $sql->bindParam(':img', $img);

    $nome = $_POST["nome_produto"];
    $marca = $_POST["marca"];
    $valor = $_POST["valor"];
    $qtd = $_POST["quantidade"];
    $img = $_POST["img"];

    $sql->execute();

    echo "Produto cadastrado com sucesso!";
    header('Location: ../index.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
