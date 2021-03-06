
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->
<title>DCleaner</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!--[if lte IE 8]>
  <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="flexslider/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
<div class="container">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>D<i>CLEANER</i></b></a> </div>
    <!--/.navbar-header-->
    <div id="main-nav" class="collapse navbar-collapse">
      <ul class="nav navbar-nav" id="mainNav">
        <li class="active" id="firstLink"><a href="#home" class="scroll-link">Inicio</a></li>
        <li><a href="#services" class="scroll-link">Productos</a></li>
        <li><a href="#aboutUs" class="scroll-link">Con??cenos</a></li>
        <li><a href="#work" class="scroll-link">Eventos</a></li>
        <li><a href="#plans" class="scroll-link">Promociones</a></li>
        <li><a href="#contactUs" class="scroll-link">Contacto</a></li>
        <?php
        error_reporting(0);
        $usuario = $_GET['usuario'];
        if($usuario){
          echo '<li class="plan-action"><a href=#>'.$usuario.'</a></li>';
          echo '<li class="plan-action"><a href="index.php">Salir</a></li>';
        }else{
          echo '<li class="plan-action"><a href="login.php" class="scroll-link">Iniciar sesi??n</a></li>';
        }
        ?>
      </ul>
    </div>
    <!--/.navbar-collapse-->
  </nav>
  <!--/.navbar-->
</div>
<!--/.container-->
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
<div class="banner-container">
<!-- Slider -->
      <div id="main-slider" class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/slides/1.jpg" alt="" />
              <div class="flex-caption container">
                  <h3>Bienvenidos</h3>
        <p>Perfeccion??ndonos para protegerte.</p>
        <a href="#" class="btn btn-theme">Lee m??s</a>
              </div>
            </li>
            <li>
              <img src="images/slides/2.jpg" alt="" />
              <div class="flex-caption container">
                  <h3>Protege tu salud</h3>
        <p>T?? es lo primordial.</p>
        <a href="#" class="btn btn-theme">Lee m??s</a>
              </div>
            </li>
            <li>
              <img src="images/slides/10.png" alt="" />
              <div class="flex-caption container">
                  <h3>Sanitizantes</h3>
        <p>Los mejores productos que protegen a tu familia.</p>
        <a href="#" class="btn btn-theme">Lee m??s</a>
              </div>
            </li>
          </ul>
      </div>
<!-- end slider -->
</div>
<div class="container hero-text2">
<h3> DCleaner principal proveedor de servicios e insumos sanitizantes y de protecci??n a la salud<br/>  de la zona sur de M??xico</h3>
</div>
</section>
<section id="services" class="page-section colord">
<div class="container">
  <div class="row">
    <!-- item -->
    <div class="col-md-3 text-center"><div class="b1"> <i class="circle"><img src="images/b1.jpg" alt="" /></i>
      <h3>Cubrebocas</h3>
      <p>Cubrebocas y caretas certificadas internacionalmente, con un dise??o moderno y de larga duraci??n.</p>
    </div></div>
    <!-- end: -->
    <!-- item -->
    <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/b2.jpg" alt="" /></i>
      <h3>Guantes</h3>
      <p>Guantes de tipo quir??rgico, est??riles y desechables. ??tiles para atenci??n especializada y cr??tica.</p>
    </div></div>
    <!-- end: -->
    <!-- item -->
    <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/b3.png" alt="" /></i>
      <h3>Gel antibacterial</h3>
      <p>Para uso diario, en diferentes tama??os. Con alcohol para neutralizar bacterias del medio ambiente.</p>
    </div></div>
    <!-- end: -->
    <!-- item -->
    <div class="col-md-3 text-center"><div class="b1"><i class="circle"> <img src="images/b4.jpg" alt="" /></i>
      <h3>Desinfectantes</h3>
      <p>Desinfectante en varias presentaciones como: spray ?? l??quido. Que eliminan hasta el 99% de virus y bacterias.</p>
    </div></div>
<li>
<div>
 <a href="#" class="btn btn-theme"> Ver m??s productos </a>
</div>
</li>
    <!-- end:-->
  </div>
