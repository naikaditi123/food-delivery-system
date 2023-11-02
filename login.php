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
         //read from database
        $query = "select * from login where email = '$email' limit 1";

        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $psw)
            {
                $_SESSION['email'] = $user_data['email'];
                header("location: home1.php");
                die;
            }
        }
        }
        $error_message = "Wrong username or password!";
    }else
    {
        $error_message = "Wrong username or password!";
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
      function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</head>
<body style="background-color:rgba(129, 189, 135, 0.67);">
    <div class="ln">
        <br>
        <div class="nav">
            <h2>LOGIN HERE</h2>
        </div>
        <?php
          if(isset($error_message))
          {
            echo '<div style="color: red;">' . $error_message . '</div>';
          }
        ?>
        <form action="" method="post">
           <div class="content">
            <br>
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" style="margin-left:20px;" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="myInput" style="margin-left:20px;" required>
            <br>
            <input type="checkbox" onclick="myFunction() " style="margin-left:39px;">Show Password
            <a href="#"  style="margin-left: 70px;">Forget password?</a>
            <br>
            <br>
            <button type="submit" style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(129, 189, 135, 1);">LOGIN</button>
            <p>Don't have a account?<a href="signup.php">SIGNUP</a></p>
            <button style="margin-bottom: 30px; width:50%; height:50px; border-radius: 30px; background-color: rgba(129, 189, 135, 1);"><a href="home.php" style="text-decoration: none; color:black;">Cancel</a></button>

           </div>

    </div>
</form>
  
</body>
</html>