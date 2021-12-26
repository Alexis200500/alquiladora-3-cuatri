<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>

		<img src="./img/logo.png" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./img/carrito.png">
		</a>
	</header>
	<section>
	
	<?php
					 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

$Ide=$_GET['id'];

 $consulta="SELECT * FROM productos where id= $Ide";

		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");
	
		while ($columna=mysqli_fetch_array($resultado)) {
		?>
			
			<center>
				<img src="./productos/<?php echo $columna['imagen'];?>"><br>
				<span>Nombre: <?php echo $columna['nombre'];?></span><br>
				<span>Precio: <?php echo $columna['presio'];?></span><br>
				<span>Descripcion: <?php echo $columna['descripcion'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $columna ['Id'];?>">añadir a carrito</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>