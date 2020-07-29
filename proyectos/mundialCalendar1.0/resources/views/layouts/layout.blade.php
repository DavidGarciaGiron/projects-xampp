<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="https://image.freepik.com/vector-gratis/copa-mundial-rusia-2018-diseno-de-fondo_17005-83.jpg" type="imagen/x-icon">
    <style type="text/css" media="screen">
    body{
      background-image: url(https://www.bestwallpaperhd.com/wp-content/uploads/2015/09/Football-Ball.jpg);
      background-attachment: fixed; 
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat

     } 
    h1{
      font-family: 'Book Antiqua', Palatino, 'Palatino Linotype', 'Palatino LT STD', Georgia, serif;
      font-size: 80px;
      color: white;
    }
    div#titulo{
      background: rgb(0,0,0,0.4);
      width:100vw; 
      border:1 white;
    }
    table{
      background: rgb(0,0,0,0.4);
      font-family: Palatino, 'Palatino Linotype',  'Palatino LT STD', 'Book Antiqua', Georgia, serif;
      color:white;
      font-size: 24px;
      border-color: white;
      width: 100%;height: 100%;
    }
    img{
      width: 200px;
      height: 100px;
      margin:0;

    }
    nav{
      width: 100%;
      padding: 10;
    }
    div#img{
      margin-left: 150px;
    }



    </style>
    
  </head>
  <body>
    <div class="container-fluid"style="margin-top: 50px; " >
      @yield('content')
    </div>
  </body>

</html>