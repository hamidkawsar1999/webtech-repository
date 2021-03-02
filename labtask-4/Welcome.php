<!DOCTYPE html>
<html>
<head>
	<fieldset>
	
	<title></title>
	
 

<?php 
     session_start() ;
     ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Title of the document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h2>ABC Company</h2>
	<img src="images/image.jpg" align="top" height="200" width="100"/>
	<ul><li><a href="Welcome.php"align="top">Home</a></li>
		<li><a href="index.php">Login</a>
		<li><a href="Registration.php">Registration</a>
		</li></ul>

<fieldset>
<?php
  $_SESSION['username']="Welcome to ABC company";
  echo $_SESSION['username'];




?>
</fieldset>
<?php include 'footer.php'; ?>

</fieldset>
</body>
</html>