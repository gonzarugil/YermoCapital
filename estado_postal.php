<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Inicio</title>
    <!-- TO DO ver que titulo es más apropiado -->
</head>

<body>
    <!-- BARRA NAVEGACION -->
    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper grey darken-3">
                <a href="#" class="brand-logo">Yermo Capital</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a name="Inicio" href="/">Inicio</a></li>
                    <li><a name="Yermo" href="que_visitar.html">Yermo</a></li>
                    <li><a name="Alojamentio" href="alojamientos.html">Alojamiento</a></li>
                    <li><a name="Gastronomia" href="que_comer.html">Gastronomia</a></li>
                    <li><a name="Actividades" href="actividades.html">Actividades</a></li>
                    <li><a name="Postal" href="postal.html">Postal</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a name="Inicio" href="/">Inicio</a></li>
                    <li><a name="Yermo" href="que_visitar.html">Yermo</a></li>
                    <li><a name="Alojamentio" href="alojamientos.html">Alojamiento</a></li>
                    <li><a name="Gastronomia" href="que_comer.html">Gastronomia</a></li>
                    <li><a name="Actividades" href="actividades.html">Actividades</a></li>
                    <li><a name="Postal" href="postal.html">Postal</a></li>
                </ul>

            </div>
        </nav>
    </div>
    <nav>

        <div class="nav-wrapper grey darken-3">
            <span href="#" class="brand-logo center">
                    <audio name="audio" autoplay controls loop>
                        <source src="media/audio/World%20on%20Fire.mp3" type="audio/mpeg">
                    </audio>
                </span>
        </div>
    </nav>
    <!-- CUERPO -->
    <script>
        $(document).ready(function () {
            $('.parallax').parallax();
        });
    </script>
    <div class="">

        <div class="section yellow lighten-3">
            <div class="row container">
                <h1 name="estado" class="header"><?php echo $_GET["estado"]; ?></h1>
                <p>Revise la bandeja de Spam, es posible que se haya enviado a esta carpeta.
                
                ¡Y no dudes en enviar todas las postales que quieras! Gracias por usar nuestros servicios.</p>
                <a href="index.html">Vuelve al indice.</a>
            </div>
        </div>


    </div>
    <!-- FOOTER -->
    <footer class="page-footer grey darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Información Adicional</h5>
                    <p class="grey-text text-lighten-4">Las imagenes y contenidos de esta web son propiedad Bethesda Softworks. Su uso en esta página web es con fines didacticos para una práctica de la Asignatura Multimedia.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Mapa del Sitio</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.html">Inicio</a></li>
                        <li><a class="grey-text text-lighten-3" href="que_visitar.html">Yermo</a></li>
                        <li><a class="grey-text text-lighten-3" href="alojamientos.html">Alojamiento</a></li>
                        <li><a class="grey-text text-lighten-3" href="que_comer.html">Gastronomía</a></li>
                        <li><a class="grey-text text-lighten-3" href="actividades.html">Actividades</a></li>
                        <li><a class="grey-text text-lighten-3" href="postal.html">Postal</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Copyright Victor Muñoz - Gonzalo Ruanes
                <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        </div>
    </footer>
</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">