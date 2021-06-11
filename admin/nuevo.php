<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["role"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...
include_once "../DBconect.php";
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];


$sentencia = $db->prepare("INSERT INTO usuario(username, email, password, role) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$username, $email, $password, $role, ]);

if($resultado === TRUE){
	header("Location:lista_usuario.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
