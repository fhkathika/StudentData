<?php

$id=$_GET["id"];



$name=$_GET["name"];


$mobile=$_GET["mobile"];


$address=$_GET["address"];

echo json_encode($id." ".$name." ".$mobile." ".$address);


?>
