<?php
$servername="localhost";
$username="root";
$password="";
$dbname="shopping cart";

//Create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//Check connection
if($conn->connect_error){
die("connection failed: " . $comm->connect_error);
}
echo "<script>alert('connected successfully')</script>"
?>