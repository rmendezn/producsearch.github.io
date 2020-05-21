<?php 
session_start();

require_once 'conexion.php';
$conn=conexion();

$idrel = $_POST["idrel"];


$sql = "SELECT rpl.id_rel, rpl.id_product, rpl.id_location, p.id_product,p.nameProduct,p.codeProduct, l.id_location, l.rows, l.racks, l.shelfs, l.position FROM relprodloc rpl LEFT JOIN product p ON rpl.id_product = p.id_product LEFT JOIN location l ON rpl.id_location = l.id_location WHERE id_rel = '$idrel'";
$sqlquery = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($sqlquery);

$datos = $row['nameProduct']."||".
			$row['codeProduct']."||".
			$row['rows']."||".
			$row['racks']."||".
			$row['shelfs']."||".
			$row['position'];
echo $datos;

mysqli_close($conn);
 ?>