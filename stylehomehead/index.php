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
//sacamos generator
$this->setGenerator(null);
// retiramos los links a js bootstrap que tiene joomla
unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery.min.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-noconflict.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/jquery-migrate.min.js']);
unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);
unset($this->_scripts[JURI::root(true).'/media/system/js/caption.js']);
if (isset($this->_script['text/javascript']))
{$this->_script['text/javascript'] = preg_replace('%jQuery\(window\).on\(\'load\',\s*function\(\)\s*\{\s*new\s*JCaption\(\'img.caption\'\)\;\s*\}\)\;\s*%', '', $this->_script['text/javascript']);
if (empty($this->_script['text/javascript']))
unset($this->_script['text/javascript']);}
?>
<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
<head>
<link rel="preload" as="image" href="https://cdn.guianea.com/images/portada/576x720guianea202303cirfren.webp" />
<link rel="preload" as="image" href="https://cdn.guianea.com/images/portada/576x720gruponea.webp" />
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="preconnect" href="https://apis.google.com">
<link rel="preconnect" href="https://stats.g.doubleclick.net">
<link rel="preconnect" href="https://www.google-analytics.com">
<link rel="preconnect" href="https://www.google.com">
<link rel="preconnect" href="https://cdn.guianea.com" />

<jdoc:include type="head" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="generator" content="Gruponea.com | © 2010 - 2023" />
<link rel="stylesheet" href="https://cdn.guianea.com/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.guianea.com/css/main.css" >
<!-- Favicons -->
<link rel="apple-touch-icon" href="https://cdn.guianea.com/images/favicons/apple-touch-icon.png" sizes="180x180" type="image/png">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="https://cdn.guianea.com/images/favicons/safari-pinned-tab.svg" color="#00397b">
<link rel="icon" href="https://cdn.guianea.com/images/favicons/favicon.ico">
<meta name="theme-color" content="#00397b">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-22D0BLFC6C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-22D0BLFC6C');
</script>

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
</div></div></div></div></div>

<!--menumobile-->
<div class="sticky-top d-block d-sm-none"><nav class="navbar navbar-expand-md navbar-dark text-white" style="background-color: #00397b;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="col py-3"><jdoc:include type="modules" name="bannertop" style="none" /></div>
<div class="collapse navbar-collapse" id="navbarMobile">
<ul class="navbar-nav m-auto">
<li class="nav-item"><a class="nav-link" href="empresas">Empresas</a></li>
<li class="nav-item"><a class="nav-link" href="profesionales">Profesionales</a></li>
<li class="nav-item"><a class="nav-link" href="educacion">Educación</a></li>
<li class="nav-item"><a class="nav-link" href="salud">Salud</a></li>
<li class="nav-item"><a class="nav-link" href="turismo">Turismo</a></li>
<li class="nav-item"><a class="nav-link" href="gastronomia">Gastronomía</a></li>
</ul></div></nav></div>
<div><jdoc:include type="modules" name="portada" style="none" /></div>

<!--presentación de sección-->
<div class="py-3 mt-3 bg-transparent d-block d-sm-none text-center text-dark display-4 font-italic">Estar en Google es más fácil con Guianea.com</div>
<div class="py-3 m-3 bg-transparent d-none d-sm-block text-center text-dark display-3 font-italic">Estar en Google es más fácil con Guianea.com</div>

