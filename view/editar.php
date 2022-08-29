<?php
include '../includes/header2.php';
include '../model/show-edit-model.php';
?>


<body class="bd-cadastro">

  <?php
    include "../includes/nav2.php";
  ?>

  <main class="form-main">
    <section class="form-section">
      <form class="form" method="POST" action="../model/edt-model.php">

        <span class="span-form">EDITAR</span>

            <?php showInfos();?>

        <button class="btn-form">EDITAR</button>

      </form>
    </section>
  </main>

<?php include"../includes/footer2.php";?>  

</body>