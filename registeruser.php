<?php
session_start();
include "config.php";
if(isset($_POST["first_name"]))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$state= $_POST['state'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	if(!preg_match($emailValidation,$email)){
		echo "<alert>this $email is not valid..!</alert>";
		exit();
	}
	
		if(strlen($password) < 9 ){
		echo "<alert>Password is weak</alert>";

		exit();
	}
		if(!preg_match($number,$phone)){
		echo "<b>Mobile number $phone is not valid</b>";
		exit();
	}
	if(!(strlen($phone) == 10)){
		echo "<b>Mobile number must be 10 digit</b>";

		exit();
	}

//checking if user already exixts
$sql="select user_id from user_info where email='$email' LIMIT 1";
$check_query=mysqli_query($con,$sql);
$count_email=mysqli_num_rows($check_query);
$_SESSION['eid']=$email;
if($count_email > 0){
		echo "<b>Email Address already exists. Try Another email address</b>";
		exit();
}
 else {
		
		$sql = "INSERT INTO user_info(first_name,last_name,age,gender,email,passwrd,mobile,address,city,state1,zip) VALUES ('$first_name', '$last_name','$age','$gender', '$email', 
		'$password', '$phone', '$address', '$city','$state','$zip')";
		 $run_query = mysqli_query($con,$sql);
		 if($run_query)
		 {
			echo "registered Successfully";
			header("location:login.html");
		 }
		else
			echo "failed to register";
		
	}
	
}
?>
