<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<fieldset>
<body>
	<h2>ABC Company</h2>
	<img src="images/image.jpg" align="top" height="200" width="100"/>


<?php 
// define variables and set to empty values
$currentpasswordErr = $newpasswordErr=$retypepasswordErr="";
$currentpassword  =$newpassword= $retypepassword="";

 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Cuurent password"])) 
  {
    $currentpasswordErr = "Current password is required"; }
   else if(!(str_word_count ($username)>=2))
  {
    $currentpasswordErr = "contains atleast 2 words";
  }

 

 
  }
  if (empty($_POST[" New password"])) 
  {
    $newpasswordErr = "New Password is required"; }
   else if(!(str_word_count ($password)>=8))
  {
    $newpasswordErr = "must not be less than eight 8 characters";
  }
    
    if (empty($_POST[" Retype password"])) 
  {
    $retypepasswordErr = "Retype Password is required"; }
   else if(!(str_len ($retypepassword)>=8))
  {
    $retypepasswordErr = "must not be less than eight 8 characters";
  }
    
 

 


 


 
 


  

 

 


 

function test_input($array) 
{
  $array = trim($array);
  $array = stripslashes($array);
  $array = htmlspecialchars($array);
  return $array;
}


?>

 


<h2></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

 

  <fieldset>
 <legend>  CHANGE PASSWORD:</legend> 
 
  Current Password: <input type="text" name="username"> <span class="error">* <?php echo $currentpasswordErr;?></span>
  <br><br>
 New Password: <input type="text" name="password"> <span class="error">* <?php echo $newpasswordErr;?></span><br>


 <br>Retype Password:<input type="text" name="password"> <span class="error">* <?php echo $retypepasswordErr;?></span><br>


  
  
 
  <br><br><BR>
  <input type="submit" name="submit" value="Submit">
  
</form>


  </fieldset>
  <br><br>

 

 

<?php 

session_start();
if (isset($_SESSION['uname'])) {

	echo "<h2></h2>";


	echo "<br><a href='index.php'>Logged as Fahmida</a>";
	echo "<br><a href='logout.php'>Logout</a>";

}

else{
	header("location:Dashboard.php");
}


?>


 


<?php
echo "<h2>Your Input:</h2>";
echo $currentpassword;
echo "<br>";
echo $newpassword;
echo "<br>";

?>

 

 <?php  include 'footer.php';
 ?>

</fieldset>
 </body>
</html>