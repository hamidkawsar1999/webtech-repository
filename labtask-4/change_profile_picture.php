<!DOCTYPE html>
<html>
<body>

<form action="profile picture  validation.php" method="post" enctype="multipart/form-data">
	<fieldset>
		 <legend>  Profile Picture:</legend> 
		<tr><th align ="left"><h3></h3>
	<img src="images/img.png" align="left" height="200" width="200"/>
<br><br><br>
  
  <br><br><br><br><br><br><br><br><br><br><input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>

<?php 

session_start();

if (isset($_SESSION['uname'])) {

	

	echo "<br><a href='Dashboard.php'>Back to dashboard</a>";
	echo "<br><a href='index.php'>Logout</a>";

}

else{
	header("location:Dashboard.php");
}


 include 'footer.php';

 ?>


 </body>
</html>