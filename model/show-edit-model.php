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
        
                <label class="label-form" for="nome_produto">Nome do Produto</label><br>
                <input class="input-form" name="nome_produto" id="nome_produto" type="text" spellcheck="true" value="'.$nome_produto.'" required><br>
        
                <label class="label-form" for="marca">Marca</label><br>
                <input class="input-form" name="marca" id="marca" type="text" spellcheck="true" value="'.$marca.'" required><br>
        
                <label class="label-form" for="valor">Valor</label><br>
                <input class="input-form" name="valor" id="valor" type="number" step="0.01" placeholder="R$ 000,00" value="'.$valor.'" required><br>
        
                <label class="label-form" for="quantidade">Quantidade</label><br>
                <input class="input-form" name="quantidade" id="quantidade" type="number" min="1" value="'.$quantidade.'" required><br>
        
                <label class="label-form" for="img">Imagem</label><br>
                <input class="input-form" name="img" id="img" type="text" placeholder="Link da imagem" value="'.$img.'" required><br>';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}


?>


