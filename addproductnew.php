<?php
require_once 'conexion.php';

$product=$_POST['product'];
$code=$_POST['code'];
$position=$_POST['position'];

//echo $row;
//echo $rack;
//echo $shelf;
//echo $position;

$conn=conexion();
  $sql = "SELECT * FROM product WHERE nameProduct = '$product'";
  $sqlquery = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($sqlquery);
mysqli_close($conn);

if($count==1){
	echo 2;
}else{
	$conn1=conexion();
	  echo $sql1 = "INSERT INTO `product` (`id_product`,`nameProduct`, `codeProduct`) VALUES (NULL, '$product','$code')";
	  $sqlquery1 = mysqli_query($conn1,$sql1);
	mysqli_close($conn1);

	$conn2=conexion();
	  $sql2 = "SELECT * FROM product WHERE nameProduct = '$product'";
	  $sqlquery2 = mysqli_query($conn2,$sql2);
	  $row2 = mysqli_fetch_array($sqlquery2);
	mysqli_close($conn2);
	if($row2['id_product']<10){
		$id_prod = "0".$row2['id_product'];
	}else{
		$id_prod = $row2['id_product'];
	}
	$id_loc = "01";

	$conn3=conexion();
	  echo $sql3 = "INSERT INTO `relprodloc` (`id_rel`, `id_product`, `id_location`) VALUES (NULL, '$id_prod', '$id_loc')";
	  $sqlquery3 = mysqli_query($conn3,$sql3);
	mysqli_close($conn3);

	echo 1;
}
?>