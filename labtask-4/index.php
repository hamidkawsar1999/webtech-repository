
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <title>Title of the document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Welcome to ABC Company</h2>
  <ul><li><a href="Welcome.php">Home</a></li>
    <li><a href="index.php">Login</a>
    <li><a href="Registration.php">Registration</a>
    </li></ul>


 
<?php 
     session_start() ;
    


$username="admin";
$password="admin";

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


 

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <fieldset>
    <legend>Login</legend>
   <table align="center">
    
    <!-- <tr> -->
     <!--  <th colspan="2"><h2>Welcome to ABC Company</h2></th> -->
   <!--  </tr> -->
    <?php if(isset($msg)){?>
        <tr>
          <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
      <?php } 
      ?>
    <tr>
      <td>username</td>
      <td><input type="text" name="uname"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <tr>
      <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
    </tr>
  </table>
  </fieldset>
  
</form>
<?php include 'footer.php'; ?>



</body>
</html>