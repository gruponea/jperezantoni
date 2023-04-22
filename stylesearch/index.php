<?php
/**
 * @package     Gruponea.Site
 * @subpackage  Templates.Gruponea
 * @copyright   Copyright (C) 2010 - 2023.
 * @license     Todos los derechos reservados
 */
defined('_JEXEC') or die;
// Check for a custom CSS file
JHtml::_('stylesheet', 'main.css', array('version' => 'auto', 'relative' => true));
// Adjusting content width
?>
<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
<head>
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://cdn.guianea.com">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-22D0BLFC6C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-22D0BLFC6C');
</script>

<jdoc:include type="head" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="keywords" content="buscar empresas, buscar comercios, buscar profesionales" />
<meta name="description" content="Buscador de Guianea.com" />
<meta name="generator" content="Gruponea.com | © 2010 - 2023" />
<title>Buscar en guianea.com</title>
<link href="https://cdn.guianea.com/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.guianea.com/css/main.css" rel="stylesheet">
<!-- Favicons -->
<link rel="apple-touch-icon" href="https://cdn.guianea.com/images/favicons/apple-touch-icon.png" sizes="180x180" type="image/png">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="https://cdn.guianea.com/images/favicons/safari-pinned-tab.svg" color="#00397b">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon.ico">
<meta name="theme-color" content="#00397b">

</head>
<body>
<div class="container-fluid bg-light">
    <div class="container py-3">
    <div class="pt-0">
    <div class="row align-items-center">
    <div class="col-sm-12 col-md-3 col-lg-2 py-2 text-center"><a class="navbar-brand" href="/"><img src="https://cdn.guianea.com/images/logo/logoguianea.svg" alt="Logo de Guianea.com" width="114" height="34"></a></div>
    <div class="col-sm-12 col-md-4 col-lg-6 py-2 d-none d-sm-block"><jdoc:include type="modules" name="top-b" style="none" /></div>
    <div class="col-sm-12 col-md-5 col-lg-4 py-2 text-center d-sm-block">
	<a href="publicar" class="btn btn-primary rounded-0" style="width:123px;margin:0px 10px 0px 0px;padding:6px 0px 6px 0px;">PUBLICAR</a>
	<a href="ingresar" class="btn btn-danger rounded-0" style="background-color:#E20113;width:123px;margin:0px 0px 0px 0px;padding:6px 0px 6px 0px;">INGRESAR</a>
    </div>
    </div>
    </div>
    </div>
</div>
<!--menumobile-->
<div class="sticky-top d-block d-sm-none">
<nav class="navbar navbar-expand-md navbar-dark text-white" style="background-color: #00397b;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="col py-3">
        <jdoc:include type="modules" name="bannertop" style="none" />
    </div>
  <div class="collapse navbar-collapse" id="navbarMobile">
    <ul class="navbar-nav m-auto">
        <li class="nav-item"><a class="nav-link" href="/">Guianea</a></li>
        <li class="nav-item"><a class="nav-link" href="empresas">Empresas</a></li>
        <li class="nav-item"><a class="nav-link" href="profesionales">Profesionales</a></li>
        <li class="nav-item"><a class="nav-link" href="educacion">Educación</a></li>
        <li class="nav-item"><a class="nav-link" href="salud">Salud</a></li>
        <li class="nav-item"><a class="nav-link" href="turismo">Turismo</a></li>
        <li class="nav-item"><a class="nav-link" href="gastronomia">Gastronomía</a></li>
    </ul>
  </div>
</nav>
</div>
<!--carouseldestacadoportadamobile-->
<div id="carouselmobil" class="carousel slide carousel-fade align-items-center bg-light my-0 d-block d-sm-none" data-ride="carousel">
    <div class="carousel-inner" style="text-align:center">
    <div class="carousel-item active">
        <img src="https://cdn.guianea.com/images/slide/d1/576x720guianea.jpg" class="align-self-center img-fluid" alt="Diseño de páginas web" width="576" height="720" loading="lazy">
    </div>
    <div class="carousel-item">
        <img src="https://cdn.guianea.com/images/slide/d2/576x720gruponea.jpg" class="align-self-center img-fluid" alt="Sistema de gestión para tu negocio" width="720" height="432" loading="lazy">
    </div>
    <div class="carousel-item">
        <img src="https://cdn.guianea.com/images/slide/d3/576x720dinerocontrol.jpg" class="align-self-center img-fluid" alt="Directorio de emrpesas" width="576" height="720" loading="lazy">
    </div>
    </div>
    <a class="carousel-control-prev d-flex justify-content-start" href="#carouselmobil" role="button" data-slide="prev">
    <button type="button" class="btn btn-dark" style="border-radius:0px">
        <span class="carousel-control-prev-icon py-3" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </button>
    </a>
    <a class="carousel-control-next d-flex justify-content-end" href="#carouselmobil" role="button" data-slide="next">
    <button type="button" class="btn btn-dark" style="border-radius:0px">
        <span class="carousel-control-next-icon py-3" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </button>
    </a>
