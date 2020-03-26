<?php 
	session_start();				//function to start the session.

	$db = mysqli_connect("localhost", "root", "", "fitnessblender");

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	$query = "select * from members where username='".$username."' and password='".$password."'";
	$result = mysqli_query($db, $query);
	$num = mysqli_num_rows($result);

	if($num != '1'){
		
    	header("Location:login.html");
    }
    else{
    	$_SESSION['userid'] = $username;
    	header("Location:main.php");
    }
?>