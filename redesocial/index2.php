<? session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <title>Escolha Pefeita</title>
    <meta charset="utf-8">
    <script src="js/jquery-3.4.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stcss.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/icon" href="img/heart.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <button onclick="topFunction(   )" id="myBtn" title="Go to top">^</button>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a title="Home" href="index2.php">Início</a></li>
                    <li><a title="Login" href="index.php">Login</a></li>
                    <li><a title="Cadastre-se" href="cadastro.php">Cadastre-se</a></li>
                    <li><a title="Contato" href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12 header-social">
                <br>
                <ul class="list-inline" style="list-style-type: none;">
                    <li><a target="_blank" href="https://www.facebook.com" title="Facebook"><i style="font-size:20px;" class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/escolha.perfeita" title="Instagram"><i style="font-size:20px;" class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://web.whatsapp.com" title="WhatsApp"><i style="font-size:20px;" class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
    </nav>
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Escolha Perfeita</h1>
                        <p class="intro-text">
                            Quem não vive por amor, vive procurando alguém para amar!
                        </p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" style="background-color: #f9f9f9;">
        <div class="container content-section text-center">
            <div class="row">
                <h2>Procurando o Date Perfeito?</h2>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>
                        Pois bem, conheça o par perfeito em um clique!
                    </p>
                    <p>
                        <a href="login.php" class="btnghost">ACESSAR</a>
                    </p>
                </div>
            </div>
        </div>
        <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/Romance2.jpg">
                    </div>
                    <div class="item">
                        <img src="img/Romance3.jpg" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="img/Romance4.jpg" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="img/Romance5.jpg" style="width:100%;">
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="fa fa-chevron-left" style="margin-top: 100%;"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="fa fa-chevron-right" style="margin-top: 100%;"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
            <div class="container">
                <div class="section-header">
                    <br><br>
                    <h3>Quem somos?</h3>
                    <p> Escolha Pefeita é uma rede social de relacionamentos, que possibilita aos nossos usuários construir relacionamentos sólidos e consistentes. De forma prática, segura e responsável.
                    </p>
                </div>
                <br><br><br><br>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="choose-us-content">
                        <center>
                        <img src="img/missao.png" />
                        <br><br>
                        </center>
                        <h3>Nossa missão</h3>
                        <p>Ajudar nossos usúarios a encontrarem um parceiro com interesses em comum. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="choose-us-content">
                        <center>
                        <img src="img/visao1.png"/>
                        <br><br>
                        </center>
                        <h3>Nossa visão</h3>
                        <p>Ser uma rede social líder em performance, reconhecidamente sólida e confiável em todo o Brasil, com uma equipe capacitada e comprometida.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="choose-us-content">
                        <center>
                        <img src="img/valores.png" />
                        <br><br>
                        </center>
                        <h3>Nossos valores</h3>
                        <p>Segurança, sigilo, respeito, comprometimento, inovação, ética e responsabilidade social.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row" id="servicos">
                <br><br>
                <div id="Administradores" class="team-section container-fluid">
                    <div class="container">
                        <div class="section-header">
                            <h3>Nossa Equipe</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="avatarIcone" src="img/adriana1.png">
                                <br><h3>Adriana Mendes</h3>
                                <div class="text-center">
                                    <span>Deselvolvedora</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="avatarIcone" src="img/rosabel.png">
                                <br><h3>Rosabel Braga</h3>
                                <div class="text-center">
                                    <span>Administradora</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="text-center">
                <i class="material-icons" style="font-size:24px;">location_on</i><br>
                <p>Minas Gerais - João Monlevade</p>
            </div>
            <br>
            <p class="credits" style="font-size:9px; ">
                Copyright &copy; 2019 | Escolha Perfeita<br />
            </p>
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/theme.js"></script>
        <script>
            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0; // For Chrome, Safari and Opera 
                document.documentElement.scrollTop = 0; // For IE and Firefox
            }
        </script>
</body>

</html>