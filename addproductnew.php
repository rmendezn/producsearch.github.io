<?php
require_once 'conexion.php';

$product=$_POST['product'];
$code=$_POST['code'];
$position=$_POST['position'];

// echo $row;
// echo $rack;
// echo $shelf;
// echo $position;

$conn=conexion();
  $sql = "SELECT * FROM product WHERE nameProduct = '$product'";
  $sqlquery = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($sqlquery);
mysqli_close($conn);

if($count==1){
	echo 2;
}else{
	$conn1=conexion();
	  $sql1 = "INSERT INTO `product` (`id_product`,`nameProduct`, `codeProduct`) VALUES (NULL, '$product','$code')";
	  $sqlquery1 = mysqli_query($conn1,$sql1);
	mysqli_close($conn1);

	$conn2=conexion();
	  $sql2 = "SELECT * FROM product WHERE nameProduct = '$product'";
	  $sqlquery2 = mysqli_query($conn2,$sql2);
	  $row2 = mysqli_fetch_array($sqlquery2);
	mysqli_close($conn2);

	$id_prod = "0".$row2['id_product'];
	$position="1";
	$id_loc = "0".$position;

	$conn3=conexion();
	  $sql3 = "INSERT INTO `relprodloc` (`id_rel`, `id_product`, `id_location`) VALUES (NULL, '$id_prod', '$id_loc')";
	  $sqlquery3 = mysqli_query($conn3,$sql3);
	mysqli_close($conn3);

	echo 1;
}
?>