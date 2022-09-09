<?php

use FTP\Connection;

include '../config/conexao.php';

$conn = connection();


try {

    if (isset($_POST['btn-form'])){
    
        $extensao_permitida = array('jpg', 'jpeg', 'png');
    
        //img fachada
        if (isset($_FILES['img'])) {
            $image_name = $_FILES['img']['name'];
            $image_type = $_FILES['img']['type'];
            $image_size = $_FILES['img']['size'];
            $image_tmp = $_FILES['img']['tmp_name'];
            $image_location = "../img/upload/";
            $extensao = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        }
    
        //mover fotos fachada
        $image_name = str_replace('.', '-', basename($image_name, $extensao));
        $new_image_name = $image_name . time() . "." . $extensao;
        move_uploaded_file($image_tmp, $image_location . $new_image_name);
        $image_data .= $new_image_name . " ";
    }


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = $conn->prepare("INSERT INTO `produtos`(`nome_produto`, `marca`, `valor`, `quantidade`, `img`) 
                          VALUES (:nome_produto,:marca,:valor,:quantidade,:img)");

    $sql->bindParam(':nome_produto', $nome);
    $sql->bindParam(':marca', $marca);
    $sql->bindParam(':valor', $valor);
    $sql->bindParam(':quantidade', $qtd);
    $sql->bindParam(':img', $image_data);

    $nome = $_POST["nome_produto"];
    $marca = $_POST["marca"];
    $valor = $_POST["valor"];
    $qtd = $_POST["quantidade"];
    $img = $image_data;

    $sql->execute();

    echo "Produto cadastrado com sucesso!";
    header('Location: ../index.php');

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
