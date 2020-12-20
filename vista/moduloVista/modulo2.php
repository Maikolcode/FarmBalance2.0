<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('location: ../../index.php');
} else if (isset($_SESSION['nombre'])) {
    include '../../controlador/conectionDB.php';
    include '../template/header.php';

    $sentencia = $conexion->query("SELECT * FROM farmbalance.productos_consumo;");
    $listaProductos = $sentencia->fetchAll(PDO::FETCH_OBJ);
}
?>
<section id="portfolio">
    <div class="container wow fadeInUp"> 
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $_SESSION['nombre'] ?> estos son los productos que ofrecemos</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($listaProductos as $productos) { ?>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(../../multimedia/img/<?= $productos->rutaImg ?>)" href="">
                        <div class="details">
                            <h4><?= $productos->nombreProducto?></h4>
                            <span>$ <?= $productos->precioProducto ?></span>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
include("../template/footer.php");

