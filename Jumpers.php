<?php
include "myscript.php"; // Include the script to fetch products 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>JUMPERS</title>
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
  .container .jumper {
    border-radius: 20px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
  }
  .unstyled-button {
    color: rgb(88, 16, 4);
    text-decoration: none;
  }
</style>
<body>
  <?php
  include('navbar/navbar.php'); // Include the navigation bar from an external file 
  ?>

  <h1 style="text-align: center; font: 70; color: #0789bd;">Products</h1>

  <div class="d-flex flex-row justify-content-center gap-5 my-3" id="products">
    <a href="T-shirts.php">T-Shirts</a>
    <a href="Jumpers.php">Jumpers</a>
    <a href="Hoodies.php">Hoodies</a>
  </div>

  <h2 class="mb-3" style="text-align: center; font: 50; color: black;">Jumpers</h2>

  <div class="container">
    <?php 
    foreach ($jumpers as $jumper) { // Loop through each jumper product
        echo "<div class='jumper p-3 mb-3'>";
        echo "<img src='./jumpers/" . $jumper['image'] . "' alt='" . $jumper['name'] . "' class='img-fluid'>"; // Display jumper image
        echo "<h2>" . $jumper['name'] . "</h2>";
        echo "<p>Description: " . $jumper['description'] . "</p>";
        echo "<p>Price: $" . $jumper['price'] . "</p>";
        echo "<button class='btn btn-primary'>Buy</button>"; // Add to cart button
        echo "</div>";
    }
    ?>
  </div>

  <?php
  include('navbar/footer.php'); // Include the footer from an external file
  ?>

</body>

</html>