<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter Username</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }  
      else if(empty($_POST["confirm Password"]))  
      {  
           $error = "<label class='text-danger'>Enter CPassword</label>";  
      }  
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Enter Dob</label>";  
      }  
      
      

      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],
                      'password'     =>     $_POST["password"],
                       'confirm password'     =>     $_POST["confirm password"],
                       'gender'     =>     $_POST["gender"],
                       'dob'     =>     $_POST["dob"],
                       

                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align ="">JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                     <fieldset>
                      <legend>  Registration:</legend> 
 
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Email</label>  
                     <input type="text" name="email" class="form-control" /><br />  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" /><br />  
                     <label>Pasword</label>  
                     <input type="text" name="pasword" class="form-control" /><br /> 
                       <label>Confirm Pasword</label>  
                     <input type="text" name="confirm password" class="form-control" /><br />  
                      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                     <fieldset>
                      <legend>  Gender:</legend> 
                         <input type="radio" name="gender" value="female">Male
                         <input type="radio" name="gender" value="male">Female
                         <input type="radio" name="gender" value="other">Other
                      
                      
                    <br><br>  
                      
                       <fieldset>
                      <legend>DATE OF BIRTH:</legend>
                   <input type="date" name="testDate">
   
                     </fieldset>
                        <br><br> 
                    
                     <input type="submit" name="submit" value="Submit" class="btn btn-info">
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />
                     </form> 
                   </fieldset>

                                       
                     <?php 

                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  