</div>
<!--/.container-->
</section>
<section id="aboutUs">
<div class="container">
  <div class="heading text-center">
    <!-- Heading -->
    <h2>Con??cenos</h2>
    <p>DCleaner distribuidor oficial de un grupo de empresas dedicada a la fabricaci??n de productos sanitizantes y de protecci??n a la salud.</p>
  </div>
  <div class="row feature design">
    <div class="area1 columns right">
      <h3>Salud e Innovaci??n</h3>
      <p>Desde hace m??s de 40 a??os mantenemos el compromiso de ofrecer el m??s alto nivel de servicio y productos de calidad a nuestros clientes.</p>
      <p>Nuestro cat??logo de m??s de 800 p??ginas es f??cil de usar y contiene m??s de 38,500 productos de empaque, env??o, productos industriales y de limpieza y mantenimiento, listos para enviar hoy mismo. </p>
      <p>Los productos de la marca DCleaner combinan la mejor calidad con el mejor precio. Nuestro equipo de compradores busca los productos m??s finos disponibles a precios competitivos.</p>
    </div>
    <div class="area2 columns feature-media left"> <img src="images/feature-img-1.png" alt="" width="100%"> </div>
  </div>
  </div>
</section>
<section id="clients">
<div id="demo" class="clients">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="customNavigation"> <a class="prev"><i class="fa fa-chevron-circle-left"></i></a> <a class="next"><i class="fa fa-chevron-circle-right"></i></a> </div>
        <div id="owl-demo" class="owl-carousel">
          <div class="item"> <span class="helper"> <img src="images/clients/client-1.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-2.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-3.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-4.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-5.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-6.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-7.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-8.png" alt="client" /></span> </div>
          <div class="item"> <span class="helper"> <img src="images/clients/client-9.png" alt="client" /></span> </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section id="work" class="page-section page">
<div class="container text-center">
  <div class="heading">
    <h2>Eventos</h2>
    <p>Apoyamos a sector de la salud en temas de higine y cuidado personal.</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="portfolio">
        <ul class="filters list-inline" style="display:none;">
          <li> <a class="active" data-filter="*" href="#">All</a> </li>
          <li> <a data-filter=".photography" href="#">Design</a> </li>
          <li> <a data-filter=".branding" href="#">Development</a> </li>
          <li> <a data-filter=".web" href="#">Mobile</a> </li>
        </ul>
        <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
          <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> <a href="images/work/11.png" class="fancybox"> <img src="images/work/11.png" alt="">
            <div class="overlay"> <span>Etiam porta</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 292px; top: 0px;"> <a href="images/work/2.jpg" class="fancybox"> <img src="images/work/2.jpg" alt="">
            <div class="overlay"> <span>Lorem ipsum</span> </div>
            </a> </li>
          <li class="item branding" style="position: absolute; left: 585px; top: 0px;"> <a href="images/work/3.jpg" class="fancybox"> <img src="images/work/3.jpg" alt="">
            <div class="overlay"> <span>Vivamus quis</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 877px; top: 0px;"> <a href="images/work/12.png" class="fancybox"> <img src="images/work/12.png" alt="">
            <div class="overlay"> <span>Donec ac tellus</span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 0px; top: 219px;"> <a href="images/work/5.jpg" class="fancybox"> <img src="images/work/5.jpg" alt="">
            <div class="overlay"> <span>Etiam volutpat</span> </div>
            </a> </li>
          <li class="item web" style="position: absolute; left: 292px; top: 219px;"> <a href="images/work/13.png" class="fancybox"> <img src="images/work/13.png" alt="">
            <div class="overlay"> <span>Donec congue </span> </div>
            </a> </li>
          <li class="item photography" style="position: absolute; left: 585px; top: 219px;"> <a href="images/work/14.png" class="fancybox"> <img src="images/work/14.png" alt="">
            <div class="overlay"> <span>Nullam a ullamcorper diam</span> </div>
            </a> </li>
          <li class="item web" style="position: absolute; left: 877px; top: 219px;"> <a href="images/work/8.jpg" class="fancybox"> <img src="images/work/8.jpg" alt="">
            <div class="overlay"> <span>Etiam consequat</span> </div>
            </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>
