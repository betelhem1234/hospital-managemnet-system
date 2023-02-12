<?php
//Variable Diclaration and Initialse from HTML Form

$email = validate_input($_POST["email"]);
$currentpassword = validate_input($_POST['cur_password']);
$newpassword = validate_input($_POST['new_password']);
$confirmPassword = validate_input($_POST['confirm_password']);


	$connection = mysqli_connect("localhost", "root", "");
	if (!$connection) {
		print("Server not found!!!");
	} else {
		mysqli_select_db($connection, "hospital");
		$sql = "SELECT email_address,password FROM reception where email_address = '$email' and password = '$currentpassword'";
		$query = mysqli_query($connection, $sql);
		
		if (mysqli_num_rows($query)<=0) {//if the user is not registered
			echo "You are not registered! please register first! ";
			print("<br><a href='receptionsign.php'>Go to Register</a>");
		} else {
			if ($newpassword != $confirmPassword) {//if password is not matched
				echo "Please confirm your password ! ";
				print("<br><a href='change_reception.php'>Back to Reset Password</a>");
			} else {//updates user password based on user name
				$sqlUpdate = "UPDATE reception SET Password = '$newpassword' where email_address = '$email'";
				$queryUpdate = mysqli_query($connection, $sqlUpdate);
				if (!$queryUpdate) {
					echo "Not Reset your password ! ";
					print("<br><a href='change_reception.php'>Back to Reset Password</a>");
				} else {
					header("location:receptionpage.php");
				}
			}
		}
	}

	mysqli_close($connection);

function validate_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
