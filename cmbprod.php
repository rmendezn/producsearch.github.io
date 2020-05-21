<?php

require_once 'conexion.php';

 $con=conexion();
	 $query = "SELECT p.id_product, p.nameProduct, p.codeProduct FROM product p ORDER BY p.nameProduct";
	 $result = mysqli_query($con,$query);
 mysqli_close($con);
	$arrDetalles = array();
	$response = array();
	$cont = 0;
		while($row = mysqli_fetch_array($result) ){
			$response = array("id"=>$row['id_product'],"product"=>$row['nameProduct'],"code"=>$row['codeProduct']);
			array_push($arrDetalles, $response);
			$cont++;
		}
	//var_dump($arrDetalles)
	echo json_encode($arrDetalles);

?>