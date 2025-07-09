<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>PRODUCTS</title>
  <link rel="stylesheet" href="SSstyle.css"> <!-- link to the stylesheet -->
</head>
<style>
  #products a {
    text-decoration: none;
    color:rgb(88, 16, 4);
    font-size: 20px;
  }
  #products a:hover {
    color: #0789bd;
  }
  .container .hoodie, .container .jumper, .container .tshirt {
    border-radius: 20px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
  }
</style>

<body>
  <?php
  include('navbar/navbar.php'); // Include the navigation bar from an external file
  ?>

  <h1 style="text-align: center; font: 70; color: #0789bd;">Products</h1> <!-- Main heading for the products page, styled with inline css fo entering, font size and color -->

  <div class="d-flex flex-row justify-content-center gap-5 my-3" id="products">
    <a href="T-shirts.php">T-Shirts</a>
    <a href="Jumpers.php">Jumpers</a>
    <a href="Hoodies.php">Hoodies</a>
  </div>



  <div class="container"> <!-- container for products display -->
    <div class="tshirt"> <!-- individual product dsiplay -->
      <img src="tshirts/tshirt(1).jpg" alt="T-Shirt 1"> <!-- product image with alternative text for accessibility -->
      <h2 class="text">UCLan Logo Tshirt-Navy Blue New</h2> <!-- product title for display -->
      <p class="description">Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p> <!-- product description giving details about the product -->
      <p class="cost">£19.99</p> <!-- product price displayed -->
      <button class="btn btn-primary">BUY</button> <!-- button to allow users to add the product to their cart or purchase -->
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(2).jpg" alt="T-Shirt 2">
      <h2 class="text">UCLan Logo Tshirt-Rusty Red New</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(3).jpg" alt="T-Shirt 3">
      <h2 class="text">UCLan Logo Tshirt-Burgundy</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(4).jpg" alt="T-Shirt 4">
      <h2 class="text">UCLan Logo Tshirt-Pink</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(5).jpg" alt="T-Shirt 5">
      <h2 class="text">UCLan Logo Tshirt-Teal</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(6).jpg" alt="T-Shirt 6">
      <h2 class="text">UCLan Logo Tshirt-Black</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(7).jpg" alt="T-Shirt 7">
      <h2 class="text">UCLan Logo Tshirt-Old Red</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(8).jpg" alt="T-Shirt 8">
      <h2 class="text">UCLan Logo Tshirt-Grey</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(9).jpg" alt="T-Shirt 9">
      <h2 class="text">UCLan Logo Tshirt-Red</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(10).jpg" alt="T-Shirt 10">
      <h2 class="text">UCLan Logo Tshirt-Brown</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(11).jpg" alt="T-Shirt 11">
      <h2 class="text">UCLan Logo Tshirt-Pdark Purple</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(12).jpg" alt="T-Shirt 12">
      <h2 class="text">UCLan Logo Tshirt-Yellow</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(13).jpg" alt="T-Shirt 13">
      <h2 class="text">UCLan Logo Tshirt-Mustard Yellow</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(14).jpg" alt="T-Shirt 14">
      <h2 class="text">UCLan Logo Tshirt-Dark Grey</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(15).jpg" alt="T-Shirt 15">
      <h2 class="text">UCLan Logo Tshirt-Dark Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(16).jpg" alt="T-Shirt 16">
      <h2 class="text">UCLan Logo Tshirt-Bright Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button class="btn btn-primary">BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(17).jpg" alt="T-Shirt 17">
      <h2 class="text">UCLan Logo Tshirt-Olive Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(18).jpg" alt="T-Shirt 18">
      <h2 class="text">UCLan Logo Tshirt-Dark Grey</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(19).jpg" alt="T-Shirt 19">
      <h2 class="text">UCLan Logo Tshirt-Orange</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(20).jpg" alt="T-Shirt 20">
      <h2 class="text">UCLan Logo Tshirt-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(21).jpg" alt="T-Shirt 21">
      <h2 class="text">UCLan Logo Tshirt-Slate Blue</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(22).jpg" alt="T-Shirt 22">
      <h2 class="text">UCLan Logo Tshirt-Bright Pink</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(23).jpg" alt="T-Shirt 23">
      <h2 class="text">UCLan Logo Tshirt-Brightly Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(24).jpg" alt="T-Shirt 24">
      <h2 class="text">UCLan Logo Tshirt-Lime Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(25).jpg" alt="T-Shirt 25">
      <h2 class="text">UCLan Logo Tshirt-Ocean Blue</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(26).jpg" alt="T-Shirt 26">
      <h2 class="text">UCLan Logo Tshirt-Dark Red</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(27).jpg" alt="T-Shirt 27">
      <h2 class="text">UCLan Logo Tshirt-Another Green</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(28).jpg" alt="T-Shirt 28">
      <h2 class="text">UCLan Logo Tshirt-Slate Grey</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(29).jpg" alt="T-Shirt 29">
      <h2 class="text">UCLan Logo Tshirt-Bright Orange</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(30).jpg" alt="T-Shirt 30">
      <h2 class="text">UCLan Logo Tshirt-Another Purple</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(31).jpg" alt="T-Shirt 31">
      <h2 class="text">UCLan Logo Tshirt-Real Red</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(32).jpg" alt="T-Shirt 32">
      <h2 class="text">UCLan Logo Tshirt-Brilliant Blue</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(33).jpg" alt="T-Shirt 33">
      <h2 class="text">UCLan Logo Tshirt-Creame</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(34).jpg" alt="T-Shirt 34">
      <h2 class="text">UCLan Logo Tshirt-Teal Blue</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
    <div class="tshirt">
      <img src="tshirts/tshirt(35).jpg" alt="T-Shirt 35">
      <h2 class="text">UCLan Logo Tshirt-White</h2>
      <p>Cotton authentic character and practicality are combined in this summery t-shirt for students that goes with everything to create casual looks. Perfect for those summer days <button class="unstyled-button">view more</button></p>
      <p class="cost">£19.99</p>
      <button>BUY</button>
    </div>
  </div>

  <div class="container">
    <div class="jumper">
      <img src="jumpers/jumper(1).jpg" alt="Jumper 1">
      <h2 class="text">UCLan Logo Jumper-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(2).jpg" alt="Jumper 2">
      <h2 class="text">UCLan Logo Jumper-Rusty Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(3).jpg" alt="Jumper 3">
      <h2 class="text">UCLan Logo Jumper-Water Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(4).jpg" alt="Jumper 4">
      <h2 class="text">UCLan Logo Jumper-White</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(5).jpg" alt="Jumper 5">
      <h2 class="text">UCLan Logo Jumper-Pink</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(6).jpg" alt="Jumper 6">
      <h2 class="text">UCLan Logo Jumper-Black</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(7).jpg" alt="Jumper 7">
      <h2 class="text">UCLan Logo Jumper-Old Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(8).jpg" alt="Jumper 8">
      <h2 class="text">UCLan Logo Jumper-Dark Grey</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(9).jpg" alt="Jumper 9">
      <h2 class="text">UCLan Logo Jumper-Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(10).jpg" alt="Jumper 10">
      <h2 class="text">UCLan Logo Jumper-Brown</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(11).jpg" alt="Jumper 11">
      <h2 class="text">UCLan Logo Jumper-Green</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(12).jpg" alt="Jumper 12">
      <h2 class="text">UCLan Logo Jumper-Dark Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(13).jpg" alt="Jumper 13">
      <h2 class="text">UCLan Logo Jumper-Yellow</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(14).jpg" alt="Jumper 14">
      <h2 class="text">UCLan Logo Jumper-Light Grey</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(15).jpg" alt="Jumper 15">
      <h2 class="text">UCLan Logo Jumper-Light Green</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(16).jpg" alt="Jumper 16">
      <h2 class="text">UCLan Logo Jumper-Old Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(17).jpg" alt="Jumper17">
      <h2 class="text">UCLan Logo Jumper-Light Purple</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(18).jpg" alt="Jumper 18">
      <h2 class="text">UCLan Logo Jumper-Slate Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(19).jpg" alt="Jumper 19">
      <h2 class="text">UCLan Logo Jumper-Real Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(20).jpg" alt="Jumper 20">
      <h2 class="text">UCLan Logo Jumper-Old Pink</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(21).jpg" alt="Jumper 21">
      <h2 class="text">UCLan Logo Jumper-Slate Grey</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(22).jpg" alt="Jumper 22">
      <h2 class="text">UCLan Logo Jumper-Bright Green</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(23).jpg" alt="Jumper 23">
      <h2 class="text">UCLan Logo Jumper-Teal</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(24).jpg" alt="Jumper 24">
      <h2 class="text">UCLan Logo Jumper-Sky Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(25).jpg" alt="Jumper 25">
      <h2 class="text">UCLan Logo Jumper-Sunshine Pink</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(26).jpg" alt="Jumper 26">
      <h2 class="text">UCLan Logo Jumper-Bronze</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(27).jpg" alt="Jumper 27">
      <h2 class="text">UCLan Logo Jumper-Olive Green</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(28).jpg" alt="Jumper 28">
      <h2 class="text">UCLan Logo Jumper-Bright White Green</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(29).jpg" alt="Jumper 29">
      <h2 class="text">UCLan Logo Jumper-Navy Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(30).jpg" alt="Jumper 30">
      <h2 class="text">UCLan Logo Jumper-Rusty Orange</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(31).jpg" alt="Jumper 31">
      <h2 class="text">UCLan Logo Jumper-Bright Orange</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(32).jpg" alt="Jumper 32">
      <h2 class="text">UCLan Logo Jumper-Sky Purple</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(33).jpg" alt="Jumper 33">
      <h2 class="text">UCLan Logo Jumper-Really Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(34).jpg" alt="Jumper 34">
      <h2 class="text">UCLan Logo Jumper-Plum Purple</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(35).jpg" alt="Jumper 35">
      <h2 class="text">UCLan Logo Jumper-Dark Purple</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(36).jpg" alt="Jumper 36">
      <h2 class="text">UCLan Logo Jumper-Vibrant Red</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(37).jpg" alt="Jumper 37">
      <h2 class="text">UCLan Logo Jumper-Ocean Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(38).jpg" alt="Jumper 38">
      <h2 class="text">UCLan Logo Jumper-Creame</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(39).jpg" alt="Jumper 39">
      <h2 class="text">UCLan Logo Jumper-Lighter Blue</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
    <div class="jumper">
      <img src="jumpers/jumper(40).jpg" alt="Jumper 40">
      <h2 class="text">UCLan Logo Jumper-Light Grey</h2>
      <p>Cotton authentic character and practicality are combined in this winter jumper for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£29.99</p>
      <button>BUY</button>
    </div>
  </div>

  <div class="container">
    <div class="hoodie">
      <img src="hoodies/hoodie(1).jpg" alt="Hoodie 1">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(2).jpg" alt="Hoodie 2">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(3).jpg" alt="Hoodie 3">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(4).jpg" alt="Hoodie 4">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(5).jpg" alt="Hoodie 5">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(6).jpg" alt="Hoodie 6">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(7).jpg" alt="Hoodie 7">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(8).jpg" alt="Hoodie 8">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(9).jpg" alt="Hoodie 9">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(10).jpg" alt="Hoodie 10">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(11).jpg" alt="Hoodie 11">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(12).jpg" alt="Hoodie 12">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(13).jpg" alt="Hoodie 13">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(14).jpg" alt="Hoodie 14">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(15).jpg" alt="Hoodie 15">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(16).jpg" alt="Hoodie 16">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(17).jpg" alt="Hoodie 17">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(18).jpg" alt="Hoodie 18">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(19).jpg" alt="Hoodie 19">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(20).jpg" alt="Hoodie 20">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(21).jpg" alt="Hoodie 21">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(22).jpg" alt="Hoodie 22">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(23).jpg" alt="Hoodie 23">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(24).jpg" alt="Hoodie 24">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(25).jpg" alt="Hoodie 25">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(26).jpg" alt="Hoodie 26">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(27).jpg" alt="Hoodie 27">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(28).jpg" alt="Hoodie 28">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(29).jpg" alt="Hoodie 29">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(30).jpg" alt="Hoodie 30">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(31).jpg" alt="Hoodie 31">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(32).jpg" alt="Hoodie 32">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(33).jpg" alt="Hoodie 33">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
    <div class="hoodie">
      <img src="hoodies/hoodie(34).jpg" alt="Hoodie 34">
      <h2 class="text">UCLan Hoodie-Purple</h2>
      <p>Cotton authentic character and practicality are combined in this comfy warm and luxury hoodie for students that goes with everything to create casual looks <button class="unstyled-button">view more</button></p>
      <p class="cost">£39.99</p>
      <button>BUY</button>
    </div>
  </div>

  <?php include "./navbar/footer.php"; ?>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>