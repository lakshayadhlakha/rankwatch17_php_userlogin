<?php
	session_start();
		$conn=mysqli_connect("localhost", "root", "","rwdb") or die (mysql_error());
		$email=$_SESSION["user"];
		$sql="Select * from `registration` WHERE email='$email'";
	    $result = mysqli_query($conn,$sql) or die(mysql_error());
	    $row=mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto card">
            <div class="hero">
              <h1 class="hero-text">Hello</h1>
            </div>
            <form  id="needs-validation"  method="Post" novalidate>
              <div class="form-group">
                <label for="userFullName">Full Name</label>
                <input type="text" class="form-control" id="userFullName" name="userFullName" value=<?php echo $row["name"]; ?>>
              </div>
                <div class="form-group col-md-6">
                  <label for="userEmail">Email</label>
                  <input type="email" class="form-control" id="userEmail" name="userEmail" value=<?php echo $row["email"]; ?>>
                 </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="userNumber">Mobile Number</label>
                  <input type="text" class="form-control" id="userNumber" name="userNumber" value=<?php echo $row["contact"]; ?>>
                </div>
                <div class="form-group col-md-6">
                  <label for="userAge">Age</label>
                  <input type="text" class="form-control" id="userAge" name="userAge" value=<?php echo $row["age"]; ?>>
                </div>
              </div>
                <div class="form-group">
                <label for="userGender">Gender</label>
                <input type="text" class="form-control" id="userGender" name="userGender" value=<?php echo $row["gender"]; ?>>
              </div>
              <div class="form-group">
                <label for="userAddress">Address</label>
                <textarea rows="3" cols="10" class="form-control" id="userAddress" name="userAddress">
                <?php echo $row["address"]; ?>
                </textarea>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="userCountry">Country</label>
                  <input type="text" class="form-control" id="userCountry" name="userCountry" value=<?php echo $row["country"]; ?>>
                  
                </div>
                <div class="form-group col-md-6">
                <label for="userState">State</label>
                 <input type="text" class="form-control" id="userState" name="userState" value=<?php echo $row["state"]; ?>>
                 </div>
                 </div>
             </form>
              
</body>
</html>
