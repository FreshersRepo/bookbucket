<?php
  if($_POST){
    header("Location:Login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 11px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
	<title>Success</title>
</head>
<body>

	<div style="text-align:center;">
		<h2><span style="color:#2fb3e0">Congratulations!!!</span> <span style="color:#2fb3e0">Registration Successful !!!</span></h2>
		<h3> Please Login to continue</h3>
		<form method="post">
			<input type="submit" name="login" value="Login" class="button">
		</form>
	</div>
</body>
</html>
