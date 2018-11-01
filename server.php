<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'hamrodookan');

	$sql = $conn->prepare("(SELECT * FROM alldata WHERE product_name LIKE ?) UNION (SELECT * FROM apple_computer WHERE product_name LIKE '%$search_param%')UNION (SELECT * FROM hp_computer WHERE product_name LIKE '%$search_param%')UNION (SELECT * FROM oppo_mobile WHERE product_name LIKE '%$search_param%')");
	$sql->bind_param("s",$search_param);	
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["product_name"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

