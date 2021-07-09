<?php
   $showAlert = false;
   $showError = false;
   if($_SERVER["REQUEST_METHOD"] == "POST"){
         
         include 'partials/_dbconnect.php';
         $username = $_POST["username"];
         $password = $_POST["password"];
         $cpassword = $_POST["cpassword"];
        //  $exists=false;
     
         //Check wether this username exists
         $existSql = "SELECT * FROM `users` WHERE username = '$username'";
         
         $result = mysqli_query($conn, $existSql);
         $numExistRows = mysqli_num_rows($result);
         if($numExistRows > 0)
         {
          //  $exists = true;
           $showError = "Username already exists";
         }
         else{
          //  $exists = false;
         


         if(($password == $cpassword)){
           $hash = password_hash($password, PASSWORD_DEFAULT);
           $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
           $result = mysqli_query($conn, $sql);
           if($result)
           {
             $showAlert = true;
           }
         }
         else{
           $showError = "Password do not match";
         }
      }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Glassmorphism Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navi">
    <?php require 'partials/_nav.php' ?>
    <?php
                // error_reporting(E_ALL ^ E_WARNING);
                if($showAlert)
                {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Sucess!</strong> Your account is now created and you can login.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
                if($showError)
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> '.$showError.'
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
      ?>
      </div>
    <section>
    
         <div class="color"></div>
         <div class="color"></div>
         <div class="color"></div>
         
         
         <div class="box">
             <div class="square" style="--i:0;"></div>
             <div class="square" style="--i:1;"></div>
             <div class="square" style="--i:2;"></div>
             <div class="square" style="--i:3;"></div>
             <div class="square" style="--i:4;"></div>
             <div class="container">
                 <div class="form">
                     <h2>Sign Up</h2>
                     <form action= "/glassmorph/signup.php" method="post">
                         <div class="inputBox">
                             <label for="username"></label>
                             <input type="text" maxlength ="15" id="username" name="username" placeholder="Username">
                         </div>
                         <div class="inputBox">
                             <label for="password"></label>
                             <input type="Password" maxlength ="23" id="password" name="password" placeholder="Password">
                         </div>
                         <div class="inputBox">
                             <label for="cpassword"></label>
                             <input type="Password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                         </div>
                         <div class="inputBox">
                            <input type="submit" value="Signup">
                        </div>
                        <p class="forget">Forget Password ? <a href="#">Click Here</a></p>
                        <p class="forget">Don't have an account ? <a href="#">Sign up</a></p>
                     </form>
                 </div>
             </div>
         </div>
         
    </section>
    
</body>
</html>