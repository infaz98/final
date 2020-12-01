<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="../css/style.css" />

</head>
<body>

<?php
require('db.php');

$con = mysqli_connect("qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","x7gfa04m8j6bbzb4","bkmq78c2l2u5k2l7","x79gx4shz3s1ep7o");

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 
 
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
 $firstName = stripslashes($_REQUEST['firstName']);
 $firstName = mysqli_real_escape_string($con,$firstName); 
 
 $lastName = stripslashes($_REQUEST['lastName']);
 $lastName = mysqli_real_escape_string($con,$lastName); 
 
 $address = stripslashes($_REQUEST['address']);
 $address = mysqli_real_escape_string($con,$address); 
 
 $phoneNumber = stripslashes($_REQUEST['phoneNumber']);
 $phoneNumber = mysqli_real_escape_string($con,$phoneNumber);

 //This SQL query will query store the registration information to the customer table and the password will save in hash format

        $query = "INSERT into users (firstname, lastname, phoneNumber, address, password, username)
VALUES ('$firstName' ,'$lastName' , $phoneNumber , '$address' , '$password' , '$username')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='../php/login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Sign Up</h1>

<form name="registration" action="" method="post">

<input type="text" name="firstName" placeholder="First Name" required />

<input type="text" name="lastName" placeholder="Last Name" required />

<input type="text" name="username" placeholder="Username" required />

<input type="password" name="password" placeholder="Password" required />

<input type="text" name="phoneNumber" placeholder="Contact Number" required />

<input type="text" name="address" placeholder="Shipping Address" required />

<input type="submit" name="submit" value="             Register            " />
</form>
<p>Already a Member? <a href='../php/login.php'>Log In Here</a></p>
</div>
<div class="form">
<a href= "../index.php" ><input type="submit" name="" value="    Back to Home Page    " /></a>

</form>

<?php } ?>
</body>
</html>
