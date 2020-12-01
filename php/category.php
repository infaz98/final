<?php


//1. connect to database
$server = "qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "x7gfa04m8j6bbzb4";
$password = "bkmq78c2l2u5k2l7";
$database  = "x79gx4shz3s1ep7o";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

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