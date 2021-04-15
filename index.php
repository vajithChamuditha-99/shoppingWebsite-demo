<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>
 <head>
<!-- add a title (a) -->
	<title>My Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css" >
	
	<p class="date" id="p1"></p>
	<script>

		var today = new Date();

		var date =today.getDate() +'.'+(today.getMonth()+1)+'.'+today.getFullYear();
		
		document.getElementById("p1").innerHTML = date;
	</script>
 </head>
 <body>
 <!-- add a logo (b) -->
	<img class="logo"  src="..\src\images/shoping cart logo.png" height="200" width="200" alt="Shopping Cart Image">

<center>
 <!-- add a header (c)-->
	<h1>Shopping Cart</h2> 
<!-- add a sub-header (c) -->
	<h3>The online shopping store</h3>
 <!-- add a horizontal line (d)-->
<hr id="test"/>
</center>
 <!-- add a horizontal menu (e) -->
<ul class="menu">
	<li class="menu"><a href="../src/index.html">Home</a></li>
	<li class="menu"><a href="../src/news.html">News</a></li>
	<li class="menu"><a href="../src/register.html">Contact</a></li>
	<li class="menu"><a href="https://courseweb.sliit.lk/">About us</a></li>
	<li class="menu"><a href="addItems.html">Add New Items</a></li>
</ul>
<br/><br/>
	
 <!-- add a table (f)-->
<center>
<div class="productData tbl" style="border-style:groove; border-color:DarkBlue;">
	<table border="1" width="100%">
	<tr>
		<th class="col1">Item ID</th>
		<th class="col1">Item code</th>
		<th class="col1">Item Name</th>
		<th class="col1">Item Description</th>
		<th class="col1">Price</th>
		<th class="col1">Quantity</th>
	</tr>


<?php
$sql ="SELECT item_id,item_code,item_name,item_description,price,qty FROM item";

$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo"<tr><td>".$row["item_id"]."</td><td>".$row["item_code"]."</td><td>".$row["item_name"]."</td><td>".$row["item_description"]."</td><td>".$row["price"]."</td><td>".$row["qty"]."</td></tr>";
	}
}
else{
	echo "0 result";
	}
echo "</table>";
$conn->close();


?>
 <!-- add a horizontal line (d)-->
<hr>

 <!-- add a footer (g)-->
<h3 style="font-weight: bold; font-style: italic;">Created by: Binuri Karunathilake</h3>
<br>
<a href="http://courseweb.sliit.lk/">Visit to Our Course</a>
</center>
</footer>
</body>
</html>
