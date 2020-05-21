<?php

require_once 'conexion.php';

$connC0=conexion();
$cont=1;
$conti =1;
$sql10 = "SELECT * FROM location ORDER BY `rows` ASC, racks ASC, shelfs ASC, position ASC";
$sqlquery10 = mysqli_query($connC0,$sql10);
$contbd = mysqli_num_rows($sqlquery10);
//echo "Cantdad de Rows: ".$contbd."<br>";
mysqli_close($connC0);
	
    while ($row0 = mysqli_fetch_array($sqlquery10))
    {
    	echo "<div class='w3-col w3-container m2' style='background-color:white;'>";
    	if($cont==1 || $cont==$contbd){
	    	//echo $row0['rows'];

	    	$col=$row0['rows'];
	    	$connC01=conexion();
			$cont1=1;
			$contj=1;
			$sql101 = "SELECT * FROM location WHERE `rows` = '$col' GROUP BY racks ORDER BY racks ASC, shelfs ASC, position ASC ";
			$sqlquery101 = mysqli_query($connC01,$sql101);
			$contbd1 = mysqli_num_rows($sqlquery101);
			//echo "Cantdad de Racks: ".$contbd1."<br>";
			mysqli_close($connC01);
			while ($row01 = mysqli_fetch_array($sqlquery101))
    		{

    			//echo $row01['racks'];
    			$rack = $row01['racks'];
    			echo "<div class='w3-row w3-container m2' style='padding: 0px' onclick='selectbox('".$rack."');'>";
                echo "<input type='text' class='boxfill' id='".$rack."' style='width: 100%; text-align: center; background-color: yellow; border:0px' value='".$rack."'>";
                echo "</input>";
                echo"</div>";


            $contj++;
    		}
			echo "<div class='w3-row w3-container m2' style='background-color:white;' id='".$col."'>".$col."</div>";

    	$conti++;
		}
		$cont++;
		echo "</div>";
	} 
	

?>