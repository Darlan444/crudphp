<?php
include '../config/conexao.php';
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REDLINE - Loja Online - CRUD</title>
  <meta name="description" content="REDLINE é uma loja de materiais - CRUD com PHP">
  <link rel="icon" href="../img/REDLINE-menor.png" class="icone" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css">

</head>

<body class="bd-cadastro">

  <?php
    include "../includes/nav2.php";
  ?>

  <main class="form-main">
    <section class="form-section">
      <form class="form" method="POST" action="../model/cadastro-model.php">

        <span class="span-form">CADASTRO</span>

        <label class="label-form" for="nome_produto">Nome do Produto</label><br>
        <input class="input-form" name="nome_produto" id="nome_produto" type="text"><br>

        <label class="label-form" for="marca">Marca</label><br>
        <input class="input-form" name="marca" id="marca" type="text"><br>

        <label class="label-form" for="valor">Valor</label><br>
        <input class="input-form" name="valor" id="valor" type="number" placeholder="R$ 000,00"><br>

        <label class="label-form" for="quantidade">Quantidade</label><br>
        <input class="input-form" name="quantidade" id="quantidade" type="number" min="1"><br>

        <label class="label-form" for="img">Imagem</label><br>
        <input class="input-form" name="img" id="img" type="text" placeholder="Link da imagem"><br>

        <button class="btn-form">Cadastrar</button>

      </form>
    </section>
  </main>

<?php include"../includes/footer2.php";?>  

</body>