<!--menudesktop-->
<div class="sticky-top d-none d-sm-block">
<nav class="navbar navbar-expand-md navbar-dark  py-3" style="background-color: #00397b;">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDesktop" aria-controls="navbarDesktop" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarDesktop">
<ul class="navbar-nav m-auto">
<li class="nav-item display-4"><a class="nav-link" href="empresas">Empresas</a></li>
<li class="nav-item display-4"><a class="nav-link" href="profesionales">Profesionales</a></li>
<li class="nav-item display-4"><a class="nav-link" href="educacion">Educación</a></li>
<li class="nav-item display-4"><a class="nav-link" href="salud">Salud</a></li>
<li class="nav-item display-4"><a class="nav-link" href="turismo">Turismo</a></li>
<li class="nav-item display-4"><a class="nav-link" href="gastronomia">Gastronomía</a></li>
</ul></div></nav></div>
<!--Contenido-->
<section id= secciones>
<div class="container">
<div id=top>
<div class="pt-2">
<div class="mt-2 mb-3 p-3 bg-light text-dark text-center"><h1 class="text-dark display-4 font-italic">Guianea.com - Directorio de Empresas, Comercios y Profesionales</h1></div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/top/d1x1200x600dinerocontrol.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">DINERO CONTROL</b>
<h2 class="display-4 font-italic">Tener organizada tu empresa es un buen negocio.</h2>
<p class="lead my-3">Gestioná clientes, organizá proveedores, controlá tu stock, supervisá contrataciones, gestioná tareas y más.</p>
<p class="lead mb-0"><a href="/dinerocontrol" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">GUIANEA</b>
<h3 class="mb-1">Directorio de empresas, comercios y profesionales.</h3>
<p class="card-text mb-auto">Publicá la información de tu empresa y presentala a miles de usuario de Guianea que nos visitan desde google.</p>
<a href="/guianea" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/top/d3x200x250guianea.jpg" class="img-fluid lazyload" alt="Directorio de empresas, comercios y profesionales" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">GRUPONEA</b>
<h3 class="mb-1">Marketing y desarrollo web y applicaciones.</h3>
<p class="mb-auto">Profesionales certificados con experiencia en diseño gráfico, web, SEO, App's, redes sociales y marketing.</p>
<a href="/gruponea" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/top/d2x200x250gruponea.jpg" class="img-fluid lazyload" alt="Agencia de marketing, publicidad digital y desarrollo de páginas web" width="200" height="250">
</div></div></div></div></div></div>  
<div id=empresas>
<div class="pt-2">
<div class="p-3 mb-3 bg-light text-dark">EMPRESAS de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/empresas/d1x1200x600puertopalos.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">PUERTO PALOS</b>
<h2 class="display-4 font-italic">Zapatillas Montagne. Calidad superior en tus pies.</h2>
<p class="lead my-3">Outdoor, calzados y productos de las siguientes marcas: Salomon, Montagne, Hi-Tec, Columbia, Next y muchas más.</p>
<p class="lead mb-0"><a href="/puertopaloszapatillas" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">JER FLOR LIBRERÍA</b>
<h3 class="mb-1">Librería, fotocopias e impresiones.</h3>
<p class="card-text mb-auto">Contamos con útiles escolares, artículos de librería para tu oficina o puesto de trabajo. Ventas por mayor y menor.</p>
<a href="/jerflor" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/empresas/d2x200x250jerflorlibreria.jpg" class="img-fluid lazyload" alt="Jer Flor Libreria" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">NORDESTE BATERIAS</b>
<h3 class="mb-1">Baterías y heramientas especializadas.</h3>
<p class="mb-auto">Con la compra de nuestras baterías para autos, motos o camiones, vamos a tu domicilio GRATIS y realizamos el cambio.</p>
<a href="/nordestebaterias" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/empresas/d3x200x250nordestebatedias.jpg" class="img-fluid lazyload" alt="Nordeste Baterías y Herramientas" width="200" height="250">
</div></div></div></div></div></div>
<div id=profesionales>
<div class="pt-2">
<div class="p-3 mb-3 bg-light text-dark">PROFESIONALES  de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/profesionales/d1x1200x600jabornicky.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">ESTUDIO JABORNICKY & ASOCIADOS</b>
<h2 class="display-4 font-italic">Estudio Jurídico - Legales.</h2>
<p class="lead my-3">Civil, Contenciosos, Salud, Seguros, Comercial, Laboral, Penal, Tributario, Económico, Aduanero, Comercio Exterior...</p>
<p class="lead mb-0"><a href="/estudiojabornicky" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">ALVARENGA & ASOCIADOS</b>
<h3 class="mb-1">Estudio Contable. Servicios profesionales.</h3>
<p class="card-text mb-auto">Servicios laborales y previsionales. Servicios impositivos. Asesoramiento y tramites para jubilaciones</p>
<a href="/alvarengayasociados" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/profesionales/d2x200x250alvaregayasociados.jpg" class="img-fluid lazyload" alt="Estudio Contable Alvarenga" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">ESCRIBANIA ROMERO & COMAPÑIA</b>
<h3 class="mb-1">Escribanía, escribanos, notarios.</h3>
<p class="mb-auto">Contratos en general, de trabajo, título de propiedad, poderes, Certificaciones, Gestoría. Compra-venta...</p>
<a href="/escribaniaromero" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/profesionales/d3x200x250escribaniaromero.jpg" class="img-fluid lazyload" alt="Escribanía Romero" width="200" height="250">
</div></div></div></div></div></div>
<div id=educacion>
<div class="pt-2">
<div class="p-3 mb-3 bg-light text-dark">EDUCACIÓN de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/educacion/d1x1200x600institutofae.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">INSTITUTO FAE</b>
<h2 class="display-4 font-italic">Excelencia en formación profesional, presencial y a distancia.</h2>
<p class="lead my-3">Auxiliar de farmacia, Secretariado administrativo, contable e impositivo, Gestión en recursos humanos, Ayudante en ...</p>
<p class="lead mb-0"><a href="/institutofae" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">IGI INSTITUTO GASTRONÓMICO</b>
<h3 class="mb-1">Con IGI podés ser un chef profesional.</h3>
<p class="card-text mb-auto">Con filiales en toda la Argentina, Bolivia, Chile, Paraguay, México, Brasil y Ecuador. Inscripciones abiertas.</p>
<a href="/igi" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/educacion/d2x200x250igi.jpg" class="img-fluid lazyload" alt="Instituto de Gastronomía Internacional" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">INSTITUTO EL CURSILLO</b>
<h3 class="mb-1">Apoyo Secundario y Universitario.</h3>
<p class="mb-auto">Contamos con el servicio de cursos intensivos para los ingresos a las carreras de Medicina y Ciencias Exactas.</p>
<a href="/elcursillo" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/educacion/d3x200x250elcursillo.jpg" class="img-fluid lazyload" alt="Instituto de apoyo secundario y universitario" width="200" height="250">
</div></div></div></div></div></div>
<div id=salud>
<div class="pt-2">
<div class="p-3 mb-3 bg-light text-dark">SALUD de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/salud/d1x1200x600carloskrause.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">CARLOS KRAUSE</b>
<h2 class="display-4 font-italic">Cirujano Oftalmólogo, especialista del Nordeste Argentino.</h2>
<p class="lead my-3">Disponemos del nuevo CENTURION Vision System, que es una plataforma tecnológica ultrasónica innovadora.</p>
<p class="lead mb-0"><a href="/carloskrause" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">OPTICA JUAN CARLOS</b>
<h3 class="mb-1">Lentes recetados, anteojos y gafas de sol.</h3>
<p class="card-text mb-auto">Monofocales, multifocales y bifocales, lentes recetados, recetas en el día, reparación de lentes, anteojos y gafas...</p>
<a href="/opticajuancarlos" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/salud/d2x200x250opticajuancarlos.jpg" class="img-fluid lazyload" alt="Óptica Juan Carlos" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">RM ODONTOLOGIA</b>
<h3 class="mb-1">Implantes dentales y estética dental.</h3>
<p class="mb-auto">Rehabilitación oral, ortodoncia para niños y adultos, blanqueamiento dental, estética dental, cirugías.</p>
<a href="/rmodontologia" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/salud/d3x200x250rmodontologia.jpg" class="img-fluid lazyload" alt="RM Odontología" width="200" height="250">
</div></div></div></div></div></div>
<div id=turismo>
<div class="pt-2">
<div class="p-3 mb-3 bg-light text-dark">TURISMO de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/turismo/d1x1200x600yacaretour.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">YACARÉ TOURS</b>
<h2 class="display-4 font-italic">Agencia de viajes y turismo. Travel agency.</h2>
<p class="lead my-3">Disfrutá de Misiones, Corrientes, Iguazú, Misiones Jesuíticas, Esteros del Iberá y Saltos del Mocona.</p>
<p class="lead mb-0"><a href="/yacaretours" class="text-white font-weight-bold">Ver información...</a></p>
</div></div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">TURISMO VALLE HERMOSO</b>
<h3 class="mb-1">Agencia de turismo nacional e internacional.</h3>
<p class="card-text mb-auto">Información y venta de paquetes nacionales e internacionales. Transporte, alojamiento, traslados y excursiones.</p>
<a href="/misiones-posadas-turismo-valle-hermoso" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/turismo/d2x200x250turismovallehermoso.jpg" class="img-fluid lazyload" alt="Turismo Valle Hermoso" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">CABAÑAS LA ARANDÚ</b>
<h3 class="mb-1">Complejo de cabañas con playa privada,</h3>
<p class="mb-auto">Un lugar naturalmente maravilloso, con pequeñas cabañas rodeadas de pura naturaleza misionera.</p>
<a href="/misiones-san-ignacio-la-arandu-nandejara" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/turismo/d3x200x250cabañaslaarandu.jpg" class="img-fluid lazyload" alt="Cabañas en Misiones" width="200" height="250">
</div></div></div></div></div></div>
<div id=gastronomia>
<div class="pt-2">
<div class="py-3">
<div class="p-3 mb-2 bg-light text-dark">GASTRONOMÍA de Misiones, Corrientes, Chaco y Formosa</div>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark align-self-center img-fluid lazyload" data-bgset="https://cdn.guianea.com/images/inicio/gastronomia/d1x1200x600dulcecukierna.jpg">
<div class="col-md-6 px-0">
<b class="d-inline-block mb-2 text-white">DULCE CUKIERNA</b>
<h2 class="display-4 font-italic">Repostería y gastronomía.</h2>
<p class="lead my-3">Tortas para cumpleaños, mesa de dulces para eventos, tartas, postres, comidas para el almuerzo y cena.</p>
<p class="lead mb-0"><a href="/dulcecukierna" class="text-white font-weight-bold">Ver información...</a></p>
</div>
</div>
<div class="row mb-2">
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">CREMMALU</b>
<h3 class="mb-1">Pastelería hecha con mucho amor.</h3>
<p class="card-text mb-auto">Emprendimientos de tortas y postres artesanales. Solicitá presupuestos o hacenos tu pedido.</p>
<a href="/cremmalu" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/gastronomia/d2x200x250cremmalu.jpg" class="img-fluid lazyload" alt="Cremmalu Pastelería" width="200" height="250">
</div></div></div>
<div class="col-md-6">
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
<div class="col p-4 d-flex flex-column position-static">
<b class="d-inline-block mb-2 text-secondary">BIG BURGUER</b>
<h3 class="mb-1">Delívery de pizzas, hamburguesas y lomos.</h3>
<p class="mb-auto">Hamburguesas, Lomos, Sandwiches, Pizzas, Milanesas, Papas Fritas, Picadas, Empanadas y bebidas.</p>
<a href="/bigburguerpizzeria" class="stretched-link">Ver información</a>
</div>
<div class="col-auto d-none d-lg-block">
<img data-src="https://cdn.guianea.com/images/inicio/gastronomia/d3x200x250bigburguer.jpg" class="img-fluid lazyload" alt="Pizzería Delivery" width="200" height="250">
</div></div></div></div></div></div></div>
</section>
<div class="container py-3">
<p style="text-align: center;"><strong>¡Hola!</strong></p>
<p style="text-align: center;"><strong>Publica</strong> o <strong>edita</strong> tu anuncio, en lo</p>

