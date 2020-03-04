<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Student";
$var=[];
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'Student');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET["id"];
$name=$_GET["name"];
$mobile=$_GET["mobile"];
$address=$_GET["address"];
// $content=json_encode($id." ".$name." ".$mobile." ".$address);

// VALUES ($name, $mobile,$address)";
$sql = "INSERT INTO studenttable (name, mobile, address)
VALUES ('$name', '$mobile','$address')";


if ($conn->query($sql) === TRUE) {
   
	echo json_encode("New record created successfully");
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
	echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}


mysqli_close($conn);
?>








