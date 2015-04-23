<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Admin ~ Add Product</title>
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
<div id="section"><h1>Add New Product</h1>
<p>Use the form below to add details about a New product you wish to add to the website.</p>
<p>Select the image option if you wish to add an image to the Product.

<p><form method="post" action="get_info.php">
Product Name:<red>*</red><br>
<input type="text" name="productname">
<br>
Price:<red>*</red><br>
&pound;<input type="number" name="price" step="any">
<br>
Description:<red>*</red><br>
<textarea name="description" rows=5 cols=60></textarea><br>
Special Offer:<red>*</red><br>
<input type="checkbox" name="specialoffer" value="1"> <i>Tick if this item is a special offer!</i><br><br> 
Image name: <i>Please include file extension!</i><br>
<input type="text" name="imagename">
<br><br>
<input type="submit"  type="submit" value="Add Product"/>
<input type="reset" type="reset" value="Clear Form" />
<br><br>

</form>

<h2>Image Upload</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form><br>

</div>
</body>
</html>
