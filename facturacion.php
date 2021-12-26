 <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
           
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylos2.css" type="text/css" media="screen">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150183912-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150183912-1');
</script>


        
     <header>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand py-4 px-6" href="index.php">ALQUILADORA CHONG</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          
 <div class="example">
    <ul id="nav">

 
          <li class="nav-item"><a href="index.php">Inicio</a></li>
         <li><a href="">Servicios</a>
          <ul class="submenu">
            <li><a href="Mesas.php">Mesas</li>
            <li><a href="lonas.php">Lonas</li>
                <li> <a href="carpas.php">Carpas</li>
            <li><a href="inflables.php">Inflables</a></li>
          </ul>
        </li>
        <li><a href="facturacion.php">Factura</a></li>
        <li><a href="Contacto.php">Contacto</a></li>
        <li><a href="./login/cerrar.php">Cerrar sesion</a></li>
        <li><a href="./login.php">Administrador</a></li>
      </ul>
    </div>
    </nav>

    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">
      <div class="slider-item js-fullheight" style="background-image: url(images/ab.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">TUS MEJORES SERVICIOS ENCUENTRALOS CON NOSOTROS</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN"</h2>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/abc2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">TUS MEJORES SERVICIOS ENCUENTRALOS CON NOSOTROS</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN"</h2>
            </div>

          </div>
        </div>
      </div>


      <div class="slider-item js-fullheight" style="background-image: url(images/abc1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-7 ftco-animate text-center">
              <h1 class="mb-4">TUS MEJORES SERVICIOS ENCUENTRALOS CON NOSOTROS</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN"</h2>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/abc3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-7 ftco-animate text-center">
              <h1 class="mb-4">"TUS MEJORES EVENTOS ENCUNTRALOS CON NOSOTROS"</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN"</h2>
            </div>

          </div>
        </div>
      </div>
    </section> 
<center>
<h3>GENERAR FACTURAS EN FORMATO PDF</h3>

<form method="post" action="facturas/facturas.php">
    <button type="submit">GENERAR FACTURA PDF</button>
    
    <h3>Los datos de la factura son los siguientes ...</h3>
    
<table>
 <tr>
    <td>ID de factura:</td>
    <td><input type="text" name="id_factura" value="1" size="5" readonly="readonly"></td>
 </tr>
 <tr>
    <td>fecha emisión de factura:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Empresa:</td>
    <td><input type="text" name="nombre_tienda" value="AECN" size="50" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Dirección:</td>
    <td><input type="text" name="direccion_tienda" value="Los Chirinos ocoyoacac s/n" size="50" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Población:</td>
    <td><input type="text" name="poblacion_tienda" value="Ocoyoacac " size="25" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Provincia:</td>
    <td><input type="text" name="provincia_tienda" value="Colonia juarez" size="25" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Código Postal :</td>
    <td><input type="text" name="codigo_postal_tienda" value="52645" size="5" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Teléfono :</td>
    <td><input type="text" name="telefono_tienda" value="7282841804" size="15" readonly="readonly"></td>
 </tr>
 <tr>
    <td>Fax:</td>
    <td><input type="text" name="fax_tienda" value="900 00 00 00" size="15" readonly="readonly"></td>
 </tr>
 <tr>
    <td>RFC:</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="AECN657489A" size="15" readonly="readonly"></td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
  <tr>
    <td>Id de compra:</td>
    <td><input type="text" name="Id compra" value="" size="15"></td>
 </tr>
 <tr>
    <td>Nombre del cliente:</td>
    <td><input type="text" name="nombre_cliente" value="" size="15"></td>
 </tr>
 <tr>
    <td>Apellidos del cliente:</td>
    <td><input type="text" name="apellidos_cliente" value="" size="15"></td>
 </tr>
 <tr>
    <td>Dirección del cliente:</td>
    <td><input type="text" name="direccion_cliente" value="" size="50"></td>
 </tr>
 <tr>
    <td>Población del cliente:</td>
    <td><input type="text" name="poblacion_cliente" value="" size="25"></td>
 </tr>
 <tr>
    <td>Provincia del cliente:</td>
    <td><input type="text" name="provincia_cliente" value="" size="25"></td>
 </tr>
 <tr>
    <td>Código Postal del cliente:</td>
    <td><input type="text" name="codigo_postal_cliente" value="" size="5"></td>
 </tr>
 <tr>
    <td>Identificacion Fiscal del cliente:</td>
    <td><input type="text" name="identificacion_fiscal_cliente" value="" size="15"></td>
 </tr>
</table>


<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>
<br><br><br><br>
</center>
</body>
<footer class="ftco-footer ftco-section img">
      
        <div class="row">
          <div class="col-md-12 text-center" align="center">
             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template AECN is made  by EQUIPO 6 UTVT  </i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<ul class="ftco-footer-social list-unstyled ">
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCAbVL8SkROuygOX27112WyA?view_as=subscriber"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/Alquiladora-Chong-1105483282948726/?ref=bookmarks"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              
              </ul>
           
          </div>
        </div>
     
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
</html>