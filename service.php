<?php
header("Content-type: application/json");

if(isset($_POST['aa']) && isset($_POST['bb'])){   	
	$aa = $_POST['aa'];
	$bb = $_POST['bb'];
}else{
    $aa = $_GET['aa'];	
	$bb = $_GET['bb'];
}
			
		$test_array = array (
		    'a' => $aa,
			'b' => $bb,
			'rezultat_sabiranja' => ($aa+$bb),
			'rezultat_oduzimanja' => ($aa-$bb),
			'rezultat_mozenja' => ($aa*$bb),
			'rezultat_deljenja' => ($aa/$bb),
		);
		
		echo json_encode($test_array);
		
	
?>