<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<h2>ABC Company</h2>
	<img src="images/image.jpg" align="top" height="200" width="100"/>

<body>


<?php
session_start(); 
if (isset($_POST['uname'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
    $_SESSION['uname'] = $username;
    header("location:Dashboard.php");
  }
  else{
    $msg="username or password invalid";
    echo "<script>alert('uname or pass incorrect!')</script>";
  }

} 

?> 

 
    
     <fieldset>
 <h3 align="">Account</h3><br />
	<ul><li><a href="dboard.php">Dashboard</a></li>
		<li><a href="view_profile.php">View Profile</a></li>
		<li><a href="edit_profile.php">Edit Profile</a></li>
		<li><a href="change_profile_picture.php">Change Profile Profile</a></li>
		<li><a href="change_password.php">Change Password</a></li>
		<li><a href="logout.php">Logout</a></li>
		</li></ul>
		<?php include 'footer.php'; ?>
		</fieldset>


 
 
  




</body>
</html>