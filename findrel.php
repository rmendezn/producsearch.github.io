<?php 
session_start();

require_once '../pos/conexion.php';
$conn=conexion();

$idMensaje = $_POST["id"];

$sql = "SELECT * FROM relpordloc WHERE idMensaje = '$idMensaje'";
$sqlquery = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($sqlquery);

$datos = $row['titulo']."||".
			$row['informacion']."||".
			$row['fechaInicio']."||".
			$row['fechaFin']."||".
			$row['textInactivar']."||".
			$row['mostrar']."||".
			$row['idMensaje']."||".
			$sql;
echo $datos;

mysqli_close($conn);
 ?>