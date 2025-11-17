<?php
include 'connect.php';
if($_POST['email']){
	$email = $_POST['email'];
	$sql = "SELECT * FROM users s LEFT JOIN epr_role_identification epr ON s.id = epr.user_id LEFT JOIN regulatory_details reg ON s.id = reg.user_id WHERE s.email = '$email'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

if(count($result) > 0){
	$data = [
    "Status" => "Success",
    "Message" => "data found",
    "data" => $result[0]
  ];
}else{
	$data = [
    "Status" => "Error",
    "Message" => "No data found",
    "data" => []
  ];
}

echo json_encode($data);
$stmt->close();
$conn->close();
}else{
	$data = [
    "Status" => "Error",
    "Message" => "Email Required",
    "data" => []
  ];
  echo json_encode($data);
}

