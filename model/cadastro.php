<?php

use FTP\Connection;

include '../config/conexao.php';

$conn = connection();


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $conn->prepare("INSERT INTO `produtos`(`nome_produto`, `marca`, `valor`, `quantidade`) 
                          VALUES (:nome_produto,:marca,:valor,:quantidade)");

    $sql->bindParam(':nome_produto', $nome);
    $sql->bindParam(':marca', $marca);
    $sql->bindParam(':valor', $valor);
    $sql->bindParam(':quantidade', $qtd);

    $nome = $_POST["nome_produto"];
    $marca = $_POST["marca"];
    $valor = $_POST["valor"];
    $qtd = $_POST["quantidade"];

    $sql->execute();

    echo "Produto cadastrado com sucesso!";
    header('Location: ../index.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
