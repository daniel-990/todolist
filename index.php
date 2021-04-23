 <?php
    include "./partials/header.php";
?>
    <section class="contenedor">
        <!--menu-->
        <?php include "./partials/menu.php"; ?>
        <!--menu -->
        <div class="row">
            <div class="col s12 m4 l3">
                <!--nada-->
            </div>
            <div class="col s12 m8 l9">
                <h2 class=""><img class="tamano-img" src="img/app-icon.svg"> TodoList</h2>
                <hr class="hr">
                    <div class="row container">
                        <!--contenido-->
                        <?php include "./componentes/agregar-nota.php"; ?>
                    </div>
            </div>
        </div>
        <hr class="hr2">
        <?php include "./componentes/render-nota.php"; ?>
    </section>
<?php
    include "./partials/footer.php";
?>
