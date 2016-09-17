<?php 
include('connection.php');
$outp = "";
$statement = $db->prepare("SELECT * FROM product_status");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) {
		if($outp != "") {
			$outp .= ",";
		}
		$outp .= '{"status_id":"'.$row['status_id'] . '",';
		$outp .= '"status_name":"'.$row['status_name'] . '"}';
	}
	$outp = '{"records" :['.$outp.']}';

	echo ($outp);
?>