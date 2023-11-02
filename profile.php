<!DOCTYPE html>
<html lang="en">
<head>
	<title>Foodie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styles.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!--NAVBAR-->
    <div class="navbar">
    	<p class="foodie">FOODIE</p>
        <div class="credentials">
        <a class="login" href="cart.php">CART</a>
        <a class="signup" href="logout.php">LOGOUT</a>
        </div>
    </div>
        <hr>
        <p class="c"  style="color:rgba(56, 140, 64, 1);"><input class="check" type="checkbox" checked> CART-------------------------------------<input class="check" type="checkbox" checked> PERSONAL INFO</p>
        <hr>
        <form method="post"  style="color:rgba(56, 140, 64, 1);font-family: cursive;">
          <label for="uname" style="margin-left: 50px;"><b>Name</b></label>
            <br>
            <input type="text" placeholder="Enter Name" name="uname" style="margin-left:50px;" required>
            <br>
            <br>
            <label for="phone" style="margin-left: 50px;"><b>Phone Number</b></label>
            <br>
            <input type="text" placeholder="Enter phoneno." name="phone" style="margin-left:50px;" required>
            <br>
            <br>
            <label for="state" style="margin-left: 50px;"><b>State</b></label>
            <br>
            <input type="text" placeholder="Enter State" name="state" style="margin-left:50px;" required>
            <br>
            <br>
            <label for="city" style="margin-left: 50px;"><b>City</b></label>
            <br>
            <input type="text" placeholder="Enter City" name="city" style="margin-left:50px;" required>
            <br>
            <br>
            <label for="pincode" style="margin-left: 50px;"><b>Pincode</b></label>
            <br>
            <input type="text" placeholder="Enter Pincode" name="pincode" style="margin-left:50px;" required>
            <br>
            <br>
            <label for="address" style="margin-left: 50px;"><b>Address</b></label>
            <br>
            <textarea name="address" style="margin-left: 50px; width: 80%; height:100px;" required></textarea>
            <br>
            <br>
            </form>

            <div class="items">
            <button style=" margin-left:700px; margin-top: 70px; background-color:rgba(124, 241, 52, 0.37); font-family: cursive; width: 200px; height:50px;"><a href="payment.php" style="text-decoration: none; color:black;">Confirm & Proceed</a></button>
          </div>
    <br><br>
</body>
</html>        
