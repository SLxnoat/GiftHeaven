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

$registration_message = '';
$error_message = '';

// Handle User Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    // Check if the email already exists
    $check_email_sql = "SELECT * FROM userlist WHERE email='$email'";
    $check_result = $conn->query($check_email_sql);

    if ($check_result->num_rows > 0) {
        $error_message = 'An account with this email already exists.';
    } else {
        // Insert the new user into the database
        $sql = "INSERT INTO userlist (fullname, email, phone, password, address) 
                VALUES ('$fullname', '$email', '$phone', '$password', '$address')";

        if ($conn->query($sql) === TRUE) {
            // Show registration success message and redirect
            $registration_message = 'Registration successful! You can now log in.';
            echo '<script type="text/javascript">
                    alert("' . $registration_message . '");
                    window.location.href = "login.php"; // Redirect to login page
                  </script>';
            exit(); // Ensure no further code is executed
        } else {
            $error_message = "Error: " . $conn->error; // Capture the error message
        }
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
    <title>GiftHeaven - Sign Up</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link to CSS File -->
    <link rel="stylesheet" type="text/css" href="css/form_style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f7;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .nav-bar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .nav-bar a:hover {
            text-decoration: underline;
        }

        .auth-section {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 50px auto; /* Keeps the existing vertical margin */
            text-align: center;
            margin-top: 80px; /* Adds space above the section */
        }


        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 12px;
            color: #007BFF;
        }

        .box {
            width: 100%;
            padding: 12px 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .box:focus {
            border-color: #007BFF;
        }

        

        .message, .error {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .message {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
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
            
            <a href="login.php">
            <div class="fa fa-user" id="user-btn"></div></a>
          </div>

        <!-- Search Form -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search here....">
            <label for="search-box" class="fa fa-search"></label>
        </form>

    
    </header>

    <!-- Sign-Up Section -->
    <section class="auth-section">
        <!-- Display messages -->
        <?php if ($registration_message): ?>
            <div class="message"><?= $registration_message ?></div>
        <?php endif; ?>
        <?php if ($error_message): ?>
            <div class="error"><?= $error_message ?></div>
        <?php endif; ?>

        <!-- Sign-Up Form -->
        <form action="" method="post" class="signup-form">
            <h3>Create an Account</h3>

            <div class="input-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="fullname" placeholder="Full Name" class="box" required>
            </div>

            <div class="input-group">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" placeholder="Email Address" class="box" required>
            </div>

            <div class="input-group">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="tel" name="phone" placeholder="Phone Number" class="box" required>
            </div>

            <div class="input-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password" class="box" required>
            </div>

            <div class="input-group">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type="text" name="address" placeholder="Address" class="box" required>
            </div>

            <div class="terms-container">
                <input type="checkbox" id="terms" required>
                <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
            </div>

            <input type="submit" name="signup" value="Sign Up" class="btn">
        </form>
    </section>

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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
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

    <!-- JavaScript at the end of the body -->
    <script src="scripts/script.js"></script>

</body>
</html>
