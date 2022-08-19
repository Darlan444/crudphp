<?php
include 'config/conexao.php';
include 'includes/header.php';
include 'includes/nav.php';
?>


<!-- <main class="principal">
    <section class="section-principal">

        <div class="produto">
            <div class="img-produto">
                <img class="img-card" src="img/REDLINE.png" alt="img-produto">
            </div>
            <div class="span-produto">
                <span class="span-card">NOME PRODUTO</span>
                <button class="btn-card" disabled="disabled">DETALHES</button>
            </div>
        </div>

    </section>
</main> -->
<?php
include 'model/view-model.php';
    showProdutos();
?>


<?php
include 'includes/footer.php';
?>