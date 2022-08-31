<?php

include '../config/conexao.php';

function showLista()
{
    $conn = connection();

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("SELECT * FROM produtos");

        $sql->execute();

        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($sql->fetchAll() as $k => $v) {
            echo '  <tr>
                    <th>' . $v['id'] . '</th>
                    <td scope="row">' . $v['nome_produto'] . '</td>
                    <td scope="row">' . $v['marca'] . '</td>
                    <td scope="row">R$ ' . $v['valor'] . '</td>
                    <td scope="row">' . $v['quantidade'] . '</td>
                    <td scope="row">
                        <a class="btn btn-info btn-md" href="../view/editar.php?id=' . $v['id'] . '"><i class="fa fa-pencil"></i></a>                            
                        <a class="btn btn-danger btn-md" href="../model/delete.php" data-href="delete.php?id=' . $v['id'] . '"><i class="fa fa-trash"></i></a></td>
                </tr>';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>

