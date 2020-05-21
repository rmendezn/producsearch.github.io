<?php
require_once 'conexion.php';

$row=$_POST['row'];
$rack=$_POST['rack'];
$shelf=$_POST['shelf'];
$position=$_POST['position'];

// echo $row;
// echo $rack;
// echo $shelf;
// echo $position;

$conn=conexion();
  $sql = "SELECT * FROM `location` WHERE `rows` = '$row' AND racks = '$rack' AND shelfs = '$shelf' AND position = '$position'";
  $sqlquery = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($sqlquery);
mysqli_close($conn);

if($count<1){
	$conn1=conexion();
	  $sql1 = "INSERT INTO `location` (`id_location`, `rows`, `racks`, `shelfs`, `position`) VALUES (NULL, '$row', '$rack', '$shelf', '$position')";
	  $sqlquery1 = mysqli_query($conn1,$sql1);
	mysqli_close($conn1);
	echo 1;
}else{
	echo 2;
}
?>