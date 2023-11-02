<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
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
   <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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
    <div class="img">
    	<img src="images/1.jpg" style="width:100%; height:500px;">
    </div>
    <br>

    <!--CATEGORIES-->
    <hr>
    <p class="cat">CATEGORIES</p>
    <hr>
    <div class="card">
        <div class="flip-card-front">
        <img src="images/5.jpg" style="width:335px;height:335px;">
        <p class="add"><a href="breakfast.php">Breakfast</a></p>
        </div>
    </div> 	
    <div class="card">
        <div class="flip-card-front">
        <img src="images/3.jpg" style="width:335px;height:335px;">
        <p class="add"><a href="lunch.php">Lunch</a></p>
        </div>
    </div> 
    <div class="card">
        <div class="flip-card-front">
        <img src="images/4.jpg" style="width:335px;height:335px;">
        <p class="add"><a href="Snacks.php">Snacks</a></p>
        </div>
    </div> 
    <div class="card">
        <div class="flip-card-front">
        <img src="images/2.jpg" style="width:335px;height:335px;">
        <p class="add"><a href="Dinner.php">Dinner</a></p>
        </div>
    </div> 
    <br>
    <br>

   <!--CHEFS-->
    <hr>
    <p class="cat">OUR CHEFS</p>
    <hr>
    <div class="cardchef">
        <div class="card">
            <img src="images/6.png" style="width:385px;height:380px;">
            <div class="add">
                <h3>Chef Marcello</h3>
                <hr>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">More info</button>
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                    <h2>Chef Marcello "The Flavor Maestro" Rossi</h2>
                        <img src="images/6.png" style="width:200px;height:200px;">
                        <p>With a twinkle in his eye and a passion for culinary artistry, Chef Marcello Rossi brings his larger-than-life personality to the kitchen. Hailing from an imaginary Mediterranean island, his cooking style blends traditional family recipes with a modern twist. Known for his flamboyant presentations and experimental flavor combinations, Chef Marcello has a devoted following of food enthusiasts who eagerly anticipate his next gastronomic masterpiece. When he's not in the kitchen, you can find him wandering through farmers' markets, seeking inspiration from the freshest ingredients the land has to offer.</p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="images/7.jpg" style="width:385px;height:380px;">
            <div class="add">
                <h3>Chef Isabella</h3>
                <hr>
                <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">More info</button>
                <div id="id03" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                    <h2>Chef Isabella "The Dessert Diva" Martinez</h2>
                        <img src="images/7.jpg" style="width:200px;height:200px;">
                        <p>Step into a world of sweetness and enchantment with Chef Isabella Martinez, the reigning queen of confectionery. Born in a dreamy fairytale land, Isabella's passion for desserts started at a young age, making cupcakes for her imaginary friends. Her whimsical creations, adorned with edible flowers and sparkling sugar dust, transport diners to a magical wonderland. From her signature rainbow macarons to spellbinding chocolate sculptures, Chef Isabella's desserts are as visually stunning as they are delectable. When she's not creating sugary delights, she spends her time rescuing lost recipe books from ancient castles.</p>
                    </div>
                    </form>
                </div>    
            </div>
        </div>
        <div class="card">
             <img src="images/8.jpg" style="width:385px;height:380px;">
             <div class="add">
                 <h3>Chef Wolfgang</h3>
                 <hr>
                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">More info</button>
                <div id="id02" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                    <h2>Chef Wolfgang "The Spice Alchemist" Stein</h2>
                        <img src="images/8.jpg" style="width:200px;height:200px;">
                        <p>Hailing from a mystical mountain village, Chef Wolfgang Stein is a culinary genius with a flair for spices and herbal concoctions. His culinary journey began under the guidance of legendary spice wizards who taught him the ancient art of flavor manipulation. With a cauldron bubbling with mysterious mixtures, Chef Wolfgang crafts dishes that awaken the senses and take diners on a gastronomic adventure. His menu features dishes with names like "Elixir of Enchantment" and "Sorcerer's Surprise," each containing a secret blend of herbs and spices rumored to have magical properties. Beyond the kitchen, Wolfgang spends his time foraging for rare herbs in hidden forests and scaling treacherous peaks in search of exotic flavors.</p>
                    </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
    <br>
    <br>

    <!--FOOTER-->
    <div class="footer">
        <div class="one"> 
            <ul style="list-style-type: none;">
                <p class="about">ABOUT US</p>
                <li style="color: rgba(56, 140, 64, 1);"><a onclick="document.getElementById('id04').style.display='block'" style="width:auto;  border:none; font-family: cursive; color: rgba(56, 140, 64, 1);">WHO WE ARE</a></li>
                <div id="id04" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                    <h1 style="font-family:cursive; color:rgba(56, 140, 64, 1); margin-left: 300px;">FOODIE</h1>
                        <img src="images/1.jpg" style="width:300px;height:200px; margin-left: 250px;">
                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Introducing "Foodie Express" - Your ultimate destination for a delightful food delivery experience! We are your go-to restaurant, proudly offering a diverse and mouthwatering menu that will satisfy all your cravings.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">At Foodie Express, we believe that great food is a celebration of flavors, prepared with love and attention to detail. Our talented chefs curate each dish to perfection, ensuring that every bite leaves you craving for more. From hearty comfort food to exotic delicacies, our menu caters to a wide range of tastes and preferences.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Ordering from Foodie Express is simple and seamless. Just visit our user-friendly website or mobile app, browse through our delectable menu, and select your favorite dishes. With our quick and efficient delivery service, your food will reach you fresh and hot, no matter where you are.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">We take immense pride in sourcing the finest and freshest ingredients to create dishes that leave a lasting impression. Whether you're enjoying a solo meal, hosting a family dinner, or arranging a corporate lunch, Foodie Express has got you covered.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Experience the joy of savoring extraordinary flavors with Foodie Express - your trusted partner for an unforgettable food delivery experience. Place your order now and embark on a culinary journey that promises to delight your taste buds. Bon appétit!</p>
                    </div>
                    </form>
                </div>
                <li style="color: rgba(56, 140, 64, 1);"><a onclick="document.getElementById('id05').style.display='block'" style="width:auto;  border:none; font-family: cursive; color: rgba(56, 140, 64, 1);">PRIVACY</a></li>
                <div id="id05" class="modal">
                    <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                    <h1 style="font-family:cursive; color:rgba(56, 140, 64, 1); margin-left: 250px;">PRIVACY POLICY</h1>
                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">IAt Foodie Express, we are committed to safeguarding your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and protect your data when you use our website or mobile app.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Information Collection:
                        We may collect certain personally identifiable information from you, including but not limited to your name, email address, phone number, and delivery address. This information is necessary to process your orders and provide you with a seamless food delivery experience.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Usage of Information:
                        We use the collected data to process your orders, deliver your food, and communicate with you about your order status or any relevant updates. Additionally, we may use your information to improve our services, personalize your experience, and send you promotional offers or newsletters if you have opted to receive them.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Payment Information:
                        Foodie Express does not store or process any payment-related data directly. We use secure third-party payment gateways to handle all transactions, ensuring that your financial information remains safe and protected.</p>

                        <p style="font-family:cursive; color:rgba(56, 140, 64, 1);">Information Sharing:
                         We do not sell, trade, or share your personal information with third parties for marketing purposes. However, we may share your information with trusted partners and service providers who assist us in delivering our services, such as delivery personnel or restaurants fulfilling your orders.</p>
                    </div>
                    </form>
                </div>
            
            </ul>
        </div>
        <div class="one"> 
            <ul style="list-style-type: none;">
                <p class="about">SOCIAL LINK</p>
                <li style="color: rgba(56, 140, 64, 1);"><img src="images/9.jpg" style="width:20px; height:20px;"> __Foodie__</li>
                <li style="color: rgba(56, 140, 64, 1);"><img src="images/10.png" style="width:20px; height:20px;"> Foodiedelivery</li>
            </ul>
        </div>
        <div class="one"> 
            <ul style="list-style-type: none;">
                <p class="about">CONTACT</p>
                <li style="color: rgba(56, 140, 64, 1);"><img src="images/11.jpg" style="width:20px; height:20px;"> 083263676288</li>
                <li style="color: rgba(56, 140, 64, 1);"><img src="images/12.jpg" style="width:20px; height:20px;"> foodie123@gmail.com</li>
                
            </ul>
        </div>       
    </div>
</body>
</html>