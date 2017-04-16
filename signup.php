<?php
include 'dbh.php';
session_start();
	
	$first= $_POST['first'];
	$last= $_POST['last'];
	$uid= $_POST['uid'];
	$pwd= $_POST['pwd'];
	$_SESSION['first_name']=$first;
    $_SESSION['last_name']=$last;
    $_SESSION['email']=$uid;



	$sql="INSERT INTO user (first, last, uid, pwd) VALUES ('$first','$last','$uid','$pwd')";  // un the user () which column 
	$result=$conn->query($sql);//connect the sql and run the insert  

	header('Location: userProfile.php');//take you to the profile page
	



