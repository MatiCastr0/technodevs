<?php
$result = "";
if (isset($_POST['submit'])) {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'technodevscontacto@gmail.com';
    $mail->Password = 'Mati1001-';

    $mail->setFrom($_POST['email'], $_POST['nombre'], $_POST['asunto']);
    $mail->addAddress('technodevscontacto@gmail.com');
    $mail->addReplyTo($_POST['email'], $_POST['nombre'], $_POST['asunto']);

    $mail->isHTML(true);
    $mail->Subject = 'Enviado por ' . $_POST['nombre'];
    $mail->Body = '<h1 align=center> Nombre: ' . $_POST['nombre'] . '<br> Email: ' . $_POST['email'] . '<br> Asunto: ' . $_POST['asunto'] . '<br>Mensaje: ' . $_POST['msg'] . '</h1>';

    if (!$mail->send()) {
        $result = "¡Algo salió mal, intente de nuevo por favor!";
    } else {
        $result = "¡Gracias por contactarnos, enseguida te responderemos!";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Technodevs | Creamos tu página web al menor precio posible</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="páginas web,web,diseño web,html,css,javascript,tiendas,online" name="keywords">
    <meta
        content="En Technodevs hacemos que su sitio web sea visible en todos los dispositivos, posicione rápidamente y efectivamente en Google y se integre con Facebook, Instagram y WhatsApp."
        name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="Technodevs">
    <meta property="og:image" content="img/logo.png">
    <meta property="og:url" content="technodevs.com">
    <meta property="og:site_name" content="Desarrollo Web">
    <meta property="og:description" content="Creamos tu página web al menor precio y en el menor tiempo posible!">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="img/icono.png" rel="shortcut icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">


    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/whatsapp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>


    <div id="preloader"></div>
    <a href="https://api.whatsapp.com/send?phone=542646089521&text=Hola%20te%20consulto%20por..." class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!--==========================
  Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    <img class="" src="img/logo.png" alt="technodevs">
                </div>

                <h1>Bienvenido a Technodevs</h1>
                <h2>Creamos <span class="rotating">blogs web, catálogos web, tiendas online, sitios
                        institucionales</span></h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Conócenos</a>
                    <a href="#services" class="btn-services">Nuestros servicios</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Sección de encabezado
  ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
                <!-- Descomenta abajo si prefieres usar una imagen de texto -->
                <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#portfolio">Diseños</a></li>
                    <li><a href="#team">Equipo</a></li>
                    <li class="menu-has-children"><a href="#contact">Contacto</a>
                        <ul>
                            <li><a href="https://www.instagram.com/technodevs_/" target="_blank">Instagram</a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=542646089521&text=Hola%20te%20consulto%20por..."
                                    target="_blank">Whatsapp</a> </li>
                            <li><a href="mailto:technodevscontacto@gmail.com" target="_blank">E-mail</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
  About Section
  ============================-->
    <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Sobre nosotros</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">En Technodevs hacemos que su sitio web sea visible en todos los
                        dispositivos, posicione rápidamente y efectivamente en Google y se integre con Facebook,
                        Instagram y WhatsApp. </p>

                    </p>
                    <h4 class="about-title">Proveemos un gran servicio e ideas</h4>
                    <p class="about-text">
                        Somos dos estudiantes universitarios con conocimientos avanzados sobre la programación y diseño
                        web, diseñamos tu página a tu gusto en el menor tiempo posible, a un precio accesible! <br>
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!--==========================
  Services Section
  ============================-->
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Nuestros servicios</h3>
                    <div class="section-title-divider"></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-desktop"></i></div>
                    <h4 class="service-title"><a>Soporte todo el año</a></h4>
                    <p class="service-description">Ofrecemos soporte técnico a tu página web los 365 días del año </p>
                </div>

                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-file"></i></div>
                    <h4 class="service-title"><a>El dominio que vos quieras</a></h4>
                    <p class="service-description">Registramos tu página con .com, .ar, .net , .com.ar, .online, etc
                    </p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-road"></i></div>
                    <h4 class="service-title"><a>Tipos de páginas</a></h4>
                    <p class="service-description">Creamos blogs, cátalogos, tiendas, sitios institucionales </p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="service-title"><a>Tu página en pocos días</a></h4>
                    <p class="service-description">Trabajamos con plantillas creadas por nosotros o a pedido del cliente
                    </p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="service-title"><a>El mejor alojamiento</a></h4>
                    <p class="service-description">Alojamos su sitio web en el mejor servidor del mercado (Hostinger)
                        con certificado de seguridad (SSL) </p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                    <h4 class="service-title"><a>Conexión con sus redes</a></h4>
                    <p class="service-description">Integramos todas su redes sociales en su página (WhatsApp, Twitter,
                        Instagram, etc)</p>
                </div>



    </section>

    <!--==========================
  Porfolio Section
  ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Diseños</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Estos son nuestros diseños adaptados para cualquier dispositivo
                        (celular, computadora, tablet, notebook, etc)</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);"
                        href="https://darkangelsanjuan.netlify.app/" target="_blank">
                        <div class="details">
                            <h4>Dark Angel</h4>
                            <span>Catálogo web</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
                        <div class="details">
                            <h4>Diseño disponible</h4>
                            <span>Listo para editar</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
  Team Section
  ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Equipo</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description"></p>
                </div>
            </div>

            <div class="row">


                <div class="col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-2.jpg" alt="matias castro"></div>
                        <h4>Matias Castro</h4>
                        <span>Programador universitario, Programador Web</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-3.jpg" alt="fabricio castro"></div>
                        <h4>Fabricio Castro</h4>
                        <span>Programador universitario, Diseño Web</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
  Contact Section
  ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Contáctanos</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Para contratar nuestro servicio podes contáctarnos a través de los
                        siguentes métodos:</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-md-push-2">
                    <div class="info">
                        <div>
                            <i class="fa fa-instagram"></i>
                            <p> <a class="redes" href="https://www.instagram.com/technodevs_/"
                                    target="_blank">@technodevs_</a> </p>
                        </div>
                        <div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p> <a class="redes"
                                        href="https://api.whatsapp.com/send?phone=542646089521&text=Hola%20te%20consulto%20por..."
                                        target="_blank">+542646089521</a> </p>
                            </div>
                            <div>

                                <i class="fa fa-envelope"></i>
                                <p> <a href="mailto:technodevscontacto@gmail.com"
                                        target="_blank">technodevscontacto@gmail</a></p>
                            </div>

                            <i class="fa fa-map-marker"></i>
                            <p><a href="https://goo.gl/maps/tqCGPMPzFGMRrobx5" target="_blank">Rivadavia, San Juan,
                                    Argentina.</a></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 col-md-push-2">
                    <div class="form">
                        <form method="post" role="form" class="contactForm">

                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" class="rounded-top"
                                    placeholder="Ingrese su nombre" required="" />

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" class="rounded-top"
                                    placeholder="Ingrese su correo" required="" />

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="asunto" class="rounded-top"
                                    placeholder="Asunto" required="" />

                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msg" rows="5" class="rounded-top"
                                    placeholder="Escriba su mensaje" required=""></textarea>

                            </div>
                            <div class="text-center"><button type="submit" value="Enviar mensaje" name="submit">Enviar
                                    mensaje</button> <br><br>
                                <h5 class="resultado"><?= $result; ?></h5>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
  Footer
============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>Technodevs</strong>. Todos los derechos reservados
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/morphext/morphext.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/easing/easing.js"></script>

    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>

    <script src="contactform/contactform.js"></script>


</body>

</html>