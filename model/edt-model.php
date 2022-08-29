<?php
include '../config/conexao.php';

function attProduto()
{

    $conn = connection();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = $conn->prepare("UPDATE produtos SET nome_produto=:nome_produto, marca=:marca,
                                valor=:valor,quantidade=:quantidade, img=:img WHERE id=:id");
    
        
        $sql->bindParam(':id', $id);
        $sql->bindParam(':nome_produto', $nome);
        $sql->bindParam(':marca', $marca);
        $sql->bindParam(':valor', $valor);
        $sql->bindParam(':quantidade', $qtd);
        $sql->bindParam(':img', $img);
    
        $id = $_POST["id"];
        $nome = $_POST["nome_produto"];
        $marca = $_POST["marca"];
        $valor = $_POST["valor"];
        $qtd = $_POST["quantidade"];
        $img = $_POST["img"];
    
        $sql->execute();
    
        header('Location: ../index.php');
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    
}
