<?php
@session_start();
$userID = $_SESSION["userID"];

function createDatabaseConnection(){
    //1. connect to database

    $conn = mysqli_connect("qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","x7gfa04m8j6bbzb4","bkmq78c2l2u5k2l7","x79gx4shz3s1ep7o");
    return $conn;
}

//1 connection
$conn = createDatabaseConnection();

//2 first query
$sql = "select * from orders where userID = $userID";

//3 run the first query
$result = mysqli_query($conn, $sql) or die("error : " . mysqli_error($conn));

//4 show the first query
while ($row = $result->fetch_assoc()){
    echo "<h3>Order Number: ".$row["orderNum"]."</h3>";
    echo "<h3>Shipping Address: ".$row["shipAddress"]."</h3>";
    echo "<h3>Time: ".$row["orderdate"]."</h3>";

    // second query
    $sql2 = "select * from orderedProducts where orderID = ".$row["orderNum"];
    // run the second query
    $result2 = mysqli_query($conn, $sql2);
    while ($row2 = $result2->fetch_assoc()){
        echo "<p>ID: ".$row2["productID"]." Qty: ".$row2["qty"]."</p>";
    }
}
