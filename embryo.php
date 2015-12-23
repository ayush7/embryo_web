<?php
$con=mysqli_connect("mysql.hostinger.in","u714524323_bits","embryo2013","u714524323_bits");
if(isset($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	$query=mysqli_query($con,"INSERT INTO feedback(name,message,email,subject) VALUES('$name','$message','$email','$subject')");
	if($query){
		echo 'Yes';

	}
	else{
		echo 'No';
	}
}
?>