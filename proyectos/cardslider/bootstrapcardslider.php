<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cardslider.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Untitled Document</title>
</head>

<style>
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background: #f2f2f2;
	font-family: 'Oswald', sans-serif;
}

.contenedor {
	width: 90%;
	height: 500px;
	margin: 15px auto;
	padding: 20px;
    padding-left: 10%;     
	background: #fff;
	overflow: auto;
	font-family: 'Open Sans';
	border-radius: 4px;
}

.contenedor h1 {
	font-size: 30px;
	font-weight: 500;
	color: #414141;
}

.contenedor hr {
	background: #46AD2C;
	width: 40%;
	height: 3px;
	border: none;
	margin: 15px 0;
	border-radius: 50px;
}

p {
	margin-bottom: 20px;
	line-height: 28px;
	font-size: 16px;
	color: #414141;
}

/* Scroll Personalizado */

.contenedor::-webkit-scrollbar {
	width: 7px;
}

.contenedor::-webkit-scrollbar-thumb {
	background: #46AD2C;
	border-radius: 5px;
    
}
.contenedor::-webkit-scrollbar-thumb:hover {
    background: #b3b3b3;
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}
.contenedor::-webkit-scrollbar-thumb:active {
    background-color: #999999;
}
</style>

<body>

    <div class="contenedor">
        <!-- Highlights -->
        <?php
            $url = 'http://newsapi.org/v2/top-headlines?sources=google-news-ar&apiKey=b834f31d89d944daa2fc3b488fab60a6';
            $response = file_get_contents($url);
            $newsdata = json_decode($response);
        ?>
        <div class="inner" style="margin-top: 2%;">
            <h1>Noticias de la Actualidad</h1>
            <hr>
                        <?php
                            foreach($newsdata->articles as $news){
                        ?>
                        <!-- Card -->
                        <div class="card card-cascade narrower card-news" style="width:30%; margin-bottom:40px; float: left; margin-right: 20px;">                                    
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
		
	</div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>