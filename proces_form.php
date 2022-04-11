<?php
if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobileno']) && isset($_POST['query'])) {
	include "db.php";

	$requestid = time();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$query = $_POST['query'];
	$sql = "INSERT INTO `requestform`(`request_id`, `name`,`email`, `mobileno`, `query`) VALUES ('$requestid','$name','$email','$mobileno','$query')";
	$result = mysqli_query($con , $sql);
	
	session_start();
	if ($result) {
		$_SESSION['msg'] = "Enquiry Submitted";
		header('location:index.php');
	}else{
		$_SESSION['msg'] = "Enquiry Not Submitted";
		header('location:index.php');
	}
}



?>