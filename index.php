<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mietka.ONLINE</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="Bootstrap/css/bootstrap-social.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="Bootstrap/js/fontawesome-all.min.js" type="text/javascript"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="css/fontello.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="Bootstrap/js/bootstrap.js"></script>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Grupowanie "marki" i przycisku rozwijania mobilnego menu -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Rozwiń nawigację</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-brand-custom" href="#"><img src="assets/img/logo.svg" class="img-responsive"/></a>
                </div>

                <!-- Grupowanie elementów menu w celu lepszego wyświetlania na urządzeniach moblinych -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="navli"><a href="omnie.php" id="navlink">Home</a></li>
                        <li class="navli"><a href="omnie.php">O mnie</a></li>
                        <li class="navli"><a href="omnie.php">Portfolio</a></li>
                        <li class="navli"><a href="contact.php">Kontakt</a></li>
                    </ul>
                    <!--                    <form class="navbar-form navbar-left" role="search">
                                          <div class="form-group">
                                            <input type="text" class="form-control " placeholder="Szukaj">
                                          </div>
                                          <button type="submit" class="btn btn-default">Wyślij</button>
                                        </form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li id="social-icon">
                            <div class="nav navbar-nav navbar-right icon">
                                <a href="http://github.com/sebmiet">
                                    <i class="icon-github-squared" id="github"></i>
                                </a>
                            </div>
                        </li>
                        <li id="social-icon">
                            <div  class="nav navbar-nav navbar-right icon">
                                <a href="http://facebook.com/sebastian.mietka">
                                    <i class="icon-facebook-squared" id="facebook"></i>
                                </a>
                            </div>
                        </li>
                        <li id="social-icon">
                            <div  class="nav navbar-nav navbar-right icon">
                                <a href="http://twitter.com/sebmiet">
                                    <i class="icon-twitter-squared" id="twitter"></i>
                                </a>
                            </div>
                        </li>
                        <li id="social-icon">
                            <div  class="nav navbar-nav navbar-right icon">
                                <a href="http://twitter.com/sebmiet" >
                                    <i class="icon-linkedin-squared" id="linkedin"></i>
                                </a>

                            </div>
                        </li>                                     
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="carousel-example-generic2" class="carousel slide">
            <!-- Wskaźniki w postaci kropek -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
            </ol>

            <!-- Slajdy -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="assets/img/carousel1.jpg" alt="">
                    <!-- Opis slajdu -->
                    <div class="carousel-caption">
                        <h1>Junior Back-End Developer</h1>
                        <h3>| C# | ASP.NET MVC | PHP | Symphony 2 |</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/carousel2.jpg" alt="">
                    <!-- Opis slajdu -->
                    <div class="carousel-caption">
                        <h1>Junior Front-End Developer</h1>
                        <h3>| HTML | CSS | Bootstrap | JQuery |</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/carousel3.jpg" alt="">
                    <!-- Opis slajdu -->
                    <div class="carousel-caption">
                        <h1>Junior .NET Developer</h1>
                        <h3>| C# | .NET |</h3>
                    </div>
                </div>

            </div>

            <!-- Strzałki do przewijania -->
            <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr class="hr-line" />

                </div>
            </div>
        </div>
        <div class="container"id="art">
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-3">
                        <img src="assets/img/ja.jpg" class="img-thumbnail"/>
                    </div>
                    <div class="col-md-9">
                        <h1 class="title-header">O mnie...</h1>

                        <p>
                            Nazywam się <strong>Sebastian Miętka</strong>. Poszukuję pracy jako programista, żeby móc w dalszym ciągu się rozwijać i 
                            szlifować zdobyte dotychczas umiejętności.
                            Pasjonuję się szeroko pojętym programowaniem, lubię uczyć się nowych rzeczy i zdobywać nowe doświadczenia. Trudno mi wyobrazić sobie lepsze
                            rozwiązanie od pracy, która jednocześnie jest pasją. Dotychczas zawodowo robiłem różne rzeczy, których nie chciałem robić, albo które mnie zwyczajnie nudziły,
                            czas w końcu zacząć robić coś, do czego nie trzeba mnie specjalnie zachęcać, coś co daje satysfakcję z pracy oraz co najważniejsze, nie zatrzumuje mnie
                            w miejscu tylko codziennie rozwija :).
                        </p>

                        <p>
                            Prywatnie od dwóch lat mieszkam ze swoją rodziną poza miastem.
                            Wieś znam od dziecka, często przyjeżdżałem do dziadków, którzy prowadzili niewielkie gospodarstwo rolne, pomagałem im z przyjemnością w czasie wakacji w zbiorach. Dziś sam tu mieszkam 
                            i choć po gospodarstwie dziadków nie zostało nic poza budynkami to ja czuję się tu jak ryba w wodzie. Uwielbiam zajmować się obowiązkami, których przy starym domu nie brakuje.
                        </p>
                        <p>
                            Gdzieś pomiędzy programowaniem, a pracą w ogródku ;) lubię poszaleć w rajdach lub wyścicgach za kierownicą, ale raczej wirtualnie w symulatorach typu Assetto Corsa czy Dirt Rally.
                        </p>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <h3><strong>Poniżej kilka ikonografik przedstawiających technologie w których się rozwijam:</strong></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4" >
                        <img src="assets/img/csharp_logo.png" class="img-rounded" />                
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/NET_logo.svg" class="img-rounded" />
                     
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/php-logo.svg" class="img-rounded" />
                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-4">
                        <img src="assets/img/symfony_logo.svg" class="img-rounded" />   
                     
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/Boostrap_logo.svg" class="img-rounded" />  
                     
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/jquery-logo.png" class="img-rounded" />  
                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-4">
                        <img src="assets/img/HTML5_Logo.svg" class="img-rounded" />  
                     
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/CSS3_logo.svg" class="img-rounded" />  
                     
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/javascript_logo.svg" class="img-rounded" />  
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="art">
                    <?php
                    // put your code here
                    $myString = "<h1>O mnie</h1>";
                    echo $myString;
                    //echo '<form target="Metoda" method="post">';
                    //echo '<input type="text" id="imie" title="Imię"/>';
                    //echo '<input type="submit" value="Wyślij"/>';           
                    //echo '</form>';

                    $name = $_GET['name'];
                    if ($name === 'Sebastian') {
                        $myString = '<h2>Siema stary!!!</h2>';
                        for ($a = 0; $a <= 30; $a++) {
                            echo $myString;
                        }
                    } else {
                        $myString = '<h2>Ktoś Ty???</h2>';
                        echo $myString;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
