<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Proyectos drinkanddrone</title>
    <meta name="description" content="Diferentes proyectos que hemos realizado">
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
                                                <li><a href="contact.php">Contacto</a></li>
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
                                <h2>Proyectos</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>Proyectos Recientes</h2>
                <p>En Drink and Drone, nos enorgullece compartir algunos de nuestros proyectos más recientes. Desde bodas y eventos corporativos hasta festivales y conciertos al aire libre, hemos tenido el privilegio de participar en una amplia variedad de eventos emocionantes.</p>
                <p class="pera-bottom">Nuestro equipo de expertos en drones trabaja diligentemente para capturar momentos únicos y ofrecer experiencias visuales inolvidables a nuestros clientes. Cada proyecto es una oportunidad para demostrar nuestra creatividad, habilidad técnica y compromiso con la excelencia.</p>
            </div>

        </div>
        <!-- Visit Our Tailor End -->
        <!--? services area start -->
        <section class="services-section services-section2 pb-padding  fix">
            <div class="container">
                <div class="custom-row">
                    <div class="services-active">
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services4.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Concierto En Torremolinos (Málaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services5.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Fiesta de la cerveza en Torre del Mar (Málaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services6.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Concierto Bruch in the park (Malaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services01.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Ejemplo de Boda</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix section-bg" data-background="assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-9">
                        <div class="about-caption">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active dot-style">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Recibir mi bebida desde el cielo a través de un drone durante un concierto fue emocionante.
                                            La entrega automatizada creó un momento memorable y demostró cómo la tecnología puede mejorar nuestra experiencia en eventos abarrotados.
                                            ¡Una forma brillante de disfrutar de la música en vivo!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/silvia1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Silvia Martin </span>
                                            <p>Asistente a concierto</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Recibir una copa de champagne entregada por un drone durante la boda fue una experiencia inolvidable.
                                            La combinación de innovación y celebración creó un momento mágico que quedará grabado en mi memoria para siempre.
                                            ¡Una boda única y llena de sorpresas!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/Manuel1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Manuel Bautista</span>
                                            <p>Asistente a evento de boda</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Experimentar cómo un drone te entregaba una jarra helada de cerveza durante la fiesta fue simplemente genial.
                                            La fusión de tecnología y diversión añadió un toque extra de emoción a la celebración.
                                            ¡Una experiencia única que hizo que la fiesta fuera aún más inolvidable!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/alfonso1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Alfonso Ballesteros </span>
                                            <p>Asistente a fiesta de la cerveza</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->
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