<?php
session_start();
if($_POST){
		include("../config/db/DBConnect.php");
		if ($connection)
		{
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			//echo $password;
			$query = "SELECT email, password
                FROM user
                WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($connection, $query);
			$num_rows = mysqli_num_rows($result);
				if($num_rows)
				{
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;

          header("Location: UserProfile.php");
				} else {
					echo"Error Login! Incorrect email or password.";
				}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>

  <div style="text-align:center;">
    <div style="border: 2px solid #a1a1a1; border-radius: 20px; display: inline-block;border: 1px solid #989fa5; text-align:center;background:#e8eef4;">
      <h2 style="text-align:center;color:#465360">Login to Bookbucket</h2>
      <form action="" method="post" name="" style="padding: 10px;">
        <table>
          <tr>
            <td style="color:#465360"><b>Email</b></td>
            <td><input type="text" name="email" autofocus></td>
          </tr>
          <tr>
            <td style="color:#465360"><b>Password</b></td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td><span id="error-msg"></span></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td style="text-align: right;"><button type="submit" name="submit" style="border: 2px solid #a1a1a1; border-radius: 20px;background: #dddddd;"><b>Login</b></button></td>
          </tr>
        </table>
      </form>
      </div>
</body>
</html>
