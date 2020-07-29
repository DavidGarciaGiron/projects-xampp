<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="view/assets/img/icon.png">
    <title>Home - Inmperiun Disipulus</title>

    <!-- Style home  -->
    <link rel="stylesheet" href="view/assets/css/style-home.css"/>
    <link rel="stylesheet" href="view/assets/css/animate.css"

    <!-- MDBoostraps CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Header -->
    <header id="header">
        <!--<a class="logo" href="home.php">Impuriun Discipulus</a>-->
        <a class="logo" href="home.php">
            <img src="view/assets/img/logo.png" width="20%">
        </a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Ingresar</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1 class="animated pulse infinite delay-1s animado-2s slow"
                style="font-family: 'Anton', sans-serif;">
                    Imperiun Discipulus
            </h1>
            <h3 style="font-family: 'Shadows Into Light', cursive;">
                    Administrador de horarios online para instituciones educativas secundarias
            </h3>
        </div>
        <video autoplay loop muted playsinline src="view/assets/img/banner.mp4"></video>
    </section>
    <section>
    <!-- Highlights -->
    <?php
    $url = 'http://newsapi.org/v2/top-headlines?sources=google-news-ar&apiKey=b834f31d89d944daa2fc3b488fab60a6';
    $response = file_get_contents($url);
    $newsdata = json_decode($response);
    ?>
    <div class="inner" style="margin-top: 2%;">
        <h2>Noticias</h2>
        <hr>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php
                    foreach($newsdata->articles as $news){
                        ?>
                        <!-- Card -->
                        <div class="card card-cascade narrower card-news">

                            <!-- Card image -->
                            <img class="card-img-top" src="<?php echo $news->urlToImage ?>" alt="News">

                            <!-- Card content -->
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $news->title ?></h4>
                                <p class="card-text"><?php echo $news->description ?></p>
                                <a src="<?php echo $news->url ?>">Enlace Noticia</a>
                                <p class="card-text"><?php echo $news->author ?></p>
                                <p class="card-text"><?php echo $news->publishedAt ?></p>
                            </div>

                        </div>
                        <!-- Card -->
                        <?php
                    }
                    ?>
                </div>
                <br><br>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2>Curabitur ullamcorper ultricies</h2>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Faucibus consequat lorem</h2>
                <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
            </header>
            <div class="testimonials">
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic01.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic03.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <blockquote>
                            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                        </blockquote>
                        <div class="author">
                            <div class="image">
                                <img src="images/pic02.jpg" alt="" />
                            </div>
                            <p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="content">
                <section>
                    <h3>Accumsan montes viverra</h3>
                    <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
                </section>
                <section>
                    <h4>Sem turpis amet semper</h4>
                    <ul class="alt">
                        <li><a href="#">Dolor pulvinar sed etiam.</a></li>
                        <li><a href="#">Etiam vel lorem sed amet.</a></li>
                        <li><a href="#">Felis enim feugiat viverra.</a></li>
                        <li><a href="#">Dolor pulvinar magna etiam.</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Magna sed ipsum</h4>
                    <ul class="plain">
                        <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                        <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                        <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                        <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                    </ul>
                </section>
            </div>
            <div class="copyright">
                &copy; Untitled. Photos <a href="https://unsplash.co">Unsplash</a>, Video <a href="https://coverr.co">Coverr</a>.
            </div>
        </div>
    </footer>

    <!-- MDBoostraps JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

    <!-- Scripts -->
    <script src="view/assets/js/jquery.min.js"></script>
    <script src="view/assets/js/browser.min.js"></script>
    <script src="view/assets/js/breakpoints.min.js"></script>
    <script src="view/assets/js/util.js"></script>
    <script src="view/assets/js/main.js"></script>

    <script>
        (function($) {
            "use strict";
            $('.next').click(function() {
                $('.carousel').carousel('next');
                return false;
            });
            $('.prev').click(function() {
                $('.carousel').carousel('prev');
                return false;
            });
        })
        (jQuery);
    </script>

</body>
</html>