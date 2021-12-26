<?php
session_start();
			 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	$name=$_POST['name'];
	$apepat=$_POST['apmat'];
	$apmat= $_POST['appat'];
	$tel= $_POST['telefono'];
	$email=$_POST['email'];
	$user=$_POST['Usuario'];
	$pass= $_POST['pass'];
    $rpass= $_POST['repeatpass'];


	$checkemail="SELECT * FROM clientes WHERE usuario='$user'";
	$resultado = mysqli_query( $con, $checkemail) or die ( "Algo ha ido mal en la consulta a la base");
	$check_mail=mysqli_num_rows($resultado);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				

				$inserta="INSERT INTO clientes VALUES('','$name','$apepat','$apmat','$tel','$email','$user','$pass','')";
	             $resultado1 = mysqli_query( $con, $inserta) or die ( "Algo ha ido mal en la consulta a la base");
				
		
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>