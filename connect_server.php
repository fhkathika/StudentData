// <?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
// $conn = new mysqli($servername, $username, $password);
// $conn = mysqli_connect('localhost', 'root', '', 'information');

// Check connection
// if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";



// Create database
// $sql = "CREATE DATABASE information";
// if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully";
// } else {
    // echo "Error creating database: " . $conn->error;
// }

// sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
    // echo "Table MyGuests created successfully";
// } else {
    // echo "Error creating table: " . $conn->error;
// }
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('fariha', 'kathika', 'fhkathika057@gmail.com')";

// if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
	 
// } else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// $conn->close();
// ?>


<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$var=[];
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'information');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT  firstname, lastname,email FROM MyGuests";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result)) {
      
		 array_push($var,array(
"firstname" => $row["firstname"],
"lastname" => $row["lastname"],
"email" => $row["email"]
));
// echo $var;
	   }
} else {
    echo "0 results";
}
echo json_encode($var);
mysqli_close($conn);
?>








