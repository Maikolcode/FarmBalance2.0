<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperar Contraseña</title>
        <link rel="stylesheet" href="../../multimedia/style.css"/> 
        <link rel="icon" href="../../multimedia/img/primerLogo.svg" type="image/png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="../../multimedia/sweetalert2/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <div class="contenedor-correo">
            <div class="contenedor-form">
                <div class="formulario">
                    <form class="col s5" action="../../controlador/envioCorreo.php" method="POST" id="form">
                        <div class="col">
                            <h3 class="aling">Envio de correos<img src="../../multimedia/img/primerLogo.svg" style="height: 50px; width: 50px; margin: 0 10px"/></h3>
                            <div class="input-field col s6">
                                <label class="label-text" for="nombre">Nombre</label>
                                <input style="margin: 10px 0" placeholder="tu nombre" id="nombre" name="nombre" type="text" class="inputs browser-default">
                            </div>
                            <div class="input-field col s6">
                                <label class="label-text" for="correo">Correo</label>
                                <input style="margin: 10px 0" placeholder="tu correo" id="correo" name="correo" type="text" class="inputs browser-default">
                            </div>
                            <div class="input-field col s6">
                                <label class="label-text" for="mensaje">Mensaje</label>
                                <input style="margin: 10px 0" placeholder="tu mensaje" id="mensaje" name="mensaje" type="text" class="inputs browser-default">
                            </div>
                            <button style="width: 20%" class="waves-effect orange btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </script>
        <script src="../../multimedia/js/script.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
