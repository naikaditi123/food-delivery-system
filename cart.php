<?php
session_start();

include('connection.php');

if (isset($_POST['add'])) {
   if (isset($_SESSION['cartitems'])) {
       $session_array_id = array_column($_SESSION['cartitems'], "id");

       if (!in_array($_GET['id'],$session_array_id )) {
            $session_array = array(
      'id' => $_GET['id'],
      'name' => $_POST['name'],
      'rs' => $_POST['rs'],
      'quantity' => $_POST['quantity']
    );

    $_SESSION['cartitems'][] = $session_array;
       }
   }else{

    $session_array = array(
      'id' => $_GET['id'],
      'name' => $_POST['name'],
      'rs' => $_POST['rs'],
      'quantity' => $_POST['quantity']
    );

    $_SESSION['cartitems'][] = $session_array;
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
        <p class="c" style="color:rgba(56, 140, 64, 1);"><input class="check" type="checkbox" checked> CART</p>
        <hr>
    <div class="bill">
        <p style="margin-left: 350px; font-family:cursive;margin-top: 20px;">PRICE DETAILS</p>
        <hr style="background-color: black;">
    <?php

    $total = 0;
    $output = "";

    $output .= "
    <table class='table table-bordered table-striped'>
    <tr>
    <th>ID</th>
    <th>ITEM</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    <th>TOTAL PRICE</th>
    <th>ACTION</th>
    </tr>";

    if(!empty($_SESSION['cartitems'])){
        foreach ($_SESSION['cartitems'] as $key => $value) {
            $output .="
            <tr>
            <td>".$value['id']."</td>
            <td>".$value['name']."</td>
            <td>".$value['quantity']."</td>
            <td>".$value['rs']."</td>
            <td>".number_format($value['rs'] * $value['quantity'])."</td>
            <td>
            <a href='cart.php?action=remove&id=".$value['id']."'>
            <button style='background-color:rgba(124, 241, 52, 0.37);'>Remove</button>
            </a>
            </td>
            </tr>
            ";

            $total = $total + $value['quantity'] * $value['rs'];

            $totalAmount = 0;
foreach ($_SESSION['cartitems'] as $key => $value) {
    $totalAmount += $value['quantity'] * $value['rs'];
}

// Store the total amount in a session variable
$_SESSION['total'] = $totalAmount;

        }

        $output .="
        <tr>
        <td colspan='3'></td>
        <td><b>TOTAL PRICE</b></td>
        <td>".number_format($total,2)."</td>
        <td>
        <a href='cart.php?action=clearall'>
        <button style='background-color:rgba(124, 241, 52, 0.37);'>Clear</button>
        </td>
        </tr>";
    }
    echo $output;
    ?>
       
    <?php

     if (isset($_GET['action'])) {
        if ($_GET['action'] == "clearall") {
            unset($_SESSION['cartitems']);
        }


        if ($_GET['action'] == "remove") {
            
            foreach ($_SESSION['cartitems'] as $key => $value) {
                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cartitems'][$key]);
                }
            }
        }
    }
    ?>
    </div>
 <div><a href="profile.php"><button class="btn" style="margin-left:350px;background-color:rgba(124, 241, 52, 0.37);">Proceed</button></a></div>
</body>
</html>