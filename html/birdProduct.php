<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Ruff - Bird Foods</title>

    <link rel="stylesheet" href="../css/itemPage.css">

</head>

<body>
    
    <header>

        <nav>
            <a href="../index.php">Home</a>
            <a href="../html/about.php">About Us</a>
             <?php
        	session_start();
        	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    			
    		echo "  <a href = 'php/customer.php' >Hello ". $_SESSION['firstname'] . "   </a>";
    		
    	} else {
    		echo "<a href='php/registration.php'> Become a Member</a>";
	}      
	?>
            <a href="../php/viewOrder.php">Shopping cart</a>
        </nav>
    </header>

    <section>
    <br>
    <img src="../images/bird_food.jpg" alt="Paris" class="centerImg">
    <br>
    

<?php

//1. connect to database

$conn = mysqli_connect("qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","x7gfa04m8j6bbzb4","bkmq78c2l2u5k2l7","x79gx4shz3s1ep7o");

//2. create a query
// take input from selected category;
if (isset($_GET["category"])){
    echo "<h1>".$_GET["category"]."</h1>";
    $sql = "select * from products where category = ".$_GET["category"];
}else{
    $sql = "select * from products where category = 3";
}


//3. run the query on that connection
$result = mysqli_query($conn,$sql);

//4. show result
while ($row = $result->fetch_assoc()){
    ?>
    <div class="cc">
    <div class="row">
    
        <div class="column">
          <div class="card">
            <h3><?php echo $row["name"]; ?></h3>
            <img src="<?php echo $row["image"]; ?>" class="imgFood">
            <p><?php echo $row["descriptions"]; ?></p>
        
        <form action="addToCart.php" method="post">
            <input name="productID" value="<?php echo $row["id"]; ?>" type="hidden">
            <input name="qty" type="number" placeholder="QTY" min="0">
            <input type="submit" value="Add to cart">
        </form>
        
          </div>
        </div>
        
       </div>
    </div>
    </section>
    <?php
}
?>
        
    <footer>
        <br>
        <p>Author: Pudubu Dasun<br>
        <a href="mailto:info@petruff.com">info@petruff.com</a></p>
     </footer>
    
     <script src="../js/addItem.js"></script>
    
</body>
</html>
