<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperar Contraseña</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div class="row s1">
            <form class="col s5" action="../../controlador/envioCorreo.php" method="POST">
                <div class="col">
                    <div class="input-field col s6">
                        <input placeholder="tu nombre" id="nombre" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="tu correo" id="correo" name="correo" type="text" class="validate">
                        <label for="correo">Correo</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="tu mensaje" id="mensaje" name="mensaje" type="text" class="validate">
                        <label for="mensaje">Mensaje</label>
                    </div>
                    <button>Enviar</button>
                </div>
            </form>
        </div>

        <script src="../../multimedia/js/script.js"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
