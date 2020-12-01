<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Ruff - Dog Foods</title>

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
            <img src="../images/dog_food.jpg" alt="Paris" class="centerImg">
            <br>
            
        <div class="row">
            <div class="column">
              <div class="card">
                <h3>Bakers</h3>
                <img src="../images/foods/dog_food_one.jpg" class="imgFood"> 
                <p>Price $30</p>
                <button class="button">
                    Add to Cart
                </button>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <h3>Adult Dog</h3>
                <img src="../images/foods/dog_food_two.jpeg" class="imgFood">
                <p>Price $20</p>
                <button class="button">
                    Add to Cart
                </button>
            </div>
            </div>
            
            <div class="column">
                <div class="card">
                  <h3>Wilderness</h3>
                  <img src="../images/foods/dog_food_three.jpeg" class="imgFood">
                  <p>Price $20</p>
                  <button class="button">
                      Add to Cart
                  </button>
              </div>
              </div>
              
            <div class="column">
              <div class="card">
                <h3>Baby Blue</h3>
                <img src="../images/foods/dog_food_four.jpeg" class="imgFood">
                <p>Price $25</p>
                <button class="button">
                    Add to Cart
                </button>
              </div>
            </div>
         </div>
        </section>
        <footer>
            <br>
            <p>Author: Pudubu Dasun<br>
            <a href="mailto:info@petruff.com">info@petruff.com</a></p>
         </footer>
        
     <script src="../js/addItem.js"></script>
    
</body>
</html>
