<?php


	if (isset($_POST['submit']))
	{
	    $name = mysql_real_escape_string($_POST['userFullName']);
	    $email = mysql_real_escape_string($_POST['userEmail']);
	    $password = mysql_real_escape_string($_POST['userPassword']);
	    $contact = mysql_real_escape_string($_POST['userNumber']); 
	    $age = mysql_real_escape_string($_POST['userAge']);
	    $gender = mysql_real_escape_string($_POST['userGender']);
	    $address= mysql_real_escape_string($_POST['userAddress']);
	    $country= mysql_real_escape_string($_POST['userCountry']);
	    $state= mysql_real_escape_string($_POST['userState']);

	    $conn=mysqli_connect("localhost", "root", "","rwdb") or die (mysql_error());
	    $result =mysqli_query($conn,"INSERT INTO registration (name,email,password,contact,age,gender,address,country,state) VALUES ('$name','$email','$password','$contact',$age,'$gender','$address','$country','$state')");
	    if($result)
		header('Location: login.html'); 

		else{
		header('Location:register.html');
	}


	
		}
	
		
?>