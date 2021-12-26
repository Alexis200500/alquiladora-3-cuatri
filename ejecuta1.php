<?php 
		 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	if($_POST['Caso']=="Eliminar"){

		$consulta="DELETE from productos where id_prod=".$_POST['Id'];

		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");

		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){

		$consulta1= "UPDATE productos set Tipo='".$_POST['Tipo']."' where id_prod=".$_POST['Id'];
		$consulta2= "UPDATE productos set Color='".$_POST['Color']."' where id_prod=".$_POST['Id'];
		$consulta3="UPDATE productos set Dimension='".$_POST['Dimension']."' where id_prod=".$_POST['Id'];
	    $consulta4="UPDATE productos set capacidad='".$_POST['Capacidad']."' where id_prod=".$_POST['Id'];
		$consulta5="UPDATE productos set presio='".$_POST['Presio']."' where id_prod=".$_POST['Id'];	
		$consulta6 ="UPDATE productos set personaje='".$_POST['Personaje']."' where id_prod=".$_POST['Id'];	
		$consulta7="UPDATE productos set imagen='".$_POST['Imagen']."' where id_prod=".$_POST['Id'];	
		$resultado1 = mysqli_query( $con, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado2 = mysqli_query( $con, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado3 = mysqli_query( $con, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado4 = mysqli_query( $con, $consulta4 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado5 = mysqli_query( $con, $consulta5 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado6 = mysqli_query( $con, $consulta6 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado7 = mysqli_query( $con, $consulta7 ) or die ( "Algo ha ido mal en la consulta a la base");

		echo 'El producto se ha modificado';
	}

?>