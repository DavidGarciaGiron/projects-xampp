<?php
include '../view/partials/home/head_home.php';
?>

<body class="body-full-page">
<div class="loader">
<div class="spinner">
<div class="double-bounce1">
</div>
<div class="double-bounce2">
</div>
</div>
</div>
<div class="click-capture">
</div>
<div class="menu">
<span class="close-menu icon-cross2 right-boxed">
</span>
<div class="menu-lang right-boxed">
<h4> Imperium <span id="span1">Discipulus</span> </h4>
</div>
<ul class="menu-list right-boxed" style="height: 300px;">
<li data-menuanchor="page1">
<a href="#page1">Inicio</a>
</li>
<li data-menuanchor="page2">
<a href="#page2">Acerca de</a>
</li>
<li data-menuanchor="page3">
<a href="#page3">Noticias</a>
</li>
<li data-menuanchor="page4">
<a href="../view/page/login.php">Ingresar</a>
</li>
</ul>
<div class="menu-footer right-boxed">
<div class="copy">Desarrollado por: <br> - Piero Granda Ricaldi <br> - David García Girón</div>
</div>
</div>
<header class="navbar navbar-2 navbar-white boxed">
<div class="navbar-bg"></div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="#">
<div class="brand-info">
<div class="brand-name">Imperium <span id="span1">Discipulus</span></div>
<div class="brand-text">Administración de Horarios</div>
</div>
</a>
</header>
<div class="pagepiling">
<div data-anchor="page1" class="pp-scrollable text-white section section-1">
<div class="scroll-wrap">
<div class="section-bg">
<video autoplay loop muted playsinline src="../view/assets/img/banner.mp4"></video>       
</div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title hidden-xs hidden-sm"><span>BIENVENIDOS A</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row">
<div class="col-md-8 col-lg-6">
<p class="subtitle-top">Administrador de horarios ónline<br>para instituciones educativas secundarias</p>
<h1 class="display-2 text-white">
<span class="text-primary">Imperium</span> Discipulus.
</h1>
<div class="linePage1"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="page2" class="pp-scrollable section section-2">
<div class="scroll-wrap">
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title text-dark hidden-xs hidden-sm"><span>QUE HACEMOS</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row">
<div class="col-md-5 col-lg-5 about1">
<p class="subtitle-top text-dark">Acerca de</p>
<h2 class="title-uppercase">
Organiza tus Clases <br> <span>fácil &amp; rápido</span> Junto a Nosotros</h2>
Podras crear diferentes horarios de los cuales tus alumnos obtendrán acceso para
conocer las clases que tienen y todos los datos correspondientes a ello.
Con ello buscamos que se lleve un mejor control de las clases.
</div>
<div class="col-md-6 col-lg-4 col-md-offset-1 about2">
<img src="../view/assets/img/undraw_schedule_pnbk.svg">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="page3" class="pp-scrollable text-white section section-3">
<div class="scroll-wrap">
<div class="bg-changer">
<div class="section-bg" style="background-image:url(images/bg/bg2-6.jpg);"></div>
</div>
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title hidden-xs hidden-sm"><span>NOTICIAS</span></div>
<div class="boxed">
<div class="container">
<div class="intro">
<div class="row">
<div class="col-md-12">
<h2 class="title-uppercase text-white">INFÓRMATE JUNTO A NOSOTROS</h2>
<div class="row-project-box row">
<section class="slider-news">
<!-- Highlights -->
<?php
$url = 'http://newsapi.org/v2/top-headlines?sources=google-news-ar&apiKey=b834f31d89d944daa2fc3b488fab60a6';
$response = file_get_contents($url);
$newsdata = json_decode($response);
?>
<div class="news">
<h2 id="noticias">Noticias</h2>
<hr>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="slider-news">
<?php
foreach($newsdata->articles as $news){
?>
<!-- Card -->
<div class="card card-cascade narrower card-news">
<!-- Card image -->
<img class="card-img-top" src="<?php echo $news->urlToImage ?>" alt="News">
<!-- Card content -->
<div class="card-body">
<h5 class=""><?php echo $news->title ?></h5>
<p class=""><?php echo $news->description ?></p>
<p class=""><?php echo $news->author ?></p>
<p class=""><?php echo $news->publishedAt ?></p>
</div>
</div>
<!-- Card -->
<?php } ?>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-anchor="page4" class="pp-scrollable section section-4">
<div class="scroll-wrap">
<div class="scrollable-content">
<div class="vertical-centred">
<div class="boxed boxed-inner">
<div class="vertical-title text-dark hidden-xs hidden-sm"><span>CONTACTANOS</span></div>
<div class="boxed">
<div class="container">
<div class="intro overflow-hidden">
<div class="row">
<div>
<div class="col-md-5">
<h2 class="title-uppercase">Ponerse en Contacto</h2>
<div class="contact-info">
<h5>DESARROLLADORES:
<br>
<span> - Garcia Giron, David </span>
<br>
<span> - Granda Ricaldi, Piero </span>
</h5>
<h5>DIRECCIÓN DE E-MAIL:
<br>
<span> - david.garcia@tecsup.edu.pe </span>
<br>
<span> - piero.granda@tecsup.edu.pe </span>
</h5>
<br>
<a href="#page1">VOLVER AL INICIO</a>
</div>
</div>
<div class="col-md-7 col-lg-4 col-md-offset-1 contact-info">
<img src="../view/assets/img/undraw_buffer_wq43.svg">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include '../view/partials/home/footer_home.php';
?>