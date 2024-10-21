<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Drink and Drone</title>
    <meta name="description" content="Website for drones and beverage services at mass events in Spain">
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
    <style>
        /* Styles for the cookies banner */
        #cookie-banner {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #1d1d1d;
            padding: 15px;
            text-align: center;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            z-index: 9999;
        }

        #cookie-banner p {
            color: #ffffff;
        }

        #accept-cookies-btn {
            background-color: #ff4b2b;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #accept-cookies-btn:hover {
            background-color: #ff7043;
        }

        body>main>section.testimonial-area.testimonial-padding.fix.section-bg>div>div>div>div>div>button.slick-prev.slick-arrow {
            right: 97px;
        }
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="" style="width: 70px; height: 60px">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
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
                                    echo '<span style="color: white; font-size: 18px;">Welcome, ' . $_SESSION['usuario'] . '</span>';
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
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="projects.php">Projects</a></li>
                                                <li><a href="#">Blog (Coming Soon)</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.php">Blog</a></li>
                                                        <li><a href="#">Blog Details</a></li>
                                                        <li><a href="#">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="https://drinkanddrone.es/" hreflang="es-ES" lang="es-ES" class="menu-link"><span class="text-wrap"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAflBMVEX/AAD9AAD3AADxAADrAAD/eXn9bGz8YWH8WVn6UVH5SEj5Pz/3NDT0Kir9/QD+/nL+/lT18lDt4Uf6+j/39zD39yf19R3n5wDxflXsZ1Pt4Y3x8zr0wbLs1NXz8xPj4wD37t3jmkvsUU/Bz6nrykm3vJ72IiL0FBTyDAvhAABEt4UZAAAAX0lEQVR4AQXBQUrFQBBAwXqTDkYE94Jb73+qfwVRcYxVQRBRToiUfoaVpGTrtdS9SO0Z9FR9lVy/g5c99+dKl30N5uxPuviexXEc9/msC7TOkd4kHu/Dlh4itCJ8AP4B0w4Qwmm7CFQAAAAASUVORK5CYII=" alt="Español" width="16" height="11" style="width: 16px; height: 11px;"></span></a></li>
                                                <li><a href="https://drinkanddrone.es/" hreflang="en-US" lang="en-US" class="menu-link"><span class="text-wrap"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;"></span></a></li>
                                                <?php
                                                if (isset($_SESSION['usuario'])) {
                                                    echo '<li><a href="presupuestos.php">Quotes</a></li>'; // Quotes Button
                                                    echo '<li><a href="logout.php">Log out</a></li>'; // Log Out Button
                                                    // echo '<li><a href="formulario_presupuesto.php">New Quote</a></li>'; // New Quote Button
                                                }
                                                ?>
                                                <!-- Header btn -->
                                                <li>
                                                    <div class="header-right-btn ml-40">
                                                        <a href="#" class="btn"><img src="assets/img/icon/smartphone.svg" alt="Phone">(+34)
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
        <!-- slider Area Start-->
        <section class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Drink & Drone<br> From the Sky to Your Hand
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">Innovating the experience of mass events.
                                        Exciting and fast delivery of beverages with accessible drones.
                                        Enjoy the event queue-free, with integrated technology, and a committed corporate culture.
                                    </p>
                                    <?php
                                    // Check if there's a logged-in user
                                    if (isset($_SESSION['usuario'])) {
                                        // If the user is logged in, show the "Log out" button
                                        echo '<a href="logout.php" class="hero-btn" data-animation="fadeInUp" data-delay="0.7s">Log out</a>';
                                    } else {
                                        // If the user is not logged in, show the "Login" button
                                        echo '<a href="indexLogin.php" class="hero-btn" data-animation="fadeInUp" data-delay="0.7s">Login</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9 col-md-12">
                                <div class="hero__caption text-center">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Drink & Drone<br> From the Sky to Your Hand
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay="0.4s">Innovating the experience of mass events.
                                        Exciting and fast delivery of beverages with accessible drones.
                                        Enjoy the event queue-free, with integrated technology, and a committed corporate culture.
                                    </p>
                                    <?php
                                    // Check if there's a logged-in user
                                    if (isset($_SESSION['usuario'])) {
                                        // If the user is logged in, show the "Log out" button
                                        echo '<a href="logout.php" class="hero-btn" data-animation="fadeInUp" data-delay="0.7s">Log out</a>';
                                    } else {
                                        // If the user is not logged in, show the "Login" button
                                        echo '<a href="indexLogin.php" class="hero-btn" data-animation="fadeInUp" data-delay="0.7s">Login</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding30">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2>Unparalleled Experience <br>in Mass Events:</h2>
                            </div>
                            <p class="about-cap-top">Offering a unique and unparalleled experience in mass events by
                                introducing drone beverage delivery.</p>
                            <p>Eliminate long waits in lines, allowing attendees to fully enjoy the event without
                                interruptions. This proposal significantly enhances the customer experience at concerts,
                                festivals, and other events.</p>
                            <a href="contact.php" class="btn black-btn">Let's Get Started!</a>
                        </div>
                    </div>
                    <div class="offset-xl-0 col-xl-6 offset-lg-0 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img src="assets/img/gallery/about1.png" alt="">
                            </div>
                            <div class="img-cap">
                                <span>Many</span>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!-- Services area start -->
        <section class="services-section pb-padding fix">
            <div class="container">
                <div class="custom-row">
                    <div class="services-active">
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Beverage Preparation</a></h5>
                                    <p>Real-time beverage preparation within designated areas at outdoor events such as weddings, baptisms, birthdays, etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services2.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Closed Environment Events</a></h5>
                                    <p>Discover how we can make your event in a closed environment unforgettable.
                                        Our team specialized in large-scale events is ready to offer you a unique experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services3.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Open Environment Events</a></h5>
                                    <p>Discover how to turn any outdoor space into the perfect setting for your event.
                                        From weddings to festivals, our team specialized in outdoor events offers
                                        creative and personalized solutions to ensure a unique and memorable experience amidst nature.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services0.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Large-Scale Events</a></h5>
                                    <p>Discover what we can do to make your event unforgettable.
                                        Our team specialized in large-scale events is ready to offer you a unique experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-end fix" data-background="assets/img/gallery/video-bg.png">
            <!-- Video icon -->
            <div class="video-icon">
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=rrtplhR08Zo"><i class="fas fa-play"></i></a>
            </div>
            <div class="container">
                <div class="video-contents">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-5 col-md-10">
                            <div class="section-tittle  mb-90">
                                <h2>How We Work?</h2>
                                <p class="tittle-pera1">At Drink and Drone, our work methodology focuses on providing you with creative and personalized solutions for your outdoor events.</p>
                                <p>Our process is summarized in three simple steps:</p>
                                <a href="contact.php" class="btn black-btn">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="edu-details">
                                <!-- single-item -->
                                <div class="single-items mb-50">
                                    <span>Tell us about your project</span>
                                    <p>Share your vision and needs for the event with us. We're here to listen and understand your expectations.</p>
                                </div>
                                <!-- single-item -->
                                <div class="single-items single-items2 mb-50">
                                    <span>We schedule a meeting</span>
                                    <p>Once we understand your requirements, we'll schedule a meeting to discuss the details and plan the event according to your specifications.</p>
                                </div>
                                <!-- single-item -->
                                <div class="single-items single-items3 mb-50">
                                    <span>We'll schedule a flight</span>
                                    <p>Our team will take care of scheduling and coordinating all logistical aspects to ensure a successful flight and an unforgettable experience at your event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->

        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>Recent Projects</h2>
                <p>At Drink and Drone, we're proud to share some of our recent projects. From weddings and corporate events to festivals and outdoor concerts, we've had the privilege of participating in a wide variety of exciting events.</p>
                <p class="pera-bottom">Our team of drone experts works diligently to capture unique moments and deliver unforgettable visual experiences to our clients. Each project is an opportunity to showcase our creativity, technical skill, and commitment to excellence.</p>
            </div>

        </div>
        <!-- Visit Our Tailor End -->
        <!-- Services area start -->
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
                                    <h5><a href="services.php">Concert in Torremolinos (Málaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services5.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Beer Festival in Torre del Mar (Málaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services6.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Brunch Concert in the Park (Malaga)</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-cat">
                                <div class="cat-icon">
                                    <img src="assets/img/gallery/services01.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.php">Wedding Example</a></h5>
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
                                        <p>"Receiving my drink from the sky via a drone during a concert was thrilling.
                                            The automated delivery created a memorable moment and showcased how technology can enhance our experience at crowded events.
                                            A brilliant way to enjoy live music!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/silvia1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Silvia Martin </span>
                                            <p>Concert Attendee</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Receiving a glass of champagne delivered by a drone during the wedding was an unforgettable experience.
                                            The combination of innovation and celebration created a magical moment that will be etched in my memory forever.
                                            A wedding that was unique and full of surprises!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/Manuel1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Manuel Bautista</span>
                                            <p>Wedding Event Attendee</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Experiencing a drone delivering you an ice-cold pitcher of beer during the party was simply cool.
                                            The fusion of technology and fun added an extra touch of excitement to the celebration.
                                            A unique experience that made the party even more unforgettable!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/Alfonso1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Alfonso Ballesteros </span>
                                            <p>Beer Festival Attendee</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                        <p>"Seeing a drone approaching with a glass of wine just at the right moment added a touch of magic to the night.
                                            This unique experience made the party even more memorable. Thank you for making our concert unforgettable!"</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="assets/img/icon/Laura1.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Laura Aguilar </span>
                                            <p>Indoor Concert Attendee</p>
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
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-wrapper">
                            <div class="row">
                                <div class="col-xl-12 col-lg-11 col-md-8 col-lg-7 col-sm-9">
                                    <div class="section-tittle mb-30">
                                        <h2>Tell Us About Your Project</h2>
                                        <p>What do you need from us to make your dream come true?</p>
                                    </div>
                                </div>
                            </div>
                            <form id="contact-form" action="contact_process.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box user-icon mb-15">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-box email-icon mb-15">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-15">
                                            <textarea name="message" id="message" placeholder="Tell us about your project"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="submit-btn2" type="submit">Send Inquiry</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-img">
                <img src="assets/img/gallery/contact-img.png" alt="">
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
                                        <a href="index_enUS.php"><img src="assets/img/logo/logo2_footer.png" alt="" style="width: 120px; height: 120px"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>"Explore new horizons with Drink and Drone: Innovation that elevates your experience."</p>
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
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Useful Links</h4>
                                    <ul>
                                        <li><a href="https://iesplayamar.es/">IES Playamar</a></li>
                                        <li><a href="contact.php">Commercial</a></li>
                                        <li><a href="blog.php">Future Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Follow Us</h4>
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
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        All rights reserved |
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

    <!-- COOKIE -->

    <div id="cookie-banner" class="cookie-banner">
        <p>This website uses cookies to ensure you get the best experience on our website.</p>
        <button id="accept-cookies-btn">Accept cookies</button>
    </div>

    <!-- ¿Cuándo usar cada uno?
    
    PHP: Útil para establecer cookies basadas en la lógica del servidor, como la autenticación de usuarios o la personalización del contenido según la sesión.

    JavaScript: Perfecto para interactuar con cookies de forma dinámica en el navegador del cliente, como recordar preferencias del usuario o personalizar la interfaz de usuario sin necesidad de recargar la página. -->



    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JAVASCRIPT here -->

    <!-- JS COOKIE -->
    <script>
        // Función para establecer una cookie
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // Función para obtener el valor de una cookie
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // Función para eliminar una cookie
        function deleteCookie(cname) {
            document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }

        // Verificar si la cookie de aceptación existe
        window.onload = function() {
            var cookieAccepted = sessionStorage.getItem("cookiesAccepted");
            if (cookieAccepted !== "true" && !window.history.state) {
                // Si la cookie no existe en sessionStorage y no hay marca en el historial, mostrar el banner de aceptación de cookies
                document.getElementById("cookie-banner").style.display = "block";
            }
        };

        // Al hacer clic en el botón de aceptar cookies
        document.getElementById("accept-cookies-btn").addEventListener("click", function() {
            // Establecer la cookie de aceptación en sessionStorage
            sessionStorage.setItem("cookiesAccepted", "true");
            // Ocultar el banner de aceptación de cookies
            document.getElementById("cookie-banner").style.display = "none";
            // Marcar en el historial que el usuario aceptó las cookies
            history.replaceState({
                cookiesAccepted: true
            }, "");
        });

        // Manejar el evento popstate para verificar si el usuario vuelve atrás en el historial
        window.addEventListener("popstate", function(event) {
            var cookieAccepted = sessionStorage.getItem("cookiesAccepted");
            if (cookieAccepted !== "true" && !event.state) {
                // Si la cookie no existe en sessionStorage y no hay marca en el historial, mostrar el banner de aceptación de cookies
                document.getElementById("cookie-banner").style.display = "block";
            }
        });

        // Borrar la cookie cuando se cierra el navegador
        window.addEventListener("beforeunload", function() {
            deleteCookie("cookiesAccepted");
        });
    </script>

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