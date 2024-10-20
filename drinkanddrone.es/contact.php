<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario de contacto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="full-wrapper">

    <!--? Preloader Start -->
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
                                    <?php
                                    if (isset($_SESSION['usuario'])) {
                                        echo '<span style="color: white; font-size: 18px;">Bienvenido, ' . $_SESSION['usuario'] . '</span>';
                                    }
                                    ?>
                                </div>
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
                                                        <li><a href="blog_details.html">Blog Detalles</a></li>
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
                                <h2>Contacto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Cuéntanos tu proyecto</h2>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="contact_process2.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Cuentanos tu proyecto"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" placeholder="Introduce tu nombre">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingresar email" maxlength="100" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Ingresar Asunto">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <a href="https://www.google.com/maps?q=https://www.google.es/maps/place/IES+Playamar/@36.6340088,-4.4968571,3a,75y,303.69h,90t/data=!3m8!1e1!3m5!1sosNBQFQsWwlsLF3bkdUBJg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DosNBQFQsWwlsLF3bkdUBJg%26cb_client%3Dsearch.gws-prod.gps%26w%3D211%26h%3D120%26yaw%3D303.69385%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!5s0xd72fbc1b9bc1aad:0xa39a217701fd01ca!4m14!1m7!3m6!1s0xd72fb7631731123:0x6b7c81f710da094b!2sIES+Playamar!8m2!3d36.6342925!4d-4.4973946!16s%2Fg%2F11sgj3_h36!3m5!1s0xd72fb7631731123:0x6b7c81f710da094b!8m2!3d36.6342925!4d-4.4973946!16s%2Fg%2F11sgj3_h36?hl=es&entry=ttu" target="_blank"> <span class="contact-info__icon"><i class="ti-home"></i></span></a>
                                <div class="media-body">
                                    <h3>Málaga, España.</h3>
                                    <p>Torremolinos, CP 29620</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>+34 644 23 74 63</h3>
                                    <p>Lunes a Viernes 9:00 a 18:00</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <a href="mailto:info@drinkanddrone.es"><span class="contact-info__icon"><i class="ti-email"></i></span></a>
                                <div class="media-body">
                                    <h3>info@drinkanddrone.es</h3>
                                    <p>¡Envíanos tu consulta en cualquier momento!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Contact Area End -->

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const form = document.getElementById("contactForm");
                form.addEventListener("submit", function(event) {
                    event.preventDefault(); // Evita que el formulario se envíe automáticamente

                    // Validar campos del formulario
                    const message = document.getElementById("message").value.trim();
                    const name = document.getElementById("name").value.trim();
                    const email = document.getElementById("email").value.trim();
                    const subject = document.getElementById("subject").value.trim();

                    // Validar formato de correo electrónico
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    const isEmailValid = emailPattern.test(email);

                    if (message === "" || name === "" || subject === "") {
                        alert("Por favor, completa todos los campos del formulario.");
                    } else if (!isEmailValid) {
                        alert("Por favor, introduce una dirección de correo electrónico válida.");
                    } else {
                        // Si todos los campos están completos y el correo electrónico es válido, enviar el formulario
                        this.submit();
                    }
                });
            });
        </script>


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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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