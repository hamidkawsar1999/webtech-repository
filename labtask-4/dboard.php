<!DOCTYPE html>
<html>
<head>
	<fieldset>

	<h2>ABC Company</h2>
	<img src="images/image.jpg" align="top" height="200" width="100"/>
	<link rel="stylesheet" type="text/css" href="Styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<fieldset>
<?php 

session_start();

if (isset($_SESSION['uname'])) {

	echo "<h2>Welcome </h2>";


	echo "<br><a href='Dashboard.php'>Back to dashboard</a>";
	echo "<br><a href='index.php'>Logged in as kawsar</a>";
	echo "<br><a href='index.php'>Logout</a>";

}

else{
	header("location:Dashboard.php");
}

 include 'footer.php';

 ?>

 </fieldset>
 </fieldset>
 </body>
</html>