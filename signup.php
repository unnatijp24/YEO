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
   echo "<br><br><br><h3><b>ENTER CORRECT CONFIRM PASSWORD</b></h3>";
   

   //  $con-> close();
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Signup</title>
      <link rel="stylesheet" href="color.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         /* The message box is shown when the user clicks on the password field */
         #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Sign-up Form
            </div>
            <div class="title signup">
            </div>
         </div>
         <div class="form-container">
       
            </div>
            <div class="form-inner">

               <form action="signup.php" class="signup" method="POST">
                  <div class="field">
                  <input type="email" placeholder="E-mail" pattern="[a-z0-9.]+@[a-z]+\.[a-z]{2,}$" title="Eg: abc1.2@gmail.com" name="fmail" required>
                     <span id="emailValidationMessage"></span>
                  </div>
                  <div class="field">
                     <input type="password" id="fpassword" name="fpassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Confirm password" name="cpassword" required>
                  </div>

                  <div class="field btn">
                     <div class="btn-layer">
                     <input type="submit" value="Signup">
                     </div>
                  </div>
                  <div id="message">
                     <h3>Password must contain the following:</h3>
                     <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                     <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                     <p id="number" class="invalid">A <b>number</b></p>
                     <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
      <script>


var myInput = document.getElementById("fpassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

      </script>
   </body>
</html>