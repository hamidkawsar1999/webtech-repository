<!DOCTYPE html>
<html>
<head>
	<fieldset>
<body>

	<h2>ABC Company</h2>
	<img src="images/image.jpg" align="top" height="200" width="100"/>
	
<form action="profile picture  validation.php" method="post" enctype="multipart/form-data">
<fieldset>
	
		 <legend> Profile:</legend> 
		<tr><th align ="left"><h3></h3>
	<img src="images/img.png" align="left" height="200" width="200"/>
	<?php 

session_start();

if (isset($_SESSION['uname'])) {

	echo "<br><br><br><br><br><br><br><br><br><br><br><br><a href='change_profile_picture.php'>Change</a>";

	
}

else{
	header("location:Dashboard.php");
}


 

 ?>
<br><br><br><input type="file"  name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Submit"  name="submit">
</form>


 <?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr= $genderErr = $degreeErr = $bloodgroupErr= "";
$name = $email = $dob = $gender = $degree= $bloodgroup="";


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["name"])) {
 $nameErr = "Cannot be empty";
 } $name = test_input($_POST["name"]);
 if (str_word_count ($name)<2){
 $nameErr = "contains atleast 2 words";
 }

 else{} {
 $name = test_input($_POST["name"]);

 if (!preg_match("/^[a-zA-Z-'. ]*$/",$name) ) {
 $nameErr = "Only letters and white space allowed";
 }
 }

if (empty($_POST["email"])) {
    $emailErr = "Cannot be empty";
  } else {
   $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Must be a valid";
    
  }
 

}


if (empty($_POST["dob"])) {
    $dobErr = "Cannot be empty";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["degree"])) {
    $degreeErr = "Cannot be empty";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Must be selected";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }
  
  
 

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

	

</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		
			
  Name: <input type="text" name="name" value="Fahmida">
   <span class="error">* <?php echo $nameErr;?></span>

 
  <br><br>
  E-mail: <input type="text" name="email" value="fahmidaturin34@gmail.com">
   <span class="error">* <?php echo $emailErr;?></span>
  
  <br><br>
  Date Of Birth: <input type="date" id="dob" name="dob" value=24/07/2001>
  <span class="error">* <?php echo $dobErr;?></span>
  
  <br><br>

  

  <br>Gender:
  <input type="radio" name="gender" value="female" >Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  
  <br><br>
 <!--  <input type="submit" name="submit" value="Submit">   -->
</form>
<?php 



if (isset($_SESSION['uname'])) {

	

	echo "<br><a href='index.php'>Logged as Fahmida</a>";
	echo "<br><a href='logout.php'>Logout</a>";

}

else{
	header("location:Dashboard.php");
}


 

 ?>


<!-- <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo"<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo"<br>";
echo $gender;
echo "<br>"
?> -->




<?php include 'footer.php'; ?>
</fieldset>


 </body>
</html>