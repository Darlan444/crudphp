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

<body>

  <main class="form-main">
    <section class="form-section">
      <form class="form">

        <label class="label-form" for="input-nome">Nome do Produto</label><br>
        <input class="input-form" name="input-nome" id="input-nome" type="text"><br>

        <label class="label-form" for="input-marca">Marca</label><br>
        <input class="input-form" name="input-marca" id="input-marca" type="text"><br>

        <label class="label-form" for="input-valor">Valor</label><br>
        <input class="input-form" name="input-valor" id="input-valor" type="text"><br>

        <label class="label-form" for="input-qtd">Quantidade</label><br>
        <input class="input-form" name="input-qtd" id="input-qtd" type="number">

      </form>
    </section>
  </main>

</body>