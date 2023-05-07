<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #E6F2F8;">
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: #094198;"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input id="felsa" class="button" style="font-size: 25px; " type="submit" value="Login" name="submit"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>

				<td style="color: #094198;"><b>Unable to Login</b></td>
			</tr>
			<tr>

				<td><button type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>
<?php 
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0); 
	error_reporting(-1);
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	if (isset($_POST["submit"])){
		$user = $_POST["adminid"];
		$pwd = $_POST["password"];
		$sql = "SELECT adminid, password from admin";
		if ($result=mysqli_query($conn,$sql))
		{
			while ($row=mysqli_fetch_row($result))
			{
				if($user==$row[0] && $pwd==$row[1])
				{
					header("Location: admin_view.php");
					break;
				}
				else{
					echo '<script>alert("Invalide phone number/password");</script>';
				}
			}
			
			mysqli_free_result($result);
	}
}	
?>