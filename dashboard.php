<?php
// Start session
include "myscript.php"; // Include the script to fetch products
// session_start();

// Check if user is logged in
if (!isset($_SESSION['name'])) {
    // Not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// Handle logout
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="SSstyle.css"> <!-- Link to the stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        /* Additional dashboard-specific styles */
        .welcome-bar {
            background-color: #34516c;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .welcome-message {
            font-size: 18px;
        }

        .logout-btn {
            background-color: #be1622;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-btn:hover {
            background-color: #a01219;
        }

        .product-categories {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            gap: 15px;
        }

        .product-categories a {
            text-decoration: none;
            color: #be1622;
            font-weight: bold;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .product-categories a:hover {
            background-color: #f2be1a;
            color: #000;
        }

        h1.dashboard-title {
            text-align: center;
            font-size: 36px;
            color: #0789bd;
            margin: 20px 0;
        }
        .container .tshirt, .container .jumper, .container .hoodie {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light px-4" style="background-color: #a01219;">
        <!-- Logo and Title -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="logo.svg" alt="uclan logo" height="120" width="120">
        </a>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SSproducts.php">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SScart.php">CART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">DASHBOARD</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="welcome-bar">
        <div class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</div>
        <a href="dashboard.php?logout=1" class="logout-btn">Logout</a>
    </div>

    <h1 class="dashboard-title">Your Dashboard</h1>

    <div class="product-categories">
        <a href="#tshirts">T-Shirts</a>
        <a href="#jumpers">Jumpers</a>
        <a href="#hoodies">Hoodies</a>
    </div>

    <h1 id="tshirts" style="text-align: center; font: 70; color: #0789bd;" class="my-3">Featured Products</h1>

    <div class="container">
        <!-- T-shirts section -->
        <?php foreach ($tshirts as $tshirt) {
            echo "
        <div class='tshirt'>
            <h2 class='text'>{$tshirt['name']}</h2>
            <p>{$tshirt['description']} <button class='unstyled-button'>view more</button></p>
            <p class='cost'>£{$tshirt['price']}</p>
            <button class='btn btn-warning'>ADD TO CART</button>
        </div>
            ";
        }
            ?>
    </div>

    <h1 id="jumpers" style="text-align: center; font: 70; color: #0789bd;" class="my-3">Jumpers</h1>

    <div class="container">
        <!-- Jumpers section -->
        <?php foreach ($jumpers as $jumper) {
            echo "
        <div class='jumper'>
            <h2 class='text'>{$jumper['name']}</h2>
            <p>{$jumper['description']} <button class='unstyled-button'>view more</button></p>
            <p class='cost'>£{$jumper['price']}</p>
            <button class='btn btn-warning'>ADD TO CART</button>
        </div>
    ";

        }
            ?>
    </div>

    <h1 id="hoodies" style="text-align: center; font: 70; color: #0789bd;" class="my-3">Hoodies</h1>

    <div class="container">
        <!-- Hoodies section -->
        <?php foreach ($hoodies as $hoodie) {
            echo "
        <div class='hoodie'>
            <h2 class='text'>{$hoodie['name']}</h2>
            <p>{$hoodie['description']} <button class='unstyled-button'>view more</button></p>
            <p class='cost'>£{$hoodie['price']}</p>
            <button class='btn btn-warning'>ADD TO CART</button>
        </div>
    ";

        }
            ?>
    </div>

    <?php
    include('navbar/footer.php'); // Include the footer from an external file
    ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>