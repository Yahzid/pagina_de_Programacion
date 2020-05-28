<html>
<head>
	<title> ELIMINAR </title>
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
	        mysql> SELECT * FROM usuario;
+----------+----------+
| Usuario   | Registro |
+----------+----------+
| Correo    |     NULL |
| Nombre    |     NULL |
| Telefono  |     NULL |
| Contrasen |     NULL |
| CContrasen|     NULL |
+----------+----------+
3 rows in set (0.00 sec)
 
mysql> DELETE usuario SET cantidad = null;
Query OK, 3 rows affected (0.12 sec)
Rows matched: 3  Changed: 3  Warnings: 0
 
	?>
</body>
</html>