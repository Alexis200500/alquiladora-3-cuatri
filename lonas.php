<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
   <title>ALQUILADORA CHONG</title>
  <link rel="stylesheet" href="css/estilos.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
       <link rel="stylesheet" href="css/stilos4.css">
           <link rel="stylesheet" href="css/stylos2.css" type="text/css" media="screen">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  	

	     
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
    

    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">
      <div class="slider-item js-fullheight" style="background-image: url(images/ab.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">TUS MEJORES EVENTOS ENCUNTRALOS CON NOSOTROS</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN" </h2>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/abc2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-6 ftco-animate text-center">
              <h1 class="mb-4">TUS MEJORES EVENTOS ENCUENTRALOS CON NOSOTROS </h1>
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
              <h1 class="mb-4">TUS MEJORES EVENTOS ENCUENTRALOS CON NOSOTROS</h1>
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
              <h1 class="mb-4">TUS MEJORES EVENTOS ENCUENTRALOS CON NOSOTROS</h1>
              <h2 class="subheading">"10 AÑOS DE HISTORIA NOS RESPALDAN"</h2>
            </div>

          </div>
        </div>
      </div>
    </section> 
    <!-- END nav -->

   <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading">LONAS</h3>
            <h2 class="mb-1">"LAS MEJORES LONAS DE LA ZONA"</h2>
          </div>
        </div>

    <table border="0" >
       <td>

        	

       </td>					
	<?php
			  $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");


		$consulta = "SELECT * FROM productos where Tipo= 'Lona' ";


		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");
	
		while ($columna=mysqli_fetch_array($resultado)) {
		?>
			<div class="Lonas">
			<center>
<td width="100"></td> 
			<td>	
		
				<img src="./productos/<?php echo $columna['imagen'];?>"  width="200" height="150">
				<span><h5  align="center">Tipo:<?php echo $columna['Tipo'];?></h5></span>
				<span><h5 align="center">Color:<?php echo $columna['Color'];?></h5></span>
			   <span><h5 align="center"><?php echo $columna['Dimension'];?></h5></span>
			   		  <span><h5 align="center"><?php echo $columna['capacidad'];?></h5></span>
				<span><h5 align="center"><?php echo $columna['presio'];?></h5></span>

        <a href="./carritodecompras.php?id=<?php echo $columna['id_prod'];?>"><h3 align="center">Rentar</h3></a>
</td>


			</center>
		</div>
	<?php
		}
	?>

	</table>	

	<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 promo ftco-animate">
            <div class="text text-center">
              <img src="images/ab.jpg" width="200" height="150">;
              <h2>Paquetes Completo</h2>
              <h3 class="price"><span>Desde</span> $7000</h3>
              <a href="#" class="read">leer Mas</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <img src="images/abc1.jpg" width="200" height="150">;
            <div class="text text-center">
              <h2>Paquete Diversion</h2>
              <h3 class="price"><span>Desde</span> $4999</h3>
              <a href="#" class="read">Leer Mas</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
             <img src="images/abc2.jpg" width="200" height="150">;
            <div class="text text-center">
              <h2>Paquete Bodas</h2>
              <h3 class="price"><span>Desde</span> $11799</h3>
              <a href="#" class="read">Leer Mas</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <img src="images/abc3.jpg" width="200" height="150">;
            <div class="text text-center">
              <h2>Paquete Infantil</h2>
              <h3 class="price"><span>Desde</span> $5999</h3>
              <a href="#" class="read">Leer mas</a>
            </div>
          </div>
        </div>
      </div>
    </section>	
	</section>
    
       <section class="ftco-section">
      <div class="container-fluid">
        <div class="row mb-5 pb-5 no-gutters">
          <div class="col-lg-8 p-2 pl-md-5 heading-section">
            <h2 class="mb-5 p-2 pb-3 ftco-animate">Nuestros eventos</h2>
            <div class="row no-gutters d-flex">
              <div class="col-md-4 ftco-animate">
                 <img src="images/ab.jpg" width="200" height="150">;
                  <div class="text">
                    <span class="price">Salon imperial</span>
                    <h3 class="heading">Paquete Boda </h3>
                    <div class="post-meta">
                      <span>Evento 1000 personas</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>5000 visitas</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                 <img src="images/ab.jpg" width="200" height="150">;
                  <div class="text">
                    <span class="price">Salon Yamila</span>
                    <h3 class="heading">Paquete Infantil</h3>
                    <div class="post-meta">
                      <span>Evento 500 personas</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>8000 visitas</span></p>
                  </div>
                </a>
              </div>
              <div class="col-md-4 ftco-animate">
                <img src="images/ab.jpg" width="200" height="150">;
                    <span class="price"> Salon Holl</span>
                    <h3 class="heading">Paquete 15 años</h3>
                    <div class="post-meta">
                      <span>Evento 800 personas</span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span>7500 visitas</span></p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img">
      
        <div class="row">
          <div class="col-md-12 text-center" align="center">
             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template AECN is made  by EQUIPO 6 UTVT </i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<ul class="ftco-footer-social list-unstyled ">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://web.facebook.com/Alquiladora-Chong-1105483282948726/?ref=bookmarks"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/alquiladorachong/?hl=es-la"><span class="icon-instagram"></span></a></li>
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