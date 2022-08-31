<?php
include '../includes/header2.php';
?>


<body class="bd-cadastro">

  <?php
  include "../includes/nav2.php";
  ?>

  
  <main class="form-main">
    <section class="form-section">
      <form class="form" method="POST" action="../model/cadastro-model.php">

        <span class="span-form">CADASTRO</span>

        <label class="label-form" for="nome_produto">Nome do Produto</label><br>
        <input class="input-form" name="nome_produto" id="nome_produto" type="text" spellcheck="true" required><br>

        <label class="label-form" for="marca">Marca</label><br>
        <input class="input-form" name="marca" id="marca" type="text" spellcheck="true" required><br>

        <label class="label-form" for="valor">Valor</label><br>
        <input class="input-form" name="valor" id="valor" type="text" placeholder="R$ 000,00" required><br>
        <script src="../script/mask-valor.js"></script>

        <label class="label-form" for="quantidade">Quantidade</label><br>
        <input class="input-form" name="quantidade" id="quantidade" type="number" min="1" required><br>

        <label class="label-form" for="img">Imagem</label><br>
        <input class="input-form" name="img" id="img" type="text" placeholder="Link da imagem" required><br>

        <button class="btn-form">Cadastrar</button>

      </form>
    </section>
  </main>

  <?php include "../includes/footer2.php"; ?>

</body>