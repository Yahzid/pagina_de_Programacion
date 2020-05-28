<html>
<head>
	<title> ACTUALIZAR </title>
</head>
<body>
	<?php
	//Creo la Conexxion ala BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_ventas_cetis64";
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		//Obtengo los datos que se vallan a actualizar
		$contrasena = $_POST['contrasena'];//esta es la importatnte para la actualizacion debe ser la misma
		$nombre = $_POST['txtNombre'];
		$tel = $_POST['txtTel'];
		$correo = $_POST['txtCorreo'];
		//NOTA: Solo puse los que considere que pudiera haber un error y se deseara actualizar
		mysqli_query($conexion, "UPDATE registro set nombre = '$nombre' where contrasena = '$contrasena'")
			or die("error al actualizar");
		mysqli_query($conexion, "UPDATE registro set telefono = '$tel' where contrasena = '$contrasena'")
			or die("error al actualizar");
		mysqli_query($conexion, "UPDATE registro set correo = '$correo' where contrasena = '$contrasena'")
			or die("error al actualizar");
		//Cierro la conexion a al BDD
		mysqli_close($conexion);
		echo "datos actualizados correctamente";
		
	?>
</body>
</html>