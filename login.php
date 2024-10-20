<?php
// Include the database connection details
$host = 'localhost';  // The host where the database is located
$user = 'root';       // Your database username
$pass = '';           // Your database password
$dbname = 'giftheaven_db';  // The database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check if the connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start a session
session_start();

$error_message = '';

// Handle User Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists
    $sql = "SELECT * FROM userlist WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        $_SESSION['user_email'] = $email;
        header("Location: index.php"); // Redirect to index.php
        exit();
    } else {
        $error_message = 'Invalid email or password.';
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GiftHeaven</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link to CSS File -->
    <link rel="stylesheet" type="text/css" href="css/form_style.css">
    <style>
        /* Additional styling for message container */
        .message-container {
            color: red;
            margin-top: 10px;
        }

        .header {
            background-color: #fff; /* You can customize the background if needed */
            padding: 20px;          /* Adjust padding for header content */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
            margin-bottom: 30px;    /* Space between header and content */
        }

        .login-container {
            margin-top: 30px; /* Adds space above the login container */
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <a href="#" class="logo">
            <i class="fa fa-gift" aria-hidden="true"></i> GiftHeaven
        </a>
        <nav class="nav-bar">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="aboutus.php">About Us</a>
            <a href="faq.php">FAQ</a>
            <a href="contact-us.php">Contact Us</a>
        </nav>
        
        <div class="icons">
            <div class="fa fa-bars" id="menu-btn"></div> <!-- Menu Bar Icon -->
            <div class="fa fa-search" id="search-btn"></div>
            
            <a href="cart.php">
                <div class="fa fa-shopping-cart" id="cart-btn"></div> <!-- Cart Icon with link -->
            </a>
            
            </a>
            <a href="login.php">
            <div class="fa fa-user" id="user-btn"></div></a>
          </div>
        </div>

        <!-- Search Form -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search here....">
            <label for="search-box" class="fa fa-search"></label>
        </form>
    </header>
    <!-- Header Section End -->

    <!-- Login Form -->
    <div class="login-container">
        <form action="" method="post" class="login-form"> <!-- action is set to the same page -->
            <h3>Login to Your Account</h3>
            
            <div class="input-group">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" placeholder="Email Address" class="box" required>
            </div>

            <div class="input-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password" class="box" required>
            </div>

            <input type="submit" name="login" value="Login Now" class="btn"> <!-- Corrected button value -->
            
            <p>Forgot your password? <a href="#">Click Here</a></p>
            <p>Don't have an account? <a href="signup.php">Sign Up Now</a></p>
        </form>

        <!-- Message Section -->
        <div class="message-container">
            <?= $error_message ? $error_message : ''; ?> <!-- Display error message if any -->
        </div>
       
    </div>
    <!-- Login Form End -->

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section about">
                <h3>About <span>GiftHeaven</span></h3>
                <p>"Where your gifting dreams come true. Discover the perfect gifts for every occasion with our curated collection designed to make your loved ones smile."</p>
            </div>

            <div class="footer-section quick-links">
                <h3>Quick <span>Links</span></h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Gift Builder</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-section contact-info">
                <h3>Contact <span>Us</span></h3>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +94 123 456 789</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> info@giftheaven.com</p>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 Gift Lane, Malabe, Sri Lanka</p>
            </div>

            <div class="footer-section newsletter">
                <h3>Join Our <span>Newsletter</span></h3>
                <p>Get the latest updates, exclusive offers, and more delivered to your inbox.</p>
                <form>
                    <input type="email" placeholder="Enter your email" required>
                    <button class="btn">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 GiftHeaven. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- JavaScript at the end of the body -->
    <script src="scripts/script.js"></script>
</body>
</html>
