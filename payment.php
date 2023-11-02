<?php
session_start();

// Check if the total amount is set in the session
if (isset($_SESSION['total'])) {
    $totalAmount = $_SESSION['total'];
} else {
    // Handle the case when the total amount is not set
    $totalAmount = 0; // Set a default value if needed
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
        <p class="c"  style="color:rgba(56, 140, 64, 1);"><input class="check" type="checkbox" checked> CART -------------------------------------<input class="check" type="checkbox" checked> PERSONAL INFO ------------------------------------<input class="check" type="checkbox" checked> PAYMENT</p>
        <hr>
        <p style="margin-left: 650px; font-family: cursive; font-size: 30px;color:rgba(56, 140, 64, 1);">Total Amount: <?php echo number_format($totalAmount, 2); ?></p>
        <p style="margin-left: 600px; font-family: cursive; font-size: 30px;color:rgba(56, 140, 64, 1);">SELECT A PAYMENT MODE</p>
        <div class="top1">
          <a style="color:black; text-decoration:none; "href="#bottom"><input  type="radio" style=" margin-left: 30px;" id="cod" name="pm"></a>
          <label for="cod"> CASH ON DELIVERY</label>
          <br>
      </div>
      <div class="top1">
          <a style="color:black; text-decoration:none; "href="#bottom"><input  type="radio" style=" margin-left: 30px;" id="upi" name="pm"></a>
           <label for="upi"> UPI</label>
          <br>
           <img src="images/qr-code.png" style="margin-left:15px;">
           <p style="margin-left: 20px;"> UPI ID:354678907654</p>
           <button style="margin-left: 25px; margin-top: 40px; background-color:rgba(124, 241, 52, 0.37); font-family: cursive; width: 200px; height:50px;"><a style="color:black; text-decoration:none; "href="#bottom">DONE</a></button>
          <br>
        </div>
            <button style="margin-left: 800px; margin-top: 70px; background-color:rgba(124, 241, 52, 0.37); font-family: cursive; width: 200px; height:50px;"><a href="placed.php" name="bottom" id="bottom" style="text-decoration: none; color:black;">Place Order</a></button>
        </div>
    <br><br>
    </body>
    </html>