<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Products</title>
</head>

<body>

<div id="container">
<div id="header">
<div id="logo">
	<img src="images/logo.png" id="logo">
</div>
<div id="basket"><div id="searchlogo"><img src="images/searchlogo.png"></div><h4>SEARCH</h4>
</div>
</div>

<div id="container">
<ul class="nav">
  <li><a class="button" href="index.html">Home</a></li>
  <li><a class="button" href="products.php">Products</a></li>
  <li><a class="button" href="offers.html">Special Offers</a></li>
  <li><a class="button" href="aboutus.html">About Us</a></li>
  <li><a class="button" href="contactus.html">Contact Us</a></li>
</ul>
<div id="searchbox"><div id="basketlogo"><img src="images/basketlogo.png"></div><h3>BASKET</h3></div>
</div>
<div id="section">
<h2>Products</h2>
<p>
Check out all of our latest stock and awesome products!
</p>
<p>
Another Paragraph goes here
</p>

<?php
	// Connect to database server
	mysql_connect("localhost", "root", "password") or die (mysql_error ());

	// Select database
	mysql_select_db("ecommerceweb") or die(mysql_error());

	// SQL query
	$strSQL = "SELECT * FROM products";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	while($row = mysql_fetch_array($rs)) {

	// Write the value of the column FirstName (which is now in the array $row)
	echo "<img src=\"/admin/uploads/".$row['imagename'] ."\" height=\"150\" width=\"150\"><br />";
	echo "<strong>";
	echo $row['productname'] . "<br />";
	echo "</strong>";
	echo "&pound;".$row['price'] . "<br />";
	echo $row['description'] . "<br />";
	echo "<br />";
	}

	// Close the database connection
	mysql_close();
	?>

</div>

<div id="footer">
&copy; Copyright 2015
</div>

</body>
</html>