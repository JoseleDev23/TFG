<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Drink and Drone</title>
    <meta name="description" content="Sitio web de drones y servicios de bebidas en eventos multitudinarios en España ">
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

    <!-- Otros estilos necesarios -->
    <style>
        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
            margin-top: 50px;
        }

        body {
            background-color: #D6C2A4;
        }

        footer {
            padding-bottom: 0px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo" style="margin-top: 20px;">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt="" style="width: 120px; height: 120px"></a>
                                </div>
                            </div>
                            <!-- Menú -->
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <!-- Opciones de menú -->
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="login-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="login-wrapper">
                            <h2>Login</h2>
                            <form role="form" method='post' action='login.php'>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type='email' name='inputEmail' id='email' maxlength="50" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Contraseña:</label>
                                    <input type='password' name='inputPassword' id='password' maxlength="50" class="form-control">
                                </div>
                                <button type="submit" name="enviar" class="btn btn-primary">Entrar</button>
                                <button type="button" onclick="window.location.href='formulario_registro.php'" class="btn btn-secondary">Registrarse</button>
                                <!-- Aquí se mostrará el mensaje de error -->
                                <?php
                                if (!empty($error)) {
                                    echo "<p style='color: red; font-weight: bold'>" . $error . "</p>";
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                            <li class="email"><a href="mailto:info@drinkanddrone.es">info@drinkanddrone.es</a></li>
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
                                        <li><a href="blog.html">Futuros proyectos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Siguenos</h4>
                                    <ul>
                                        <li><a href="https://www.instagram.com/drinkanddrone.es/" target="_blank">Instagram</a></li>
                                        <li><a href="https://www.youtube.com/channel/UCpY0Fj8l8oHk5N4Yp6vBQ1A" target="_blank">Youtube</a></li>
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
                                        This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Jose Antonio Muñoz Sarmiento</a>
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

    <!-- JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Otros scripts necesarios -->
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