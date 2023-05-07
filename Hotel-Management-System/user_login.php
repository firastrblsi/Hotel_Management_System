<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<style>
	div {
		width: 40%;
		height: 70%;
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%, -50%);
		font-size: 30px;
		padding-top: 25px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: #1E90FF;
		border: 10px solid #094198;
		border-radius: 15px;
	}
	body  {
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: #4AB8F9;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		text-decoration: none;  
		font-size: 25px;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #4AB8F9;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: #8c8c8c;
		box-shadow: 2px 2px #a6a6a6;
	}
	#felsa{
		margin-left:250px;
	}
</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-color: #E6F2F8;">
		<form action="" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input class="input" type="text" name="phone" placeholder="Enter phone" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input id="felsa" class="button"style="text-decoration: none;  font-size: 25px;" type="submit" value="Login" name='submit'>
		</form>
		<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0); 
	error_reporting(-1);
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	if (isset($_POST['submit'])){
		if (isset($_POST['phone'])) $phone = $_POST["phone"];
		if (isset($_POST['password'])) $pwd = $_POST["password"];
		$sql = "SELECT * from user_login";
		if ($result=mysqli_query($conn,$sql))
  		{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($phone==$row[0] && $pwd==$row[1])
    		{
				$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			$sql1 = "INSERT INTO temp_session VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]')";
	    		mysqli_query($conn, $sql1);
    			header("Location: user_view.php");
    			break;
    		}
    	}
		if (!($phone==$row[0] && $pwd==$row[1])){
			echo '<script>alert("Invalide phone number/password");</script>';
		}
  		mysqli_free_result($result);
		}
		
	}
	
?>
		<br>
		<table>
			<tr>
				<td style="color: #094198;"><b>New User?</b></td>
				<td style="color: #094198;"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>

</body>
</html>