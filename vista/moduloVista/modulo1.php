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
<head>
    <style>
        .contenedor-tarjetas{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-content: center;
        }
        .tarjetas-animal{
            margin: 10px;
            width: 90%;
        }
        .seccion-animales{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .contenedor-animales{
            width: 95%;
        }
        
    </style>
</head>
<section class="seccion-animales" id="portfolio">
    <div class="contenedor-animales">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $_SESSION['nombre'] ?> estos son los animales que ofrecemos</h2>
            </div>
        </div>
        <div class="contenedor-tarjetas">
            <?php foreach ($listaAnimales as $animal) { ?>
                <div class="tarjetas-animal">
                    <a class="portfolio-item" style="background-image: url(../../multimedia/img/<?= $animal->icono_animal ?>)" href="">
                        <div class="details">
                            <h4><?= $animal->nombreAnimal ?></h4>
                            <span><?= $animal->pesoAnimal ?> Kg</span>
                            <span>$ <?= $animal->pesoVenta ?></span>
                            <span>Quedan: <?= $animal->cantidadAnimal . " " . $animal->nombreAnimal ?>s </span>
                            <span>Ganancias: $ <?= ($animal->pesoVenta * $animal->cantidadAnimal) ?> </span>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php
include("../template/footer.php");
