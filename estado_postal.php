<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Turismo en Yermo Capital - Postal Enviada</title>
    <meta name="description" content="Pagina de Estado de la Postal de la página web de turismo en Yermo Capital, lugar ficticio procedente de la saga de videojuegos
          de Bethesda Fallout, Practica Final de la Asignatura Multimedia"/>
    <meta name="keywords" content="Yermo,Turismo,Fallout"/>
    <meta name="author" content="Victor Muñoz Reyes y Gonzalo Ruanes Gil"/>
</head>

<body>
    <!-- BARRA NAVEGACION -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".button-collapse").sideNav();
        });
    </script>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper grey darken-3">
                <a href="#" class="brand-logo">Yermo Capital</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse big-text">
                    +
                </a>

                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a  href="index.html">Inicio</a></li>
                    <li><a  href="que_visitar.html">Yermo</a></li>
                    <li><a  href="alojamientos.html">Alojamiento</a></li>
                    <li><a  href="que_comer.html">Gastronomia</a></li>
                    <li><a  href="actividades.html">Actividades</a></li>
                    <li><a  href="postal.html">Postal</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a  href="index.html">Inicio</a></li>
                    <li><a  href="que_visitar.html">Yermo</a></li>
                    <li><a  href="alojamientos.html">Alojamiento</a></li>
                    <li><a  href="que_comer.html">Gastronomia</a></li>
                    <li><a  href="actividades.html">Actividades</a></li>
                    <li><a  href="postal.html">Postal</a></li>
                </ul>

            </div>
        </nav>
    </div>
    <nav>

        <div class="nav-wrapper grey darken-3">
            <span class="brand-logo center">
                    <audio autoplay="autoplay" controls="controls" loop="loop">
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
    <div>

        <div class="section yellow lighten-3">
            <div class="row container">
                <h1 name="estado" class="header"><?php echo htmlspecialchars($_GET["estado"], ENT_QUOTES, 'UTF-8'); ?></h1>
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
                    <span class="white-text">Información Adicional</span>
                    <p class="grey-text text-lighten-4">Las imagenes y contenidos de esta web son propiedad Bethesda Softworks. Su uso en esta página web es con fines didacticos para una práctica de la Asignatura Multimedia.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <span class="white-text">Mapa del Sitio</span>
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
            </div>
        </div>
    </footer>
</body>

</html>