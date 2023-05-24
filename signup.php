<?php

if(isset($_POST['fmail'])){

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";

    $con = mysqli_connect($server,$user,$password,$database);

    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
   //  else{
   //    echo "connected";
   //  }

    $fmail = $_POST['fmail'];
    $fpassword = $_POST['fpassword'];
    $cpassword = $_POST['cpassword'];
   // echo $fmail;
   // echo $fpassword;
   if($cpassword == $fpassword){
      $sql = "INSERT INTO `log` (`fmail`, `fpassword`, `dt`) VALUES ('$fmail', '$fpassword', current_timestamp());";

    if(mysqli_query($con, $sql)){
        header("Location:Homepage.php");
    }
    else{
        echo "ERROR: $sql1 <br> $con->error";
    }
   }
    

   //  $con-> close();
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Signup</title>
      <link rel="stylesheet" href="Color.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <!-- <div class="title login">
               Login Form
            </div> -->
            <div class="title signup">
                <h4>No such account is registered here! </h4>
                <h3 style="color:#281aa0;">Sign-up here</h3>
            </div>
         </div>
         <div class="form-container">
            <!-- <div class="slide-controls"> -->
               <!-- <input type="radio" name="slide" id="login" checked> -->
               <!-- <input type="radio" name="slide" id="signup"> -->
               <!-- <label for="login" class="slide login">Login</label> -->
               <!-- <label for="signup" class="slide signup">Signup</label> -->
               <!-- <div class="slider-tab"></div> -->
            </div>
            <div class="form-inner">
               <!-- <form action="login.php" class="login" method="POST" default>
                  <div class="field">
                     <input type="mail" placeholder="E-mail" name="fmail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="fpassword" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Don't have an Account? <a href="">Signup</a>
                  </div>
               </form> -->
               <form action="login-signup.php" class="signup" method="POST">
                  <div class="field">
                     <input type="email" placeholder="E-mail" name="fmail" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" name="fpassword" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" name="cpassword" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer">
                     <input type="submit" value="Signup">
                  </div></div>
               </form>
            </div>
         </div>
      </div>
      
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>