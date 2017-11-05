<?php
    session_start();
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];
	
		$conn=mysqli_connect("localhost", "root", "","rwdb") or die (mysql_error());
		$sql="Select * from `registration` WHERE email='$email'AND password='$password'";
	    $result = mysqli_query($conn,$sql) or die("Error!!");
		$rows = mysqli_num_rows($result);

        if($rows){
	    $_SESSION['user'] = $email;

		header("Location: member.php");	
		}
		else
			{
			 print '<script>alert("Invalid Login");</script>';
			}
?>