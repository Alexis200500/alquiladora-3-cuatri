<?php


		$server="mysql.proyectotic.online";
	$username="alexis6284693657";
	$password="alexis8459470444";
	$db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	if(!isset($_POST['nombre']) && !isset($_POST['cliente']) && !isset($_POST['precio']) && !isset($_POST['cant']) && !isset($_POST['sub'])  ){
		header("Location: agregarcompra.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $_FILES["file"]["name"];
		    	if(file_exists("../productos/".$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"./productos/" .$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../productos/". $_FILES["file"]["name"];
		      		$producto=$_POST['nombre'];
		      		$cliente=$_POST['cliente'];
		      		$color=$_POST['precio'];
		      		$dimension=$_POST['cant'];
		      		$capacidad=$_POST['sub'];
		      	
			
					$Sql="INSERT INTO compras (imagen,nombre,precio, cantidad, subtotal,id_cliente) values(
							'".$imagen."',
							'".$producto."',
							'".$color."',
							'".$dimension."',
							'".$capacidad."',
							'".$cliente."')";
								$resultado = mysqli_query( $con, $Sql ) or die ( "Algo ha ido mal en la consulta a la base");
				
					header ("Location: agregarcompra.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
