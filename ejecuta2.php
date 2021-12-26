<?php 
		 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	if($_POST['Caso']=="Eliminar"){

		$consulta="DELETE from compras where numeroventa=".$_POST['Id'];

		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");

		echo 'El renta se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){

		$consulta1= "UPDATE compras set imagen='".$_POST['Imagen']."' where numeroventa=".$_POST['Id'];
		$consulta2= "UPDATE compras set nombre='".$_POST['Nombre']."' where numeroventa=".$_POST['Id'];
		$consulta3="UPDATE compras set precio='".$_POST['Precio']."' where numeroventa=".$_POST['Id'];
		$consulta4="UPDATE compras set cantidad='".$_POST['Cantidad']."' where numeroventa=".$_POST['Id'];
		$consulta5="UPDATE compras set subtotal='".$_POST['Subtotal']."' where numeroventa=".$_POST['Id'];	
	
		$resultado1 = mysqli_query( $con, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado2 = mysqli_query( $con, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado3 = mysqli_query( $con, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado4 = mysqli_query( $con, $consulta4 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado5 = mysqli_query( $con, $consulta5 ) or die ( "Algo ha ido mal en la consulta a la base");
		
		echo 'La renta se ha modificado';
	}

?>