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
    <p class="cat">LUNCH</p>
    <hr>
    <div class="top">
    <details>
  <summary style="font-size: 25px;">VEG</summary>
  <br>
    <?php
  include('connection.php');

  $query = "select * from lveg";
  $query_run = mysqli_query($con, $query);
  $result = mysqli_num_rows($query_run) > 0;

  if($result)
  {
      while($row = mysqli_fetch_assoc($query_run))
      {
         ?>
         <div class="card">
         <form method="post" action="cart.php?action=add&id=<?php echo $row["id"] ?>">
        <div class="flip-card-front">
        <?php echo'<img src="data:img;base64,'.base64_encode($row['img']).'" style="width:335px;height:335px;">'; 
        ?>
        <p class="add" style="font-size:30px;"><?php echo $row['name']; ?></p>
        <p class="add" style="font-size:20px;"><?php echo $row['rs']; ?></p>
        <input type="hidden" name="name" value="<?= $row['name'];?>">
        <input type="hidden" name="rs" value="<?= $row['rs'];?>">
        <input style="margin-left:30px;color: rgba(56, 140, 64, 1);border-color: rgba(56, 140, 64, 1);" type="number" name="quantity" value="1">
        <hr>
        <input class="add" type="submit" name="add" value="Add to Cart" style="background-color:white;margin-left: 120px;margin-bottom: 20px;border: white;">
        </div>
        </form>
        </div>
        <?php 
      }
  }
  else
  {
      echo "No";
  }
  ?>  
   </details>
   <details>
  <summary style="font-size: 25px;">NON-VEG</summary>
  <br>
    <?php
  include('connection.php');

  $query = "select * from lnonveg";
  $query_run = mysqli_query($con, $query);
  $result = mysqli_num_rows($query_run) > 0;

  if($result)
  {
      while($row = mysqli_fetch_assoc($query_run))
      {
         ?>
        <div class="card">
         <form method="post" action="cart.php?action=add&id=<?php echo $row["id"] ?>">
        <div class="flip-card-front">
        <?php echo'<img src="data:img;base64,'.base64_encode($row['img']).'" style="width:335px;height:335px;">'; 
        ?>
        <p class="add" style="font-size:30px;"><?php echo $row['name']; ?></p>
        <p class="add" style="font-size:20px;"><?php echo $row['rs']; ?></p>
        <input type="hidden" name="name" value="<?= $row['name'];?>">
        <input type="hidden" name="rs" value="<?= $row['rs'];?>">
        <input style="margin-left:30px;color: rgba(56, 140, 64, 1);border-color: rgba(56, 140, 64, 1);" type="number" name="quantity" value="1">
        <hr>
        <input class="add" type="submit" name="add" value="Add to Cart" style="background-color:white;margin-left: 120px;margin-bottom: 20px;border: white;">
        </div>
        </form>
        </div>
        <?php 
      }
  }
  else
  {
      echo "No";
  }
  ?>   
   </details>
   <br>
   <br>   
    </div>
</body>
</html>

