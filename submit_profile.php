<?php
include 'connect.php';
if(isset($_POST)){
	$email = $_POST['email'];
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$user_stmt = $conn->prepare($sql);
	$user_stmt->execute();
	$get_user_result = $user_stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	if($_POST['type'] == 'company'){
		$email = $_POST['email'];
		$company_name = $_POST['company_name'];
		$cin = $_POST['cin'];
		$gst = $_POST['gst'];
		$pan = $_POST['pan'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$pin = $_POST['pin'];
		$organization_type = $_POST['organization_type'];
		
		$sql = "UPDATE `users` SET `org_name`='$company_name',`address`='$address',`city`='$city',`state`='$state',`cin`='$cin',`gst`='$gst',`pan`='$pan',`org_type`='$organization_type' WHERE email = '$email'";
		$stmt = $conn->prepare($sql);
		if($stmt->execute()){
			$data = [
				"status" => "Success"
			];
		}else{
			$data = [
				"status" => "Error"
			];
		}

		echo json_encode($data);
	}else if($_POST['type'] == 'contact'){
		$email = $_POST['email'];
		$full_name = $_POST['full_name'];
		$designation = $_POST['designation'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$optional_email = $_POST['optional_email'];

		$sql = "UPDATE `users` SET `full_name`='$full_name',`designation`='$designation',`mobile`='$number',`email`='$email',`alternative_email`='$optional_email' WHERE email = '$email'";
		$stmt = $conn->prepare($sql);
		if($stmt->execute()){
			$data = [
				"status" => "Success"
			];
		}else{
			$data = [
				"status" => "Error"
			];
		}

		echo json_encode($data);
	}else if($_POST['type'] == 'epr'){
		$email = $_POST['email'];
		$role = $_POST['role'];
		$annual_qnt = $_POST['annual_qnt'];
		$target_year = $_POST['target_year'];
		$material_type = isset($_POST['material_type']) 
		? implode(",", $_POST['material_type']) 
		: "";

		$plastic_category = isset($_POST['plastic_category']) 
		? implode(",", $_POST['plastic_category']) 
		: "";
		$check = $conn->prepare("SELECT id FROM epr_role_identification WHERE user_id = ?");
		$check->bind_param("s", $get_user_result[0]['id']);
		$check->execute();
		$result = $check->get_result();
		if ($result->num_rows > 0) {
			$sql = "
			UPDATE epr_role_identification SET 
			role=?, 
			material_type=?, 
			plastic_category=?, 
			annual_qnt=?, 
			target_year=?
			WHERE user_id=?
			";
			$update = $conn->prepare($sql);
			$update->bind_param('ssssss',$role,$material_type,$plastic_category,$annual_qnt,$target_year,$get_user_result[0]['id']);
			$update->execute();

			if($update->execute()){
				$data = [
					"status" => "Success"
				];
			}else{
				$data = [
					"status" => "Error"
				];
			}
			echo json_encode($data);
		} else {
			$sql = "
			INSERT INTO epr_role_identification (user_id, role, material_type, plastic_category, annual_qnt, target_year)
			VALUES (?, ?, ?, ?, ?, ?)
			";
			$insert = $conn->prepare($sql);
			$insert->bind_param("ssssss", $get_user_result[0]['id'],$role,$material_type,$plastic_category,$annual_qnt,$target_year);

			if($insert->execute()){
				$data = [
					"status" => "Success"
				];
			}else{
				$data = [
					"status" => "Error"
				];
			}
			echo json_encode($data);
		}

	}
}