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
                            <div  class="nav navbar-nav navbar-right icon facebook">
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
            <!-- kropki -->
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
                        <h1>| C# | ASP.NET MVC | PHP | Symfony |</h1>
                        <h3>Umiejętności Back-End</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/img/carousel2.jpg" alt="">
                    <!-- Opis slajdu -->
                    <div class="carousel-caption">
                        <h1>| HTML | CSS | Bootstrap | JQuery |</h1>
                        <h3>Umiejętności Front-End</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/img/create.png" alt="">
                    <!-- Opis slajdu -->
                    <div class="carousel-caption">
                        <h1>| C# | .NET |</h1>
                        <h3>Junior .NET Developer</h3>
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
        <!--        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="hr-line" />
        
                        </div>
                    </div>
                </div>-->

        <!--     TREŚĆ     -->

        <!-- o mnie -->
        <div class="container"id="art">
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-3">
                        <img src="assets/img/ja.jpg" class="img-thumbnail"/>
                    </div>
                    <div class="col-md-9">
                        <h1 class="title-header">O mnie...</h1>
                        <p>
                            Nazywam się <strong>Sebastian Miętka</strong>. Szukam pierwszej pracy jako programista, żeby móc się w dalszym ciągu rozwijać i 
                            szlifować zdobyte dotychczas umiejętności. Chciałbym uczestniczyć w jakimś projekcie przy którym mógłbym poszerzać swoje umiejętności.
                            Pasjonuję się szeroko pojętym programowaniem, lubię uczyć się nowych rzeczy i zdobywać nowe doświadczenia. Trudno mi wyobrazić sobie lepsze
                            rozwiązanie od pracy, która jednocześnie jest pasją. Dotychczas zawodowo robiłem różne rzeczy, których nie chciałem robić, albo które mnie zwyczajnie nudziły,
                            czas w końcu zacząć robić coś, do czego nie trzeba mnie specjalnie zachęcać, coś co daje satysfakcję z pracy oraz co najważniejsze, nie zatrzumuje mnie
                            w miejscu tylko codziennie rozwija :).
                        </p>
                        <p>
                            Prywatnie od dwóch lat mieszkam ze swoją rodziną poza miastem.
                            Wieś znam od dziecka, często w przeszłości, będąc jeszcze w wieku szkolnym, przyjeżdżałem tu do dziadków, którzy prowadzili niewielkie gospodarstwo rolne, pomagałem im z ogromną przyjemnością 
                            w zbiorach podczas wakacji. Dziś sam tu mieszkam 
                            i choć po gospodarstwie dziadków nie zostało nic poza budynkami to ja czuję się tu jak ryba w wodzie. Bardzo dużą frajdę sprawia mi zajmowanie się obowiązkami przydomowymi, 
                            których zwłaszcza przy starym domu z połowy XIX w. (1860 r.) nie brakuje.
                        </p>
                        <p>
                            Gdzieś pomiędzy programowaniem, a pracą w ogródku ;) lubię poszaleć w samochodowych rajdach lub wyścicgach za kierownicą, ale raczej wirtualnie, w symulatorach typu Assetto Corsa czy Dirt Rally.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <h3 class="subtitle-text"><strong>Poniżej kilka ikonografik przedstawiających technologie w których się rozwijam:</strong></h3>
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
                        <img src="assets/img/php_logo.png" class="img-rounded" />

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
        <!------------------------------------------------------>
        <!--        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="hr-line" />
        
                        </div>
                    </div>
                </div>-->

        <!-- PORTFOLIO -->
        <div class="container"id="art">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-header title-header-center">Moje portfolio</h1>
                    <h3 class="subtitle-text">Dotychczas wykonane przeze mnie projekty webowe.</h3>
                </div>               
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-6 col-mf-6-portfolio-gallery">
                        <div class="overlay">
                            <a href="http://mietka.online"><img src="assets/img/old_site.png" class="img-rounded-portfolio" /></a>
                            <a href="http://mietka.online" class="overlay link"><h3 class="subtitle-text subtitle-text-overlay">Projekt mojej poprzedniej strony</h3></a>
                        </div>
                    </div> 
                    <div class="col-md-6 col-mf-6-portfolio-gallery" >
                        <div class="overlay">
                            <img src="http://placehold.it/500x250" />
                            <a href="#" class="overlay link"><h3 class="subtitle-text subtitle-text-overlay">Wolne miejsce?... Na Twoją stronę :)</h3></a>
                        </div>
                    </div>    

                </div>               
            </div>
            <div class="row">
                <div class="col-md-12" >
                    <div class="col-md-6 col-mf-6-portfolio-gallery">
                        <div class="overlay">
                            <img src="http://placehold.it/500x250" />
                            <a href="#" class="overlay link"><h3 class="subtitle-text subtitle-text-overlay">Wolne miejsce?... Na Twoją stronę :)</h3></a>
                        </div>
                    </div> 
                    <div class="col-md-6 col-mf-6-portfolio-gallery" >
                        <div class="overlay">
                            <img src="http://placehold.it/500x250" />
                            <a href="#" class="overlay link"><h3 class="subtitle-text subtitle-text-overlay">Wolne miejsce?... Na Twoją stronę :)</h3></a>
                        </div>
                    </div>      
                </div>               
            </div>
        </div>
        <!------------------------------------------------------>
        <!--        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="hr-line" />
        
                        </div>
                    </div>
                </div>-->
        <!-- OFERTA -->
        <div class="container"id="art">
            <div class="row">
                <div class="col-md-12">
                </div>
                <h1 class="title-header title-header-center">Kontakt</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3 class="subtitle-text-nopadding">Potrzebujesz strony internetowej?</h3>
                        <p class="small-p">Jeśli twoja odpowiedź brzmi <strong>TAK</strong> to mogę zaoferować Ci stworzenie 
                            takiej strony. Daj mi tylko znać jaka miałaby być to strona, może wystarczy tylko strona typu wizytówka, która jednocześnie
                            będzie najtańszą opcją, a może potrzebujesz
                            jakiegoś większego projektu? Skontaktuj się ze mną, wszystko możemy spokojnie omówić. Dla ułatwienia kontaktu, wystarczy, że wypełnisz formularz znajdujący się po
                            prawej stronie, a ja dzięki temu będę wiedział jakiego rodzaju uługi oczekujesz i będę w stanie przygotować ofertę dla Ciebie jeszcze przed rozmową.</p>
                        <h3 class="subtitle-text-nopadding">Zapraszam do kontaktu. <span class="glyphicon glyphicon-arrow-right"></span></h3> 
                    </div>
                    <div class="col-md-6">

                        <form class="message-from-user" action="send_email.php" method="post" id="commentform" role="form">


                            <!-- <label for="author">Imię ( required )</label> -->
                            <div class="form-group">
                                <input type="text" name="author" id="author" value="" class="required form-control" placeholder="Imię (wymagane)" aria-required='true' />
                            </div>

                            <!-- <label for="email">Email ( required, never shared )</label> -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" value="" class="required form-control" placeholder="Email (wymagane)"  aria-required='true' />
                            </div>

                            <!-- <label for="url">WWW</label> -->
                            <div class="form-group">
                                <input type="tel" name="phone" id="phone" value="" class="form-control" placeholder="Podaj numer telefonu"  />
                            </div>


                            <!-- <label for="comment">Komentarz</label> -->
                            <div class="form-group">
                                <textarea name="comment" id="comment" class="form-control" placeholder="Tu wpisz jakiego typu stronę miałbym wycenić i wykonać dla Ciebie"></textarea>
                            </div>


                            <input name="submit" type="submit" id="submit" tabindex="5" value="&#x2709; Wyślij Wiadomość" class="btn btn-primary"/>
                            <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="3e41fba09f" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="3"/></p><input type='hidden' name='comment_post_ID' value='560' id='comment_post_ID' />
                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />

                        </form>
                    </div>

                </div>               
            </div>
        </div>

        <!-- FOOTER -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <h3 class="title-header-footer">&nbsp;</h3>
                    <br>
                    <div class="col-md-4">
                        
                            
                            <h3 class="subtitle-text-nopadding-right"><span class="glyphicon glyphicon-map-marker"></span></h3>
                            <h3 class="subtitle-text-small-right">32-095 Sieciechowice</h3>
                            <h3 class="subtitle-text-small-right">ul. Cicha 20</h3>
                            
                      
                    </div>
                    <div class="col-md-4">
                        
                            
                           <h3 class="subtitle-text-nopadding-right"><span class="glyphicon glyphicon-user"></span> Sebastian Miętka</h3>
                           <a href="mailto:sebastian@mietka.online"><h3 class="subtitle-text-small-right"><span class="glyphicon glyphicon-envelope"></span> sebastian@mietka.online</h3></a>
                           <h3 class="subtitle-text-small-right"><span class="glyphicon glyphicon-earphone"></span> 515 65 45 85</h3>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-3">
                                   <a href="http://github.com/sebmiet">
                                    <i class="icon-github-squared" id="github-footer"></i>
                                </a> 
                                </div>
                                <div class="col-lg-3">
                                    <a href="http://facebook.com/sebastian.mietka">
                                    <i class="icon-facebook-squared" id="facebook-footer"></i>
                                </a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="http://twitter.com/sebmiet">
                                    <i class="icon-twitter-squared" id="twitter-footer"></i>
                                </a>
                                </div>
                                <div class="col-lg-3">
                                     <a href="http://twitter.com/sebmiet" >
                                    <i class="icon-linkedin-squared" id="linkedin-footer"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                            
                        
                    </div>
                </div>
                <div class="row">
                    <p class="copyright">&copy; 2018 Sebastian Miętka. Wszelkie prawa zastrzeżone.</p>
                </div>
            </div>
        </div>
        <!--        <div class="row">
                    <div class="col-md-12">
                        <div class="art">
                </div>
                    </div>
                </div>-->
    </div>
</body>
</html>
