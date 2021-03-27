<?php

	$conn = mysqli_connect('localhost','root');
	

	mysqli_select_db($conn, 'register');

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$enc_pass = base64_encode($password);
	$enc_cpass = base64_encode($cpassword);

	$query = "insert into registration(Username, Email, Password, CPassword) values('$username', '$email', '$enc_pass', '$enc_cpass')";
	mysqli_query($conn, $query);

	echo "You have registered successfully";

?>