<!DOCTYPE html>
<?php
include 'config.php';
if (isset($_POST['register_btn'])) {
	$firstname =mysqli_real_escape_string($con,$_POST['firstname']);
	$lastname =mysqli_real_escape_string($con,$_POST['lastname']);
	$email =mysqli_real_escape_string($con,$_POST['email']);
	$phonenumber =mysqli_real_escape_string($con,$_POST['phonenumber']);
	$password =mysqli_real_escape_string($con,$_POST['password']);
if (empty($firstname)) {
	$error="firstname field is required";
}
elseif (empty($lastname)) {
	$error="lastname field is required";
}
elseif (empty($email)) {
	$error="email field is required";
}
elseif (empty($phonenumber)) {
	$error="phonenumber field is required";
}
elseif (empty($password)) {
	$error="password field is required";
}
elseif (strlen($firstname) <3 || strlen($firstname) >30){
	$error="firstname must be between 3 to 30 characters";
}
elseif (strlen($lastname) <3 || strlen($lastname) >30){
	$error="lastname must be between 3 to 30 characters";
}
elseif (strlen($password) <6){
	$error="password must be atleast 6 characters";
}
else{
	$check_email="SELECT * FROM users WHERE email='$email'";
	$data=mysqli_query($con,$check_email);
	$result=mysqli_fetch_array($data);
	if ($result >0) {
		$error="Email already exist";	
	}
	else{
		$pass=md5($password);
		$insert="INSERT INTO users (firstname,lastname,email,phonenumber,password) Values('$firstname','$lastname','$email','$phonenumber','$pass')";
		$q=mysqli_query($con,$insert);
		if ($q) {
			$success="Your account has been created successfully";
		}
    }
}
}
?>
<html>
<head>
	<title>Register</title>
	<meta name="description" content="Register your account">
	<link rel="stylesheet" type="text/css" href="register.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<div class="register">
		
		<form action="" method="POST">
			<p style="color: red">
	
		<p>
			<?php
			if (isset($error)) {
				echo $error;
			}
			?>
		</p>
		<p style="color: green">
		
		<p>
			<?php
			if (isset($success)) {
				echo $success;
			}
			?>
		</p>
		<h3>Register Account?</h3>
			<input type="text" name="firstname" placeholder="Firstname" value="<?php
			if(isset($error))
			{
				echo $firstname;
				} ?>  "> 
			<input type="text" name="lastname" placeholder="Lastname">
			<input type="email" name="email" placeholder="Email" value="<?php
			if(isset($error))
			{
				echo $email;
				} ?>  ">
			<input type="text" name="phonenumber" placeholder="Phonenumber">

			<input type="password" name="password" placeholder="Password">

			<input type="submit" name="register_btn" value="Register">
		</form>
	</div>
</body>
</html>