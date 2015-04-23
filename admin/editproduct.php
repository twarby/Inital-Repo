<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Admin ~ Edit Product</title>
</head>
<body>
<div id="header">
<div id="title"><h1>Admin Area</h1></div></div>
<div id="button"><a href="../index.html"><b>Back to Main Website</b></a></div>
<ul class="nav">
  <li><a class="button" href="index.html">Home</a></li>
  <li><a class="button" href="addproduct.html">Add New Product</a></li>
  <li><a class="button" href="editproduct.html">Edit Product</a></li>
  <li><a class="button" href="removeproduct.html">Remove Product</a></li>
  <li><a class="button" href="addspecial.html">New Special Offer</a></li>
  <li><a class="button" href="help.html">Help</a></li>
</ul>
<div id="section"><h1>Welcome!</h1>
<p>Welcome to the Administrator page. In this area you will be able to control what products your viewers get to see. You can either Add a Product, Remove a product, or add a new special offer to an existing product.</p>
<p> Use the Navigation bar above to navigate this area, or use the Return to Main Website button at the top to make sure your changes have been saved, and to see what they look like Live on the site.</p>

<?php
if(isset($_POST['update']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$productid = $_POST['productid'];
$productname = $_POST['productname'];

$sql = "UPDATE products ".
       "SET productname = $productname ";
       "WHERE productid = $productid" ;

mysql_select_db('ecommerceweb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="" ....>
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="productid" type="text" id="productid"></td>
</tr>
<tr>
<td width="100">Employee Salary</td>
<td><input name="productname" type="text" id="productname"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>
<?php
}
?>
</div>
</body>
</html>
