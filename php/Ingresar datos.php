	<html>
<head>
	<title> INGRESAR </title>
</head>
<body>
	<?php
//Conexion a la BDD
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "bdd_ventas_cetis64";//Varia segun la BDD
 $conexion = new mysqli($server, $usuario, $contrasena, $bd);
 
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $usuario
 WHERE nombre = '$_POST[username]' ";
 $result = $conexion->query($buscarUsuario);
 $count = mysqli_num_rows($result);
 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='comienzo.html'>Por favor escoga otro Nombre</a>";
 }
 else{
 $form_pass = $_POST['contrasena'];
 $hash = password_hash($form_pass, PASSWORD_BCRYPT);
 $query = "INSERT INTO Usuarios (correo, nombre,telefono,contrasena);
           VALUES ('$_POST[username]', '$hash')";
 if ($conexion->query($query) === TRUE) {
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='comienzo.html'>Login</a>" . "</h5>";
 }
 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }

 }
 mysqli_close($conexion);
?>
</body>
</html>
