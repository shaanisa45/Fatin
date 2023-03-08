<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<center>
		<h2>REGISTER</h2>
    </center>
    <center>
    	<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px">

    		<form action="" method="post">

    			<tr>
    				<td>Firstname</td>
    				<td>:</td>
    				<td><input type="text" name="firstname" required><br><br></td>
    			</tr>
    			<tr>
    				<td>Lastname</td>
    				<td>:</td>
    				<td><input type="text" name="lastname" required><br><br></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td>:</td>
    				<td><input type="email" name="email" required><br><br></td>
    			</tr>
    			<tr>
    				<td>Phonenumber</td>
    				<td>:</td>
    				<td><input type="phonenumber" name="phonenumber" required><br><br></td>
    			</tr>
    			<tr>
    				<td>Password</td>
    				<td>:</td>
    				<td><input type="password" name="password" required><br><br></td>
    			</tr>
    			<tr>
    				<td colspan="3">
    					<center>
    						<input type="submit" name="submit" value="Submit">
    					</center>
    				</td>
    				</tr>
    			</form>
    		</table>
    	</center>
</body>
</html>
<?php
include "connection.php";

if (isset($_POST['submit'])) {
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

	$result =mysqli_query($link, "INSERT INTO useraccounts (firstname, lastname, email, phonenumber, password) VALUES ('$firstname','$lastname','$email','$phonenumber','password')");

	echo "<script>alert('Your account has been created successfully');
	window.location='register.php'</script>";
}
?>