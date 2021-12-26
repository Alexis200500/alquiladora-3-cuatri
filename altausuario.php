<?php


			$server="mysql.proyectotic.online";
	$username="alexis6284693657";
	$password="alexis8459470444";
	$db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	
		      		
		      		$producto=$_POST['nombre'];
		      		$color=$_POST['app'];
		      		$dimension=$_POST['apm'];
		      		$capacidad=$_POST['Tel'];
		      		$presio=$_POST['email'];
		      		$personaje=$_POST['usuario'];
		      		$pass1=$_POST['pass'];
		      		$passadmin1=$_POST['passadmin'];
			

			$Sql="insert into clientes (nombre,ap_paterno,ap_materno, telefono, email, usuario, pass, passadmin) values(
							'".$producto."',
							'".$color."',
							'".$dimension."',
							'".$capacidad."',
							'".$presio."',
							'".$personaje."',
							'".$pass1."',
									'".$passadmin1."')";
								$resultado = mysqli_query( $con, $Sql ) or die ( "Algo ha ido mal en la consulta a la base");
				
				
					header ("Location: agregarusuario.php");
		
?>
