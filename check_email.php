<?php
include 'connect.php';

$email = $_POST['email'] ?? '';

if (!$email) {
  echo json_encode([
    "Status" => "Error",
    "Message" => "Please enter email"
  ]);
  exit;
}

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
  $data = [
    "Status" => "Success",
    "Message" => "Email Found"
  ];
} else {
  $data = [
    "Status" => "Error",
    "Message" => "Email Not Found"
  ];
}

echo json_encode($data);

$stmt->close();
$conn->close();
?>
