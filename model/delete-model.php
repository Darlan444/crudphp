<?php

include '../config/conexao.php';

    $conn = connection();
    $id = $_GET['id'];

    try{
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = $conn->prepare("DELETE FROM produtos WHERE id=:id");

        $sql->bindParam(':id', $id);

        $sql->execute();

        header('Location: ../view/lista.php');

    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();

    }