<?php
include '../config/conexao.php';

function showInfos()
{

    $id = $_GET['id'];
    $conn = connection();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("SELECT * FROM produtos WHERE id=:id");
        $sql->bindParam(':id', $id);

        $sql->execute();

        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

        foreach($sql->fetchAll() as $k=>$v) {
            $id               = $v['id'];
            $nome_produto     = $v['nome_produto'];
            $marca            = $v['marca'];
            $valor            = $v['valor'];
            $quantidade       = $v['quantidade'];
            $img              = $v['img'];
        } 

        echo '  <input class="id-edt" type="number" name="id" id="id" value="'.$id.'">
        
                <label class="label-form" for="new_nome_produto">Nome do Produto</label><br>
                <input class="input-form" name="new_nome_produto" id="new_nome_produto" type="text" spellcheck="true" value="'.$nome_produto.'" required><br>
        
                <label class="label-form" for="new_marca">Marca</label><br>
                <input class="input-form" name="new_marca" id="new_marca" type="text" spellcheck="true" value="'.$marca.'" required><br>
        
                <label class="label-form" for="new_valor">Valor</label><br>
                <input class="input-form" name="new_valor" id="new_valor" type="new_number" step="0.01" placeholder="R$ 000,00" value="'.$valor.'" required><br>
        
                <label class="label-form" for="new_quantidade">Quantidade</label><br>
                <input class="input-form" name="new_quantidade" id="new_quantidade" type="number" min="1" value="'.$quantidade.'" required><br>
        
                <label class="label-form" for="new_img">Imagem</label><br>
                <input class="input-form" name="new_img" id="new_img" type="text" placeholder="Link da imagem" value="'.$img.'" required><br>';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}

?>


