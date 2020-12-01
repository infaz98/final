<?php


//1. connect to database

$conn = mysqli_connect("qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","x7gfa04m8j6bbzb4","bkmq78c2l2u5k2l7","x79gx4shz3s1ep7o");

//2. create a query
$sql = "select * from category";

//3. run the query on that connection
$result = mysqli_query($conn, $sql);

//4. show result
while ($row = $result->fetch_assoc()) {
    echo $row["id"] . " " . $row["name"];
?>
    <li><a href=""><?php echo $row["name"]; ?></a></li>
<?php
}