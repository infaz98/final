
<?php
class Customer	 {
    //This customer class will hold all the information about the customer

	public $name;
	public $color;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>	
 <meta charset="utf-8">
    <link rel="stylesheet" href="../css/itemPage.css">

<body>

    
    <header>

        <nav>
            <a href="../index.php">Home</a>
            <a href="../html/about.php">About Us</a>
            <a href="../php/customer.php">Profile</a>
            <a href="../php/logout.php">Log Out</a>
        </nav>
    </header>



<br>
<br>

<div>
<br>
<br>
<h4>Welcome <?php session_start(); echo $_SESSION['firstname']; ?>!</h4>
</div>
    </body>
</html>

