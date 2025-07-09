<?php
include("myscript.php"); // Include the script for handling login logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="SSstyle.css"> <!-- Link to the stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        /* Additional login-specific styles */
        .login-container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-header h2 {
            color: #007fb0;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #34516c;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .login-btn {
            background-color: #be1622;
            color: white;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .login-btn:hover {
            background-color: #a01219;
        }
        
        .register-link {
            text-align: center;
            margin-top: 15px;
        }
        
        .register-link a {
            color: #007fb0;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
            color: #006250;
        }
        
        .error-message {
            color: #be1622;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>    
<body>
    <?php
    include('navbar/navbar.php'); // Include the navigation bar from an external file
    ?>

    <div class="main mt-5"> <!-- Main content section -->
        <h2>Student Login</h2> <!-- Subheading message -->
    </div>

    <?php
    // Start session to access session variables

    
    // Initialize variables
    $email = $password = "";
    $error = "";
    
    // Display any error messages passed from myscript.php
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        // Clear the error after displaying it
        unset($_SESSION['error']);
    }
    ?>

    <div class="login-container">
        <div class="login-header">
            <h2>Sign In</h2>
        </div>
        
        <?php if (!empty($error)): ?>
            <div class="error-message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form action="myscript.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            
            <button type="submit" name="login" class="login-btn">Login</button>
        </form>
        
        <div class="register-link">
            <!-- <p>Don't have an account? <a href="register.php">Register here</a></p> -->
        </div>
    </div>

    <?php
    include('navbar/footer.php'); // Include the footer from an external file
    ?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>
</html>