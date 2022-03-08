<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Centros Computo - SJCH </title>

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
                            <a href="#"><i class="icon_phone"></i> <span> 222 229 5500 ext. 1525</span></a>
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
                                    <li class="active"><a href="{{route('home')}}">Inicio</a></li>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Mi cuenta
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                    </div>
                                </ul>


                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

      <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/60.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Menu General</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Docente</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


    <br></br>
    <br></br>


    <!-- About start -->
<section id="aboutus" class="about-sec py-0">
    <div class="container">
        <div class="row padding-top">

        </div>

        <div class="row padding-top">
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
            <a href="{{route('softwareG')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="las la-save"></i aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">

                        <i class="las la-save" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Software</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
            <a href="{{route('FallaPerdida')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="las la-exclamation-circle" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                    <i class="las la-exclamation-circle" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Fallas y perdidas</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
            <a href="{{route('prestamosPG')}}">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="las la-keyboard" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="las la-keyboard" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Préstamos</h5>
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
                            <h4> 222 229 5500 ext. 1525</h4>
                            <span>centroschiapa@gmail.com</span>
                            <span>Blvd. Audi Sur,  S/N San Jose Chiapa Puebla</span>
                        </div>
                    </div>
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-2 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Horarios</h5>
                            <!-- Single Blog Area -->
                            <div class="latest-blog-area">
                                <a href="#" class="post-title">Horario Matutino</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 08:00 AM - 15:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-1">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Páginas</h5>
                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                            <li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Inicio</a></li>
                                <li><a href="{{route('usuariosP')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Usuario</a></li>
                                <li><a href="{{route('equiposP')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Equipo</a></li>
                                <li><a href="{{route('fallaP')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Fallas</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">BUAP</h5>
                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="https://www.buap.mx/calendario-escolar"><i class="fa fa-caret-right" aria-hidden="true"></i> Calendario Escolar </a></li>
                                <li><a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office365.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=6345705e-2644-4bd6-91ce-9abcd644db66&protectedtoken=true&claims=%7b%22id_token%22%3a%7b%22xms_cc%22%3a%7b%22values%22%3a%5b%22CP1%22%5d%7d%7d%7d&nonce=637390622188402447.f19b5b33-db40-40aa-aada-6c482fd1a64d&state=DcsxEoAwCABBouNzMASQJM8hMraWfl-Kve4KAOxpS4Uy0E26TDLmNoYSq_bzaXNdSwRjKaGSO7qHo906-InmplHyPer7ef0B&sso_reload=true"><i class="fa fa-caret-right" aria-hidden="true"></i> Correo BUAP</a></li>
                                <li><a href="https://comunicacion.buap.mx/"><i class="fa fa-caret-right" aria-hidden="true"></i> Identidad Gráfica</a></li>
                                <li><a href="https://www.buap.mx/directorio-telefonico"><i class="fa fa-caret-right" aria-hidden="true"></i> Directorio</a></li>
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
