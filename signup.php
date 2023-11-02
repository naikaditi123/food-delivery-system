<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something  was posted
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    if(!empty($email) && !empty($psw) && !is_numeric($email))
    {
         //save to database
        $query = "insert into login (email,password) values ('$email','$psw')";

        mysqli_query($con, $query);

        header("location: login.php");
        die;
    }else
    {
        echo "Please enter some valid information! ";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foodie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css"> 
  <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
</head>
<body style="background-color:rgba(129, 189, 135, 0.67);">
    <div class="ln">
        <br>
        <div class="nav">
            <h2>SIGNUP HERE</h2>
        </div>
        <form action="" method="post">
           <div class="content">
            <br>
            <label for="uname"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="email" style="margin-left:20px;" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="txtPassword" style="margin-left:20px;" required>
            <br>
            <label for="repsw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Repeat Password" name="repsw" id="txtConfirmPassword" style="margin-left:20px;" required>
            <br>
            <br>
            <br>
            <button type="submit" onclick="return Validate()" style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(129, 189, 135, 1);">SIGNUP</button>
            <p>Already have a account?<a href="login.php">LOGIN</a></p>
            <button style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(129, 189, 135, 1);"><a href="home.php" style="text-decoration: none; color:black;">Cancel</a></button>

           </div>

    </div>
</form>
  
</body>
</html>