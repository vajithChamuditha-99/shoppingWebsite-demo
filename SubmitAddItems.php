<?php
//Escape user inputs for security
$name =$_Post["field1"];
$code=$_Post["field2"];
$price=$_Post["field3"];
$qty=$_Post["field4"];
$des=$_Post["field5"];

$sql="INSERT INTO item(item_id,item_code,item_name,item_description,price,qty) 
VALUES ('','$code','$name','$des','$price','$qty')";
if(mysqli_query($conn,$sql)){
header("Location:index.php");
}
else{
	echo "<script>alert('ERROR: Could not able to execute $sql. ')</script>";
}
mysqli_closs($conn);
?>