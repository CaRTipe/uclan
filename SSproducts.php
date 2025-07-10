<?php
include "myscript.php"; // Include the script to fetch products
?>
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
     <?php 
     foreach ($tshirts as $tshirt) { // Loop through each t-shirt product
        echo "<div class='tshirt'>";
        echo "<h2>" . $tshirt['name'] . "</h2>";
        echo "<p>Description: " . $tshirt['description'] . "</p>";
        echo "<p>Price: $" . $tshirt['price'] . "</p>";
        echo "<button class='btn btn-primary'>Buy</button>"; // Add to cart button
        echo "</div>";
     }
      foreach ($jumpers as $jumper) { // Loop through each jumper product
          echo "<div class='jumper'>";
          echo "<h2>" . $jumper['name'] . "</h2>";
          echo "<p>Description: " . $jumper['description'] . "</p>";
          echo "<p>Price: $" . $jumper['price'] . "</p>";
          echo "<button class='btn btn-primary'>Buy</button>"; // Add to cart button
          echo "</div>";
      }
      foreach ($hoodies as $hoodie) { // Loop through each hoodie product
          echo "<div class='hoodie'>";
          echo "<h2>" . $hoodie['name'] . "</h2>";
          echo "<p>Description: " . $hoodie['description'] . "</p>";
          echo "<p>Price: $" . $hoodie['price'] . "</p>";
          echo "<button class='btn btn-primary'>Buy</button>"; // Add to cart button
          echo "</div>";
      }
     ?>
    
  </div>

  <?php include "./navbar/footer.php"; ?>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>