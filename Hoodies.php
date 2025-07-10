<?php
include "myscript.php"; // Include the script to fetch products
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HOODIES</title>
    <link rel="stylesheet" href="SSstyle.css"> <!-- link to the stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
  .container .hoodie {
    border-radius: 20px;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
  }
</style>    
<body>
  <?php
  include ('navbar/navbar.php'); // Include the navigation bar from an external file 
  ?>
    <h1 style="text-align: center; font: 70; color:#0789bd;">Products</h1>

    <div class="d-flex flex-row justify-content-center gap-5 my-3" id="products">
      <a href="T-shirts.php">T-Shirts</a>
      <a href="Jumpers.php">Jumpers</a>
      <a href="Hoodies.php">Hoodies</a>
  </div>
    
    <h2 class="mb-3" style="text-align: center; font: 50; color: black;">Hoodies</h2>
    <div class="container">
      <?php 
      foreach ($hoodies as $hoodie) { // Loop through each hoodie product
          echo "<div class='hoodie p-3 mb-3'>";
          echo "<h2>" . $hoodie['name'] . "</h2>";
          echo "<p>Description: " . $hoodie['description'] . "</p>";
          echo "<p>Price: $" . $hoodie['price'] . "</p>";
          echo "<button class='btn btn-primary'>Buy</button>"; // Add to cart button
          echo "</div>";
      }
      ?>
    </div>

      <?php
      include('./navbar/footer.php'); // Include the footer from an external file 
      ?>


</body>
</html>