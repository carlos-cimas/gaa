<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lima's Fish</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

   <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">Nosotros</a>
            <a href="#event">Eventos</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Reservaciones</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Lima's Fish</h1>
            <h2>Alimentos para adaptarse a su estilo de vida & salud.</h2>
            <p>¡Especializado en cocina Peruana!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Delicioso Viaje</h1>
          <p class="header-p">Reconocida internacionalmente por ofrecer una experiencia gastronomica unica.Lima's Fish se especializa  en cocina de mar,bebidas originales y recetas de autor.</p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Lima's Fish una experiencia unica</h2>
              <p style="text-align: justify;">Todo un universo de ingredientes sumamente frescos y  muy bien cuidados.Productos que reflejan en su delicadeza y su sabor,el compromiso,la pasion y el orgullo de agricultores,ganaderos y pescadores peruanos</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>“Premio Quality Peru”</li>
                  <li><i class="fa fa-check"></i>“World Leader Business Enterprise”</li>
                  <li><i class="fa fa-check"></i>“Programa de Calidad de Servicio al Cliente”</li>
                  <li><i class="fa fa-check"></i>Asociados a la Chaine des Rotisseurs.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Próximos Eventos</h1>
            <p class="header-p">Decoraciones 100% completas aquí</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>“El evento que siempre soñaste”</h2>
                  <p>Contamos con personal formado profesionalmente en calidad de atención al cliente, y un local cálido con ambientes de estilo único que facilitan la atención simultánea de reservas privadas, desde una cena en pareja hasta eventos grupales.</p>
                  <address>
                              <strong>Lugar: </strong>
                              324 Ciudad Satelite Santa Rosa-Tomas Valle,Bertello
                              <br>
                              <strong>Hora: </strong>
                              07:30pm
                            </address>
                  <a class="btn btn-imfo btn-read-more" href="events-details.html">Eventos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">La Carta</h1>
          <p class="header-p">Nuestra carta está compuesta de variados platos preparados con ingredientes estrella,</p>
        </div>
        <div class="col-md-12  text-center gallery-trigger">
          <ul>
            <li><a class="filter" data-filter="all">Mostrar todo</a></li>
            <li><a class="filter" data-filter=".category-1">Entradas</a></li>
            <li><a class="filter" data-filter=".category-2">Ceviches</a></li>
            <li><a class="filter" data-filter=".category-3">Bebidas</a></li>
          </ul>
        </div>
        <div id="Container">
          <div class="mix category-1 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Leche de Tigre</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/8.00</span>
            </span>
            <span class="menu-subtitle">Fresco e irresistible concentrado de nuestro....</span>
          </div>
          <div class="mix category-1 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Tortilla de Langostino</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/23.00</span>
            </span>
            <span class="menu-subtitle"> Langostinos,a la mantequilla de ajo y rocoto</span>
          </div>
          <div class="mix category-1 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Choros a la Chalaca</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/25.00</span>
            </span>
            <span class="menu-subtitle">Copon de leche de tigre.con sus yuquitas de carretilla.pejerreyes enrollados.</span>
          </div>
          <div class="mix category-1 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Causa de Pescado</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/12.00</span>
            </span>
            <span class="menu-subtitle">Fina masa de papa amarilla sazonada con crema de....</span>
          </div>
          <div class="mix category-2 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Ceviche Mixto</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/41.00</span>
            </span>
            <span class="menu-subtitle">Nuestro ceviche de pescado con mariscos..</span>
          </div>
          <div class="mix category-2 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Chaufa de Mariscos</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/41.00</span>
            </span>
            <span class="menu-subtitle">Al wok con el secreto capón, esta vez con...</span>
          </div>
          <div class="mix category-2 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Cheviche de Pescado</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/39.00</span>
            </span>
            <span class="menu-subtitle">Pescado, sal, limón y ajíes. Emblema de nuestra....</span>
          </div>
          <div class="mix category-2 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Ceviche de Pulpo</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/37.00</span>
            </span>
            <span class="menu-subtitle">Pulpo, cebolla colorada, ajíes o chiles picantes, jugo de limón, culantro.</span>
          </div>
          <div class="mix category-3 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Pilsen Callao</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/6.30</span>
            </span>
            <span class="menu-subtitle">3x10 , si eres chalaco</span>
          </div>
          <div class="mix category-3 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Chicha Morada</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/3.00</span>
            </span>
            <span class="menu-subtitle">Sabrosa chicha morada natural a base de maíz morado, piña, membrillo, manzana y limón</span>
          </div>
          <div class="mix category-3 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Inka Cola</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/6.00</span>
            </span>
            <span class="menu-subtitle">Al Polaco</span>
          </div>
          <div class="mix category-3 menu-restaurant" data-myorder="2">
            <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Coca Cola</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">S/4.00</span>
            </span>
            <span class="menu-subtitle">Al polaco</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Reserve Su Mesa</h1>
          <p class="header-p"></p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Numeros de Telefono</h4>
              <p class="light-blue regular alt-p">+51 951437172 - <span class="contacts-sp">Reserva telefónica</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Horario de apertura</h4>
              <p class="light-blue regular alt-p"> Lunes a Viernes 09.00 - 20:00</p>
              <p class="light-blue regular alt-p">
                Viernes a Domingo 08:00 - 15.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="Este campo es requerido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="Este campo es requerido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Telefono" data-rule="required" data-msg="Este campo es requerido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="Personas" data-rule="required" data-msg="Este campo es requerido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Por favor escribe algo para nosotros"placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn" onclick="alert()" value="Su mesa a sido reservada">Reserve Su Mesa</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">Lima's Fish</h4>
            <address>324 Ciudad Satelite Santa Rosa<br>Tomas Valle,Bertello</address>
            <div class="social-list">
              <a href=https://twitter.com/Limafish3><img src="https://img.icons8.com/doodle/48/000000/twitter--v1.png"/>
              <a href=https://www.facebook.com/Limafishcecvicheria><img src="https://img.icons8.com/doodle/48/000000/facebook-new.png"/>
              <a href="https://www.youtube.com/channel/UCV6HowJOrVH19DpBnsnhyuQ"><img src="https://img.icons8.com/doodle/48/000000/youtube--v1.png"/>
              <a href=https://www.instagram.com/limafish_oficial/><img src="https://img.icons8.com/doodle/48/000000/instagram-new.png"/>
              <a href=https://www.tiktok.com/@limafishoficial?lang=es/><img src="https://img.icons8.com/doodle/48/000000/tiktok--v2.png"/>
            </div>
            <p class="copyright clear-float">
              © Carlos Perez-Todos los derechos reservados
              <div class="credits">
                
                Diseñado por <a >Carlos Perez</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="js/sweetAlert.js"></script>
</body>

</html>