</div>
<!--carouseldestacadoportadadesktop-->
<div id="carouseldesktop" class="carousel slide carousel-fade align-items-center bg-light my-0 d-none d-sm-block" data-ride="carousel">
    <div class="carousel-inner" style="text-align:center">
    <div class="carousel-item active">
        <img src="https://cdn.guianea.com/images/slide/d1/1600x400guianeaBB.jpg" class="align-self-center img-fluid" alt="Diseño de páginas web" width="1600" height="400" loading="lazy">
    </div>
    <div class="carousel-item">
        <img src="https://cdn.guianea.com/images/slide/d2/1600x400gruponea.jpg" class="align-self-center img-fluid" alt="Sistema de gestión para tu negocio" width="1600" height="400" loading="lazy">
    </div>
    <div class="carousel-item">
        <img src="https://cdn.guianea.com/images/slide/d3/1600x400dinerocontrol.jpg" class="align-self-center img-fluid" alt="Directorio de emrpesas" width="1600" height="400" loading="lazy">
    </div>
    </div>
    <a class="carousel-control-prev d-flex justify-content-start" href="#carouseldesktop" role="button" data-slide="prev">
    <button type="button" class="btn btn-dark" style="border-radius:0px">
        <span class="carousel-control-prev-icon py-3" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </button>
    </a>
    <a class="carousel-control-next d-flex justify-content-end" href="#carouseldesktop" role="button" data-slide="next">
    <button type="button" class="btn btn-dark" style="border-radius:0px">
        <span class="carousel-control-next-icon py-3" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </button>
    </a>
</div>

<!--presentación de sección-->
<div class="py-3 mt-3 bg-transparent d-block d-sm-none text-center text-dark display-4 font-italic">Directorio de Empresas, Comercios y Profesionales.</div>
<div class="py-3 m-3 bg-transparent d-none d-sm-block text-center text-dark display-3 font-italic">Directorio de Empresas, Comercios y Profesionales.</div>
<!--menudesktop-->
<div class="sticky-top d-none d-sm-block">
<nav class="navbar navbar-expand-md navbar-dark py-3" style="background-color: #00397b;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDesktop" aria-controls="navbarDesktop" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarDesktop">
    <ul class="navbar-nav m-auto">
        <li class="nav-item display-4"><a class="nav-link" href="/">Guianea</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="empresas">Empresas</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="profesionales">Profesionales</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="educacion">Educación</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="salud">Salud</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="turismo">Turismo</a></li>
        <li class="nav-item display-4"><a class="nav-link" href="gastronomia">Gastronomía</a></li>
    </ul>
  </div>
</nav>
</div>
<!--Contenido-->
<section id="mainbody">
<div class="container">
	<div class="row">
        <div class="py-2 col" id="component">
		    <div class="py-5">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            </div>
        </div>
<?php if (JRequest::getVar( 'view' ) != 'article') : ?>
        <div class="sticky-top d-none d-xl-block">
        <div class="sticky-top py-5 col-sm-12 col-md-4">
            <jdoc:include type="modules" name="sidebar-right" />
        </div>
        </div>
<?php endif; ?>
    </div>
</div>
</section>
<!--Bottom-->
<section id="bottom">
</section>
<!--Footer-->
<section id="footer">
<div class="container-fluid mt-5 py-5 text-center bg-dark text-white">
<p class="mb-0">Diseño y Desarrollo | <strong>
<a title="Agencia de Marketing Digital" href="https://www.instagram.com/gruponea/" class="text-white" target="_blank" rel="author noopener noreferrer">@gruponea</a></strong> &amp; <strong>
<a title="Empresario" href="https://www.instagram.com/jperezantoni/" class="text-white" target="_blank" rel="author noopener noreferrer">@jperezantoni</a>
</strong></p>
<p class="mb-0">© 2023 Guianea.com | Todos los derechos reservados</p>
</div>
    <div class="container-fluid">
    <jdoc:include type="modules" name="debug" style="none" />
    </div>
</section>
    <script src="https://cdn.guianea.com/js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.guianea.com/js/ls.bgset.min.js"></script>
    <script src="https://cdn.guianea.com/js/lazysizes.min.js"></script>
    <script src="https://cdn.guianea.com/js/popper.min.js" async></script>
    <script src="https://cdn.guianea.com/js/bootstrap.min.js" async></script>

</body>
</html>