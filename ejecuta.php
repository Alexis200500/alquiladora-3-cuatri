<?php 
		 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	if($_POST['Caso']=="Eliminar"){

		$consulta="DELETE from clientes where id_cliente=".$_POST['Id'];

		$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base");

		echo 'El cliente se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){

		$consulta1= "UPDATE clientes set nombre='".$_POST['Nombre']."' where id_cliente=".$_POST['Id'];
		$consulta2= "UPDATE clientes set ap_paterno='".$_POST['Apellidop']."' where id_cliente=".$_POST['Id'];
		$consulta3="UPDATE clientes set ap_materno='".$_POST['Apellidom']."' where id_cliente=".$_POST['Id'];
		$consulta4="UPDATE clientes set telefono='".$_POST['Telefono']."' where id_cliente=".$_POST['Id'];
		$consulta5="UPDATE clientes set email='".$_POST['Email']."' where id_cliente=".$_POST['Id'];	
		$consulta6 ="UPDATE clientes set usuario='".$_POST['Usuario']."' where id_cliente=".$_POST['Id'];	
		$consulta7="UPDATE clientes set pass='".$_POST['Pass']."' where id_cliente=".$_POST['Id'];	
		$consulta8 ="UPDATE clientes set passadmin='".$_POST['Passadmin']."' where id_cliente=".$_POST['Id'];	
		$resultado1 = mysqli_query( $con, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado2 = mysqli_query( $con, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado3 = mysqli_query( $con, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado4 = mysqli_query( $con, $consulta4 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado5 = mysqli_query( $con, $consulta5 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado6 = mysqli_query( $con, $consulta6 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado7 = mysqli_query( $con, $consulta7 ) or die ( "Algo ha ido mal en la consulta a la base");
		$resultado7 = mysqli_query( $con, $consulta8 ) or die ( "Algo ha ido mal en la consulta a la base");


		echo 'El cliente se ha modificado';
		
	}

?>