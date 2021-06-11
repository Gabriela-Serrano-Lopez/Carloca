<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../DBconect.php";
$sentencia = $db->prepare("DELETE FROM producto WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	include ("carrito.php");
	exit;
}
else echo "Algo salió mal";
?>

