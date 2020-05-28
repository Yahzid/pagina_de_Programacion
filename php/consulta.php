<html>
<head>
	<title> CONSULTAR </title>
</head>
<body>
	<?php
	//Conexion a la BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_ventas_cetis64";//Varia segun la BDD
		
		$conexion = mysqli_connect($server,$usuario,$contrasena,$bd)
			or die ("error en la conexion");
		//Creo variable para realizar la conexion de consulta
		$consulta = mysqli_query($conexion,"SELECT * from registro")
			or die ("Error al traer los datos");
		//Creo la tabla para mostrar datos
		echo '<table border="1">';
		echo '<tr>';//primer fila
		echo '<th id="correo"> Correo </th>';
		echo '<th id="nombre"> Nombre </th>';
		echo '<th id="tel"> Telefono </th>';
		echo '<th id="contrasena"> Contraseña </th>';
		echo '</th>';//cierro primera fila
		//la variable columna va a tener lo que tiene e array que ahora es la variable consulta
		while($columna = mysqli_fetch_array($consulta))
		{
			//con el while un ciclo para insertar los datos en las columnas
			echo '<tr>';//segunda fila
			echo '<td>'.$columna['correo'].'</td>';//nota:nocontrol es como se llama la columna de la BDD
			echo '<td>'.$columna['nombre'].'</td>';
			echo '<td>'.$columna['telefono'].'</td>';
			echo '<td>'.$columna['contrasena'].'</td>';
			echo '</tr>';//cierro segunda fila
		}
		//Cierro conexion a la BDD
		mysqli_close($conexion);
		echo "</table>";
	?>
</body>
</html>