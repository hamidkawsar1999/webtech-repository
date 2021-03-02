<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
  <h2>ABC Company</h2>
  <ul><li><a href="Welcome.php">Home</a></li>
    <li><a href="index.php">Login</a>
    <li><a href="Registration.php">Registration</a>
    </li></ul>

<fieldset>
  <legend>Registration</legend>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr =$usernameErr=$passwordErr= $dobErr= $genderErr = $degreeErr = $bloodgroupErr= "";
$name = $email = $username =$password=$dob = $gender = $degree= $bloodgroup="";


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
if (empty($_POST["username"])) {
    $usernameErr = "Cannot be empty";
  } else {
   $username = test_input($_POST["username"]);
  
}
if (empty($_POST["password"])) {
    $passwordErr = "Cannot be empty";
  } else {
   $password = test_input($_POST["password"]);
  
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

<h2></h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">

  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username">

  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="text" name="pass">

  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <fieldset>
  <legend>Date Of Birth</legend>
   <input type="date" id="dob" name="dob">
  <span class="error">* <?php echo $dobErr;?></span>
  </fieldset>
  <br><br>

  
<fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  

  
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>
  


 
 
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $dob;
echo"<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
echo"<br>";
echo $gender;
echo "<br>"


?>
</fieldset>
</body>
</html>