<section id="plans" class="page-section">
<div class="container">
  <div class="heading text-center">
    <!-- Heading -->
    <h2>Ofertas</h2>
    <p>Aproveche nuestras mejores ofertas de nuestros productos m??s solicitados.</p>
  </div>
  <div class="row flat">
    <div class="col-lg-3 col-md-3 col-xs-12">
      <ul class="plan plan1">
        <li class="plan-name">Cubrebocas </li>
        <li class="plan-price"> <strong>$29</strong> / por pieza </li>
        <li> <strong>Capas</strong> triple</li>
        <li> <strong>Resistente</strong> a fluidos </li>
        <li> <strong>2</strong> el??sticos </li>
        <li> <strong>3 meses </strong> de garant??a </li>
        <li> <strong>Certificado</strong> internacional</li>
        <?php
        if($usuario){
          echo '<li class="plan-action"> <a href="compra.php?usuario='.$usuario.'" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        else{
          echo '<li class="plan-action"> <a href="login.php" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        ?>
      </ul>
    </div>
    <div class="col-lg-3 col-md-3 col-xs-12">
      <ul class="plan plan2">
        <li class="plan-name">KN-95 </li>
        <li class="plan-price"> <strong>$59</strong> / por pieza </li>
        <li> <strong>Capas de 	</strong> triple</li>
        <li> <strong>Resistente</strong> a fluidos </li>
        <li> <strong>2</strong> el??sticos </li>
        <li> <strong>1 a??o </strong> de garant??a </li>
        <li> <strong>Certificado</strong> internacional</li>
        <?php
        if($usuario){
          echo '<li class="plan-action"> <a href="compra.php?usuario='.$usuario.'" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        else{
          echo '<li class="plan-action"> <a href="login.php" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        ?>
      </ul>
    </div>
    <div class="col-lg-3 col-md-3 col-xs-12">
      <ul class="plan plan3">
        <li class="plan-name">Desinfectante </li>
        <li class="plan-price"> <strong>$89</strong> / por pieza </li>
        <li> <strong>Aerosol</strong> duradero</li>
        <li> <strong>950</strong> ml </li>
        <li> <strong>24 horas</strong> de protecci??n </li>
        <li> <strong>1 a??o </strong> de garant??a </li>
        <li> <strong>Certificado</strong> internacional</li>
        <?php
        if($usuario){
          echo '<li class="plan-action"> <a href="compra.php?usuario='.$usuario.'" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        else{
          echo '<li class="plan-action"> <a href="login.php" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        ?>
      </ul>
    </div>
    <div class="col-lg-3 col-md-3 col-xs-12">
      <ul class="plan plan4">
        <li class="plan-name">Toallas </li>
        <li class="plan-price"> <strong>$75</strong> / por pieza </li>
        <li> <strong>2</strong> capas
        <li> <strong>10x20</strong> cm </li>
        <li> <strong>24 horas</strong> de protecci??n </li>
        <li> <strong>Desechables </strong> biodegradables </li>
        <li> <strong>Certificado</strong> internacional</li><?php
        if($usuario){
          echo '<li class="plan-action"> <a href="compra.php?usuario='.$usuario.'" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        else{
          echo '<li class="plan-action"> <a href="login.php" class="btn btn-danger btn-lg">Comprar</a> </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</div>
</section>
<section id="contactUs" class="contact-parlex">
<div class="parlex-back">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Cont??ctanos</h2>
      </div>
    </div>
    <div class="row mrgn30">
      <form method="post" action="" id="contactfrm" role="form">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Escriba su nombre" title="Please enter your name (at least 2 characters)">
          </div>
          <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Escriba su correo electr??nico" title="Please enter a valid email address">
          </div>
          <div class="form-group">
            <label for="comments">Comentarios</label>
            <textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Escriba sus comentarios???" title="Please enter your message (at least 10 characters)"></textarea>
            <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Enviar</button>
          </div>
          <div class="result"></div>
        </div>
      </form>
    </div>
  </div>
  <!--/.container-->
</div>
</section>
<footer>
<div class="container">
      <div class="row">
          <div class="col-md-3">
            <div class="col">
                 <h4>Contacto</h4>
                 <ul>
                      <li>M??xico</li>
                      <li>Telef??no: +22 342 2345 345 | Fax: +22 724 2342 343 </li>
                      <li>Correo: <a href="mailto:info@example.com" title="Email Us">info@dcleaner.com</a></li>
                      <li>Skype: <a href="skype:my.test?call" title="Skype us">my-dcleaner</a></li>
                  </ul>
               </div>
          </div>
          <div class="col-md-3">
            <div class="col">
                  <h4>Suscripci??n</h4>
                  <p>Suscr??base, para recibir nuestras mejores ofetas por correo.</p>
                  <form class="form-inline">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Escriba su correo...">
                          <span class="input-group-btn">
                              <button class="btn" type="button">Go!</button>
                          </span>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-md-3">
            <div class="col col-social-icons">
                  <h4>S??guenos</h4>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-youtube-play"></i></a>
                  <a href="#"><i class="fa fa-flickr"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-skype"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
          </div>
           <div class="col-md-3">
            <div class="col">
                  <h4>Noticias</h4>
                  <p>
                  Enterese sobre los acontecimientos de DCLeaner.
                  <br><br>
                  <a href="#" class="btn">Ent??rate!</a>
                  </p>
              </div>
          </div>
      </div>
  </div>
</footer>
<!--/.page-section-->
<section class="copyright">
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center"> Copyright 2021 | All Rights Reserved -- by <a href="http://dcleaner.com">dcleaner.com</a> </div>
  </div>
  <!-- / .row -->
</div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/waypoints.js"></script>
<script src="flexslider/jquery.flexslider.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
