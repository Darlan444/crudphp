<?php
include '../config/conexao.php';

    $conn = connection();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = $conn->prepare("UPDATE produtos SET nome_produto=:new_nome_produto, marca=:new_marca,
                                valor=:new_valor,quantidade=:new_quantidade, img=:new_img WHERE id=:id");
    
        
        $sql->bindParam(':id', $id);
        $sql->bindParam(':new_nome_produto', $new_nome);
        $sql->bindParam(':new_marca', $new_marca);
        $sql->bindParam(':new_valor', $new_valor);
        $sql->bindParam(':new_quantidade', $new_qtd);
        $sql->bindParam(':new_img', $new_img);
    
        $id = $_POST["id"];
        $new_nome = $_POST["new_nome_produto"];
        $new_marca = $_POST["new_marca"];
        $new_valor = $_POST["new_valor"];
        $new_qtd = $_POST["new_quantidade"];
        $new_img = $_POST["new_img"];
    
        $sql->execute();
    
        header('Location: ../index.php');
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
