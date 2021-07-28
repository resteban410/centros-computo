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
        <link href="../css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/line-awesome.min.css" rel="stylesheet">
    <link href="../css/line-awesome.min.css" rel="stylesheet">

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

   <!-- Body -->
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
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Reserva Ahora</a>
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
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Reserva Ahora</a>
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
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Reserva Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    

    <br></br>
    <br></br>


    <!-- About start -->
<section id="aboutus" class="about-sec py-0">
    <div class="container">
        <div class="row padding-top">
            
        </div>

        <div class="row padding-top">
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
            <a href="{{route('equiposP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="las la-laptop"></i aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        
                        <i class="las la-laptop" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Equipos</h5>
                    </a>    
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
            <a href="{{route('autoaccesoP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="las la-user" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-user" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Alumnos</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
            <a href="{{route('adeudoP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="las la-exchange-alt" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-exchange-alt" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Adeudos</h5>
                </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('fallaP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-exclamation-triangle" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-exclamation-triangle" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Fallas</h5>
                </div>
                </a>
            </div>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('faltaP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-stop-circle" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-stop-circle" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Faltantes</h5>
                </div>
            </a>
            </div>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('softwareP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-save" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-save"  aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Software</h5>
                </div>
            </a>
            </div>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('horarioP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-clock" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-clock" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Horarios</h5>
                </div>
            </a>
            </div>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('periodoP')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-calendar" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-calendar aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Periodos</h5>
                </div>
            </div>
            </a>
        </div>
    </div>
</section>


    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                       
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
