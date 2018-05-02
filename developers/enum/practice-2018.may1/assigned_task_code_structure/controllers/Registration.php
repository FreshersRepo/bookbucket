
<?php

if ($_POST) {

	$errors = array();
	if (empty($_POST['first_name']))
		$errors['first_name'] = "Name cannot be empty";
	if (strlen($_POST['first_name']) < 3)
		$errors['first_name'] = "Name must be at least 3 characters long";
	if (empty($_POST['surname']))
		$errors['surname'] = "Name cannot be empty";
	if (strlen($_POST['surname']) < 3)
		$errors['surname'] = "Name must be at least 3 characters long";
	if(empty($_POST['email']))
		$errors['email1']= "Email can not be empty!";
	if (empty($_POST['password']))
		$errors['pass1']= "Please enter your password";
	if (strlen($_POST['password']) < 6)
		$errors['pass2']= "Password must be at least 6 characters long";
	if($_POST['password'] != $_POST['confirm_password'])
		$errors['pass3']= "Passwords did not match";
	if (empty($_POST['gender']))
		$errors['gender']= "Please Select Your Gender";
	if(empty($_POST['city']))
		$errors['city'] = "Enter your city";
	if(empty($_POST['area']))
		$errors['area'] = "Enter your area";
	if(empty($_POST['contact_no']))
		$errors['contact_no'] = "Enter your contact no please";

	if(count($errors) == 0){
		include("../config/db/DBConnect.php");
		if ($connection){
			// DEBUG: echo"connection established";

			$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
			$surname = mysqli_real_escape_string($connection, $_POST['surname']);
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$contact_no = mysqli_real_escape_string($connection, $_POST['contact_no']);
			$city = mysqli_real_escape_string($connection, $_POST['city']);
			$area = mysqli_real_escape_string($connection, $_POST['area']);
			$gender = mysqli_real_escape_string($connection, $_POST['gender']);

			$query = "INSERT INTO `user` (`first_name`, `surname`, `email`, `password`, `contact_no`, `city`, `area`, `gender`) VALUES ( '$first_name', '$surname', '$email', '$password', '$contact_no', '$city', '$area', '$gender')";
			$update = mysqli_query($connection, $query);

			if($update) {
				// DEBUG: echo"$name's registration successful.";
				header("Location:Congratulation.php");
			}
		}
	}
 }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="..\css\registration.css">
	</head>

	<body>
		<div style="display: flex;align-items: center;justify-content: center;">
			<div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; background:#e8eef4;">
				<h3 style="text-align:center;color:#465360">User Registration Form</h3>
				<form action="" method="post" name="registration">
					<table style="padding:10px;">
						<tr>
							<td style="color:#465360"><b>First name</b></td>
							<td><input type="text" name="first_name" value="">
							<span class="error"></span>
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Surname</b></td>
							<td>
								<input type="text" name="surname" value="">
								<span class="error"></span>
								<span class="error"></span>
							</td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Email</b></td>
							<td><input type="email" name="email" value="">
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Password</b></td>
							<td><input type="password" name="password">
							<span class="error"></span>
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Confirm Pass. </b></td>
							<td><input type="password" name="confirm_password">
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Phone</b></td>
							<td><input type="text" name="contact_no" value="">
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>City</b></td>
							<td><input type="text" name="city" value="">
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Area</b></td>
							<td><input type="text" name="area" value="">
							<span class="error"></span></td>
						</tr>
						<tr>
							<td style="color:#465360"><b>Gender</b></td>
							<td><input type="radio" name="gender" value="male">Male
									<input type="radio" name="gender" value="female">Female
									<span class="error"></span></td>
						</tr>
						<tr><td> </td><td> </td></tr>
						<tr><td> </td><td> </td></tr>
						<tr>
							<td></td>
							<td style="text-align: right;"><button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 5px;background: #dddddd;"><b>Submit</b></button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/free-website-sign-up?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div></body>
</html>
