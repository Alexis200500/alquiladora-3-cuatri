<?php
session_start();
  
  if(isset($_SESSION['Usuario'])){

  }else{
    header("Location: ./index.php?Error=Acceso denegado");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8">
   <title>Sistema alquiladora</title>
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
        <link rel="stylesheet" href="css/estilos7.css">
          <link rel="stylesheet" href="css/stylos2.css" type="text/css" media="screen">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/stylos2.css" type="text/css" media="screen">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" &amp;gt;>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/stacktable.js"></script>
<link href="css/stacktable.css" rel="stylesheet">
  </head>
  <body>
    

        
    <header>

 
          
 <div class="example">
    <ul id="nav">


    
    <li class="nav-item"><a href="admin.php">Inicio</a></li>
   
      <li><a href="usuarios.php">Usuarios</a>
            <ul>
                    <li><a href="agregarusuario.php">Agregar</a></li>
                    <li><a href="modificar.php">Modificaciones</a></li>
                      <li><a href="eliminar.php">Eliminar</a></li>
                    
                        </ul>
    
     
      <li><a href="productos.php">productos</a>
           <ul>
                    <li><a href="agregarproducto.php">Agregar</a></li>
                    <li><a href="modificarpr.php">Modificaciones</a></li>
                        <li><a href="eliminar1.php">Eliminar</a></li>
                    
                        </ul>
    
     <li><a href="compras.php">Compras</a>

              <ul>
               <li><a href="agregarcompra.php">Agregar</a></li>
              <li><a href="modificarco.php">Modificaciones</a></li>
                <li><a href="eliminar2.php">Eliminar</a></li>
              </ul>
       </li>
    <li><a href="cerrar.php">Cerrar sesion</a>
              
     </li>
  </ul>
</div>
</nav>
 </section>
<p>.</p>
  <form action="ejemplo.php" method="get" style="background-color:#f3172b">
    
    <MARQUEE><h1 ><p style="color:#FFffff"; >MODIFICAR ADMINISTRADOR </p> </h1></MARQUEE>



</form>


        <section>    


   <P>.</P>
   <div class="table-responsive">
    <table class="table" border="2">
			<tr>
				     <td>Id</td>
					<td>Nombre</td>
					<td>Apellido P</td>
					<td>Apellido M</td>
					<td>Telefono</td>
					<td>Email</td>
				    <td>Usuario</td>
             
                <td>PassAdmin</td>
				       <td>Modificar</td>
				      
			</tr>
		<?php 
		 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

//$Ide=$_GET['id'];

 $consulta="SELECT * FROM clientes ";

		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");
	
	while ($columna=mysqli_fetch_array($resultado)) {
    ?>
      <div class="Usuarios">
      <center>

      <tr>  
        <td  align="center"><h5><?php echo $columna['id_cliente'];?></h5></td>
        <td align="center"><h5><?php echo $columna['nombre'];?></h5></td>
        <td  align="center"><h5><?php echo $columna['ap_paterno'];?></h5></td>
         <td  align="center"><h5><?php echo $columna['ap_materno'];?></h5></td>
               <td  align="center"><h5><?php echo $columna['telefono'];?></h5></td>
        <td  align="center"><h5><?php echo $columna['email'];?></h5></td>
        <td  align="center"><h5><?php echo $columna['usuario'];?></h5></td>
                <td  align="center"><h5><?php echo $columna['passadmin'];?></h5></td>

          <td  align="center"><a href="./modificar4.php?id=<?php echo $columna['id_cliente'];?>">Modificar</a></td>
</tr>
      </center>
    </div>
  <?php
    }
  ?>
    
  </table>  
</div>
    
  </section>
  <P>.</P>
<footer class="ftco-footer ftco-section img">
      
        <div class="row">
          <div class="col-md-12 text-center" align="center">
             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>"ALQUILADORA CHONG" EQUIPO 6 UTVT </i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
<ul class="ftco-footer-social list-unstyled ">
              
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