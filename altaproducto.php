<?php


					 $server="mysql.proyectotic.online";
  $username="alexis6284693657";
  $password="alexis8459470444";
  $db='alquiladoraaecnbase2';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	if(!isset($_POST['nombre']) &&  !isset($_POST['color']) && !isset($_POST['dimension']) && !isset($_POST['capacidad']) && !isset($_POST['presio']) && !isset($_POST['personaje']) ){
		header("Location: agregarproducto.php");
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

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../productos/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../productos/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../productos/" .$random.'_'. $_FILES["file"]["name"];
		      		$producto=$_POST['nombre'];
		      		$color=$_POST['color'];
		      		$dimension=$_POST['dimension'];
		      		$capacidad=$_POST['capacidad'];
		      		$presio=$_POST['presio'];
		      		$personaje=$_POST['personaje'];
			
					$Sql="insert into productos (Tipo,Color,Dimension, capacidad, presio, personaje, imagen) values(
							'".$producto."',
							'".$color."',
							'".$dimension."',
							'".$capacidad."',
							'".$presio."',
							'".$personaje."',
							'".$imagen."')";
								$resultado = mysqli_query( $con, $Sql ) or die ( "Algo ha ido mal en la consulta a la base");
				
					header ("Location: agregarproducto.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
