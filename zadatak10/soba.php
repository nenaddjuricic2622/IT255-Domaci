  <?php

    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");
	$data = array();

$data1 = array('broj' => '11', 'vrsta' => 'jednokrevetna', 'brojKreveta' => '1', 'kvadrata' => '15');
$data2 = array('broj' => '22', 'vrsta' => 'dvokrevetna', 'brojKreveta' => '2', 'kvadrata' => '25');
$data3 = array('broj' => '33', 'vrsta' => 'trokrevetna', 'brojKreveta' => '3','kvadrata' => '35');
$data4 = array('broj' => '44', 'vrsta' => 'cetvorokrevetna', 'brojKreveta' => '4','kvadrata' => '40');
$data5 = array('broj' => '55', 'vrsta' => 'jednokrevetna', 'brojKreveta' => '1','kvadrata' => '40');

	$data = [$data1, $data2, $data3, $data4, $data5];
	echo json_encode($data);
	
?>