<p style="text-align: center;">+ visto en <strong>Corrientes, Chacho, Formosa y Misiones</strong></p>
<p style="text-align: center;"><a class="btn btn-primary btn-lg rounded-0" style="width: 300px; margin: 10px 10px 0px 0px; padding: 10px 0px 10px 0px;" target="_self" href="publicar">Publica tu empresa o negocio</a></p>
<div class="py-3 bg-transparent d-block text-center"><h3 class="text-dark display-4 font-italic">Estar en Google es más fácil con Guianea.com</h3></div>
<div class="p-3 mb-3 bg-light text-dark text-center">
    <strong>
    <p>
    Adherirte al débito automático tiene beneficios
    </p>
    <a title="WhatsApp Gruponea.com" href="https://wa.me/5493516573114/" target="_blank" rel="author noopener noreferrer">+ 54 9 351 657 3114</a></strong>
</div>
</div>
<section id="bottom"></section>
<section id="footer">
<div class="container-fluid mt-5 py-5 text-center bg-dark text-white">
<p class="mb-0">Diseño y Desarrollo | <strong>
<a title="Agencia de Marketing Digital" href="https://www.instagram.com/gruponea/" class="text-white" target="_blank" rel="author noopener noreferrer">@gruponea</a></strong> &amp; <strong>
<a title="Empresario" href="https://www.instagram.com/jperezantoni/" class="text-white" target="_blank" rel="author noopener noreferrer">@jperezantoni</a>
</strong></p>
<p class="mb-0">© 2023 Guianea.com | Todos los derechos reservados</p>
</div>
<div class="container-fluid"><jdoc:include type="modules" name="debug" style="none" /></div>
</section>
<script src="https://cdn.guianea.com/js/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.guianea.com/js/ls.bgset.min.js"></script>
<script src="https://cdn.guianea.com/js/lazysizes.min.js"></script>
<script src="https://cdn.guianea.com/js/popper.min.js" async></script>
<script src="https://cdn.guianea.com/js/bootstrap.min.js" async></script>

</body>
</html>