<!-- myscript.php -->
 <?php

 session_start();
 //connect to database Baiju_Abhiram
// database credentials
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "baiju_abhiram";

 $conn = mysqli_connect($servername, $username, $password, $database);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }


//  having a table users with id,name email and password , attempt to login and after successful login redirect to dashboard.php
// collect tshirts
$sql = "SELECT * FROM tshirts";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $tshirts = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $tshirts = [];
}
$sql = "SELECT * FROM jumpers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $jumpers = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $jumpers = [];
}
$sql = "SELECT * FROM hoodies";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $hoodies = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $hoodies = [];
}
// if(isset($_POST['submit']))
// {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     // hash password with bycrypt
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
//     if (mysqli_query($conn, $sql)) {
//         header("Location: dashboard.php");
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
// }

// login attempt
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if(empty($email)) {
        $_SESSION['error'] = "Email is required";
        header("Location: login.php");
        exit;
    }
    
    if(empty($password)) {
        $_SESSION['error'] = "Password is required";
        header("Location: login.php");
        exit;
    }
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['name'] = $row['name'];
            header("Location: dashboard.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid password";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Invalid email";
        header("Location: login.php");
        exit;
    }
}
// Function to handle adding items to cart



