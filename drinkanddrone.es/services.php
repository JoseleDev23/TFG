<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Servicios DrinkandDrone</title>
    <meta name="description" content="Sericios ofrecidos por la empresa de bebidas drinkanddrone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Especifico -->
    <style>
        hr {
            border: 0;
            height: 10px;
            background-image: linear-gradient(to right, #FE5F21, #FC9107, #D6C2A4);
            width: 70%;
            margin: 0 auto;
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo" style="margin-top: 20px;">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt="logo" style="width: 120px; height: 120px"></a>
                                </div>
                                <?php
                                if (isset($_SESSION['usuario'])) {
                                    echo '<span style="color: white; font-size: 18px;">Bienvenido, ' . $_SESSION['usuario'] . '</span>';
                                }
                                ?>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">Nosotros</a></li>
                                                <li><a href="services.php">Servicios</a></li>
                                                <li><a href="projects.php">Proyectos</a></li>
                                                <li><a href="#">Blog (Muy Pronto)</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.php">Blog</a></li>
                                                        <li><a href="#">Blog Detalles</a></li>
                                                        <li><a href="#">Elementos</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <?php
                                                if (isset($_SESSION['usuario'])) {
                                                    echo '<li><a href="presupuestos.php">Presupuestos</a></li>'; // Botón de Presupuestos
                                                    echo '<li><a href="logout.php">Desconectar</a></li>'; // Botón de Desconectar
                                                }
                                                ?>
                                                <!-- Header btn -->
                                                <li>
                                                    <div class="header-right-btn ml-40">
                                                <li>
                                                    <div class="header-right-btn ml-40">
                                                        <a href="#" class="btn"><img src="assets/img/icon/smartphone.svg" alt="Movil">(+34)
                                                            644-23-74-63</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2 ">
            <div class="slider-height2 hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero__caption hero__caption2">
                                <h2>Servicios que ofrecemos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? services area start -->
        <section class="services-section section-padding30 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Preparacion de bebidas</a></h5>
                                <p>Elaboracon de bebidas en tiempo real dentro de las zonas habilitadas
                                    para ello en eventos al aire libre Bodas, Bautizos, Cumpleaños, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Eventos Ambiente Cerrado</a></h5>
                                <p>Descubre cómo podemos hacer que tu evento en un ambiente cerrado sea inolvidable.
                                    Nuestro equipo especializado en eventos de gran escala está listo para ofrecerte una experiencia única.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Eventos Ambiente Abierto</a></h5>
                                <p>Descubre cómo convertir cualquier espacio al aire libre en el escenario perfecto para tu evento.
                                    Desde bodas hasta festivales, nuestro equipo especializado en eventos al aire libre te ofrece
                                    soluciones creativas y personalizadas para garantizar una experiencia única y memorable en medio de la naturaleza.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services0.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Eventos a grande escala</a></h5>
                                <p>Descubre qué podemos hacer que tu evento sea inolvidable.
                                    Nuestro equipo especializado en eventos de gran escala está listo para ofrecerte una experiencia única.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services5.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Fiestas Patronales o Populares</a></h5>
                                <p>"¡Eleve la experiencia en las Fiestas Patronales o Populares con Drink & Drone! Descubra una forma innovadora de disfrutar de sus festividades favoritas con entregas rápidas y emocionantes de bebidas mediante drones accesibles. Evite las colas y disfrute al máximo de la celebración mientras saborea sus bebidas favoritas sin interrupciones."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-40">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/services6.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.php">Especialistas en conciertos</a></h5>
                                <p>"¡Eleva la experiencia de conciertos con Drink & Drone! Descubre cómo transformamos la forma en que disfrutas de la música en vivo con entregas innovadoras y emocionantes de bebidas mediante drones accesibles. Con nuestra tecnología avanzada y enfoque centrado en el cliente, garantizamos que disfrutes de cada actuación sin perder ni un solo compás. Olvídate de las esperas en las colas y sumérgete por completo en la magia de la música mientras nosotros cuidamos de ti. Únete a nosotros y haz de cada concierto una experiencia inolvidable con Drink & Drone."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <hr>
        <div class="container">
            <div class="video-contents">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-10">
                        <div class="section-tittle  mb-90">
                            <h2>¿Cómo Trabajamos?</h2>
                            <p class="tittle-pera1">En Drink and Drone, nuestra metodología de trabajo se centra en brindarte soluciones creativas y personalizadas para tus eventos al aire libre.</p>
                            <p>Nuestro proceso se resume en tres simples pasos:</p>
                            <a href="contact.php" class="btn black-btn">Contactanos</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-8">
                        <div class="edu-details">
                            <!-- single-item -->
                            <div class="single-items mb-50">
                                <span>Háblanos de tu proyecto</span>
                                <p>Comparte con nosotros tu visión y necesidades para el evento. Estamos aquí para escucharte y entender tus expectativas.</p>
                            </div>
                            <!-- single-item -->
                            <div class="single-items single-items2 mb-50">
                                <span>Concertamos una cita</span>
                                <p>Una vez que entendamos tus requisitos, concertaremos una cita para discutir los detalles y planificar el evento según tus especificaciones.</p>
                            </div>
                            <!-- single-item -->
                            <div class="single-items single-items3 mb-50">
                                <span>Nosotr@s programaremos un vuelo</span>
                                <p>Nuestro equipo se encargará de programar y coordinar todos los aspectos logísticos para garantizar un vuelo exitoso y una experiencia inolvidable en tu evento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-wrapper section-bg2" data-background="assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt="" style="width: 120px; height: 120px"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>"Explora nuevos horizontes con Drink and Drone: Innovación que eleva tu experiencia."</p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">644-23-74-63</a></li>
                                            <li class="email"><a href="mailto:info@drinkdrone.es">info@drinkdrone.es</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">Nosotros</a></li>
                                        <li><a href="services.php">Servicios</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Enlaces de interés</h4>
                                    <ul>
                                        <li><a href="https://iesplayamar.es/">IES Playamar</a></li>
                                        <li><a href="contact.php">Comercial</a></li>
                                        <li><a href="blog.php">Futuros proyectos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/?locale=es_ES" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.pinterest.es/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy; <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved |
                                        This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/jose-antonio-muñoz-sarmiento-1b151637" target="_blank">Jose Antonio Muñoz Sarmiento</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>