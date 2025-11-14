<?php
include 'connect.php';

// Sanitize inputs
$orgName = $_POST['orgName'] ?? '';
$email = $_POST['email'] ?? '';
$contact = $_POST['contact'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$state = $_POST['state'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$cin = $_POST['cin'] ?? '';
$org_type = $_POST['org_type'] ?? '';

if (!$orgName || !$email || !$contact || !$address || !$city || !$state || !$pincode || !$cin || !$org_type) {
  echo '<span class="text-danger">All fields except logo are mandatory.</span>';
  exit;
}

// Handle logo upload (optional)
$logo_path = "";
if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
  $uploadDir = "uploads/";
  if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

  $fileName = time() . "_" . basename($_FILES["logo"]["name"]);
  $targetFile = $uploadDir . $fileName;

  if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
    $logo_path = $targetFile;
  }
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO users (org_name, email, contact, address, city, state, pincode, cin, org_type, logo_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisssssss", $orgName, $email, $contact, $address, $city, $state, $pincode, $cin, $org_type, $logo_path);

if ($stmt->execute()) {
  echo 'Organization details saved successfully!';
} else {
  echo '<span class="text-danger">Error: ' . $conn->error . '</span>';
}

$stmt->close();
$conn->close();
?>
