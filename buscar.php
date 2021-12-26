<?php
session_start();
	$server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	$buscar=$_POST['buscar'];



	$checkemail="SELECT * FROM clientes WHERE nombre='$buscar'";
	$resultado = mysqli_query( $con, $checkemail) or die ( "Algo ha ido mal en la consulta a la base");
	$check_mail=mysqli_num_rows($resultado);
		

	
?>