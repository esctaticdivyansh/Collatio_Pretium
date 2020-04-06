<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($search=="watch")
{
	$sql = "SELECT PNAME,PRICE,PLINK,PIMAGE FROM Amazon_watch,Flipkart_watch";
	$result = $conn->query($sql);
}


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

            $img_name = $rows['PNAME'];
            $img_src = $rows['PIMAGE'];
            $img_price=$rows['PRICE'];
       // echo "Poduct Name: " . $row["Product name"]. " - price: " . $row["Price"]. "<br>";
     }
 } else {
     echo "0 results";
}
header('watches.html');
$conn->close();
?