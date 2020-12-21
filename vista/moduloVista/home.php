<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('location: ../../index.php');
}
    include '../../controlador/conectionDB.php';

    $sentencia = $conexion->query("SELECT * FROM farmbalance.animal;");
    $listaAnimales = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/> 
        <style>
            .bienvenida,
            .opciones-modulos{
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .contenido-textos{
                width: 80%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .contenedor-modulos{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 50px;
            }
            .txt{
                margin: 25px 0;
                font-size: 20px;
                font-weight: 300;
                text-align: center;
            }
            .seccion-uno{
                background-color: rgba(255, 255, 46, 0.4);
                display: flex;
                width: 100%;
            }
            .seccion,
            .modulo-consulta{
                display: flex;
                flex-direction: column;
            }
            .seccion{
                justify-content: flex-start;
                width: 22%;
                padding: 15px;
                background-color: rgba(255, 255, 46, 0.9);
                border-radius: 0 40px 40px 0;
            }
            .modulo-consulta{
                width: 78%;
                margin-left: 40px;
                padding: 20px;
            }
            .ficha-animal{
                display: flex;
                flex-direction: row;
            }
            .cont-img{
                display: flex;
                justify-content: center;
                width: 50%;
                border-radius: 200px;
                margin: 10px;
                background-color: white;
            }
            .botones-mod{
                display: flex;
                flex-direction: column;
            }
            .ficha-animal{
                display: flex;
                margin-top: 35px;
                align-items: center;
            }
            .animales-funcion{
                width: 100%;
            }
            .accion{
                display: flex;
                align-items: center;
                width: 60%;
            }

        </style>
    </head>
    <body>  
        <?php
        include('../template/header.php');
        ?>

        <div class="bienvenida"> 
            <div class="contenido-textos">
                <h2 style="margin: 55px 20px 5px 20px; padding: 0">Bienvenido a Farm Balance</h2>
                <div class="separador"></div>
                <p class="txt">Desde ahora sabras cuanto animales debes de comprar para conseguir ganancias a futuro, ademas de aprender un poco mas de los animales y de su cuidado, te daremos la orientación segun el animal que escojas, claramente cuidando tu bolsillo. <br><br> ¿Que esperas para comenzar?</p>
            </div>
        </div>
        <div class="parallax-container" style="height: 200px">
            <div class="parallax"><img src="../../multimedia/img/home.jpg" style="width:100%;"></div>
        </div>
        <div class="opciones-modulos">
            <div class="contenedor-modulos">
                <div class="seccion-uno">
                    <div class="seccion">
                        <span class="cont-img">
                            <img src="../../multimedia/img/primerLogo.svg">
                        </span>
                        <div class="botones-mod">
                            <p style="font-size: 20px; font-weight: 400; margin: 20px 0 0 0 ">¡Orientate conociendo nuestra granja!</p>
                            <div class="separador" style="width: 90%;"></div>
                            <a href="modulo1.php" style="margin: 20px 0" >Consultar Animales</a>
                            <a href="modulo1.php" style="margin: 20px 0">Consultar Productos</a>
                        </div>
                        <img src="../../multimedia/img/personBuy.svg" style="height: 100px; width: 100px">
                    </div>
                    <div class="modulo-consulta">
                        <h3>Comencemos con cuantos y cuales animales</h3>
                        <div class="animales-funcion">
                            <?php foreach ($listaAnimales as $animal){?>
                            <div class="ficha-animal">
                                <img src="../../multimedia/img/<?=$animal->icono_animal?>" style="height:100px; width: 100px; margin: 0 20px; border-radius: 300px">
                                <div style="margin: 0 30px"><p style="font-size: 30px; font-weight: 500"><?= $animal->nombreAnimal ?></p></div>
                                <form class="accion">
                                    <p style="margin-right: 10px">Cuantos animales?</p>
                                    <input style="width: 15%" type="number" name="eleccion">
                                    <a class="waves-effect waves-light btn" style="width: 19%;margin-left:10px">Calcular</a>
                                </form>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('../template/footer.php');
        ?>
    </body>
</html>

