<?php

#Si todo va bien, se ejecuta esta parte del código...
include_once "../DBconect.php";
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$role = $_POST["role"];


$sentencia = $db->prepare("UPDATE usuario SET username = ?, email = ?, password = ?, role = ? WHERE id = ?");
$resultado = $sentencia->execute([$username, $email, $password, $role,$id ]);

if($resultado === TRUE){
	header("Location:./lista_usuario.php");
	exit;
}
else echo "Algo salió mal." ;


?>
