
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Centros Computo - SJCH - Administrador</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--
    <div id="preloader">
        <div class="loader"></div>
    </div>
    -->

    <!-- Header -->
    <header class="header-area">
        <!-- Buscador -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.php" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Escriba que desea buscar ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Cintillo -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span> 222 229 5500 ext. 1510</span></a>
                            <a href="#"><span>Autoservicios</span></a>
                            <a href="#"><span>Correo BUAP</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Redes Sociales -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fin del cintillo -->

      <!-- Header -->
      <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo-buap.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Menu -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="{{route('index')}}">Inicio</a></li>
                                <li><a href="{{route('alumnosP')}}">Alumnos</a></li>
                                <li><a href="{{route('laboratoriosP')}}">Laboratorios</a></li>
                                <li><a href="{{route('usuariosP')}}">Usuarios</a></li>
                                <li><a href="{{route('materiasP')}}">Materias</a></li>
                            </ul>

                            <!-- Buscador -->
                            <div class="search-btn ml-4">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </di>
                        </div>
                        <!-- Fin del menu-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
  <!-- Fin del header -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/61.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Contacto</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container-fluid">
            <div class="google-maps-contact-content">
                <div class="row">
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Telefono</h4>
                            <p>222 229 5500</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Direccion</h4>
                            <p>IBlvd. Audi Sur, S/N San Jose Chiapa</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Horarios</h4>
                            <p>08:00 am to 15:00 pm</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="col-6 col-lg-3">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Correo</h4>
                            <p>centros_com@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.626015172187!2d-97.77797348468559!3d19.211530252689727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c55802c0e06afb%3A0x80df5aad635a1943!2sComplejo%20Regional%20Centro%20sede%20San%20Jos%C3%A9%20Chiapa%20BUAP!5e0!3m2!1ses-419!2smx!4v1623717648064!5m2!1ses-419!2smx"  allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->

    <!-- Contact Form Area Start -->
    <div class="roberto-contact-form-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Contacta con nosotros</h6>
                        <h2>Deja un mensaje</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <div class="roberto-contact-form">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Tu nombre">
                                </div>
                                <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Tu correo electrónico">
                                </div>
                                <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                    <textarea name="message" class="form-control mb-30" placeholder="Tu mensaje"></textarea>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                    <button type="submit" class="btn roberto-btn mt-15">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->

       <!-- Call To Action Area Start -->
       <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/slider_3.png);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>¡Contacta con nosotros ahora!</h2>
                            <h6>Comuniquese al 222 229 5500 para reservar directamente o para recibir asesoramiento</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->


    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo_buap.png" alt=""></a>

                            <h4> 222 229 5500</h4>
                            <span>centros_com@gmail.com</span>
                            <span>Blvd. Audi Sur,  S/N San Jose Chiapa Puebla</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Horarios</h5>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Horario Matutino</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM- 12:00 PM</span>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Horario Vespertinos</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 13:00 PM- 15:00 PM</span>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Páginas</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Equipo</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Galeria</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Nosotros</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">BUAP</h5> 
                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Calendario Escolar </a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Correo BUAP</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Identidad Gráfica</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Directorio</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear()); </script>  ISTII 2017 </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>