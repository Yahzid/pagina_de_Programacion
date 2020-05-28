<?php 
$form-correo=$_POST['form-correo'];
$form-name=$_POST['form-name'];

$form-pass=$_POST['form-pass'];

$form-rep-pass=$_POST['form-rep-pass'];

$reqlen= strlen($form-pass) * strlen($form-correo) * strlen($form-rep-pass);

if ($reqlen > 0) {
 if ($form-pass===$form-rep-pass){
 $form-pass=md5($form-pass);
 require ("connect_db.php")
 
 mysql_query("INSERT INTO registro VALUES('','$form-pass','$form-correo','$form-name')");
 mysql_close($link);
 echo 'se registro exitosamente'
 }else{
 
 echo 'solo contrasenas iguales';
 
 }
}else{

echo 'porfavor ingrese todos los campos ';
}
?>