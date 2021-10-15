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
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--
    <div id="preloader">
        <div class="loader"></div>
    </div>
    -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.php" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Escriba que desea buscar ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>

        <!-- Top Header Area Start -->
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
                            <!-- Top Social Area -->
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
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{route('index')}}"><img src="img/core-img/logo-buap.png" alt=""></a>

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
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="{{route('index')}}">Inicio</a></li>
                                    <li><a href="{{route('alumnosP')}}">Alumnos</a></li>
                                    <li><a href="{{route('laboratoriosP')}}">Laboratorios</a></li>
                                    <li><a href="{{route('usuariosP')}}">Usuarios</a></li>
                                    <li><a href="{{route('materiasP')}}">Materias</a></li>
                                </ul>

                                <!-- Search -->
                                <div class="search-btn ml-4">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </di>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/62.png);" data-img-url="img/bg-img/62.png">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">BUAP SAN JOSE CHIAPA</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">CENTROS DE COMPUTO</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/60.png);" data-img-url="img/bg-img/60.png">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">BUAP SAN JOSE CHIAPA</h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">CENTROS DE COMPUTO</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/61.png);" data-img-url="img/bg-img/61.png">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">BUAP SAN JOSE CHIAPA</h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">CENTROS DE COMPUTO</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    

    <br></br>
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/core-img/icon-1.png" alt="">
                            <a href="{{route('equiposP')}}">
                                <h5>Registro de equipos</h5></a>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('autoaccesoP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Autoacceso Alumnos</h5></a>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('adeudoP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Adeudos Alumnos</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('fallaP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Fallas de equipos</h5></a>
                        </div>
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('perdidaP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Perdidas de equipos</h5></a>
                        </div>
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('softwareP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Software - Equipos</h5></a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('asignacionP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Asignación de horarios</h5></a>
                        </div>
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('periodoP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Periodos</h5></a>
                        </div>
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <a href="{{route('marcaP')}}">
                            <img src="img/core-img/icon-2.png" alt="">
                            <h5>Marcas</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Service Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

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
                            <a href="#" class="footer-logo"><img src="../img/core-img/logo_buap.png" alt=""></a>
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
