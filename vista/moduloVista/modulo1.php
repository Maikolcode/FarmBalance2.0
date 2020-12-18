<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('location: ../../index.php');
} else if (isset($_SESSION['nombre'])) {
    include '../../controlador/conectionDB.php';
    include '../template/header.php';

    $sentencia = $conexion->query("SELECT * FROM farmbalance.animal;");
    $listaAnimales = $sentencia->fetchAll(PDO::FETCH_OBJ);
}
?>
<section id="portfolio">
    <div class="container wow fadeInUp"> 
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $_SESSION['nombre'] ?> estos son los animales que ofrecemos</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($listaAnimales as $animal) { ?>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(../../multimedia/img/<?= $animal->icono_animal ?>)" href="">
                        <div class="details">
                            <h4><?= $animal->nombreAnimal ?></h4>
                            <span><?= $animal->pesoAnimal ?> Kg</span>
                            <span>$ <?= $animal->pesoVenta ?></span>
                            <span>Quedan: <?= $animal->cantidadAnimal . " " . $animal->nombreAnimal ?>s </span>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
include("../template/footer.php");
