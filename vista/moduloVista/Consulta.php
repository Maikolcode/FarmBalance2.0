<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../multimedia/main.css" type="text/css" rel="stylesheet">
    <link href="../multimedia/microtip.min.css" type="text/css" rel="stylesheet">
    <title>FarmBalaance</title>
</head>
<body class="bodyConsulta">
    <header class="headerPage">
            <p class="titleMs">Bienvenido al aplicativo de</br>
                Gestion de animales</p>
        <div>
            <img src="../multimedia/img/FinaLiMAGE.svg" class="farmAnimal" alt="farmAnimal">
        </div>
    </header>
    <aside class="asideConsultar">
        <div class="circleLogo">
            <img src="../multimedia/img/primerLogo.svg" alt="imgLogo" class="sizeImageLogo">
        </div>
        <nav>
            <div class="containerLink">
                <a href="#">Consultar animal</a>
            </div>
            <div class="containerLink">
                <a href="#">Agregar animal</a>
            </div>
        </nav>
        <div>
            <img src="../multimedia/img/personBuy.svg" height="150" width="150">
        </div>
    </aside>
    <section class="consultaSection">
        <h3 class="titleH3">Consultar Animal</h3>
        <div class="itemsElements">
            <div class="circleAnimal">
                <img src="../multimedia/img/chicken.svg" class="imgAnimal">
            </div>
            <div>
                <p class="margin0">Especie</p>
                <label>Gallina/Pollo</label>
            </div>
            <div>
                <div class="disFlex">
                    <label>Cantidad</label>
                    <span aria-label="Cantidad Animales a ingresar" data-microtip-position="top-left" role="tooltip">
                        <img src="../multimedia/img/help.svg" height="20" width="20">
                    </span>
                </div>
                <input type="text" class="inputAnimal">
            </div>
        </div>
    </section>
</body>
</html>