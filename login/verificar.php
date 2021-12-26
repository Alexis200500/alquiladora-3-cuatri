<?php
session_start();
			 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
//include "../conexion.php";

$username=$_POST['Usuario'];
$pass=$_POST['Contraseña'];
	
 $sql2="SELECT * FROM clientes WHERE usuario='$username'";

 $resultado = mysqli_query( $con, $sql2 ) or die ( "Algo ha ido mal en la consulta a la base");
	if($f2=mysqli_fetch_array($resultado)){
		if($pass==$f2['passadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['Usuario']=$f2['usuario'];
		    header("Location: ../admin.php");
		    	echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';

		
		
		
		}
	}

 $sql="SELECT * FROM clientes WHERE usuario='$username'";	

 $resultado1 = mysqli_query( $con, $sql ) or die ( "Algo ha ido mal en la consulta a la base");
	if($f=mysqli_fetch_array($resultado1)){
		if($pass==$f['pass']){
			$_SESSION['id']=$f['id'];
			$_SESSION['Usuario']=$f['usuario'];
			

			header("Location: ../index.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}



?>