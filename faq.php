<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop FAQs</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link to CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* FAQ Section */
        .faq-section {
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
        }

        .faq-question {
            cursor: pointer;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .faq-answer {
            display: none;
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }

        /* User Input Answer Section */
        .user-answer-section {
            margin-top: 20px;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .user-answer-section input, 
        .user-answer-section textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .user-answer-section button {
            background-color: rgb(182, 0, 106);
            font-size: 2rem;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .alert {
            padding: 10px;
            margin: 10px 0;
            color: #fff;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #4CAF50; /* Green */
        }

        .alert-error {
            background-color: #f44336; /* Red */
        }

        /* Shop Images */
        .shop-images {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .shop-images img {
            width: 150px;
            height: auto;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<?php
// Database connection
$host = 'localhost'; // The host where the database is located
$user = 'root'; // Your database username
$pass = ''; // Your database password
$dbname = 'giftheaven_db'; // The database name

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check if the connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message variables
$message = '';
$messageType = '';


// Handle user input submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userQuestion = $conn->real_escape_string($_POST['userQuestion']);
    $userAnswer = $conn->real_escape_string($_POST['userAnswer']);

    // Insert user question and answer into the database
    $sql = "INSERT INTO user_questions_answers (user_question, user_answer) VALUES ('$userQuestion', '$userAnswer')";

    if ($conn->query($sql) === TRUE) {
        $message = 'Thank you for your input!';
        $messageType = 'success'; // For success message
    } else {
        $message = 'Error: ' . $conn->error;
        $messageType = 'error'; // For error message
    }
}
?>

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

<!-- FAQ Section -->
<div class="faq-section">
    <h3>Frequently Asked Questions</h3>

    <div class="faq-question" onclick="toggleFaq(0)">
        What is the delivery time for items?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>

    <div class="faq-question" onclick="toggleFaq(1)">
        Do you offer gift wrapping services?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>

    <div class="faq-question" onclick="toggleFaq(2)">
        Can I return a gift item?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>

    <div class="faq-question" onclick="toggleFaq(3)">
        How can I track my order?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>

    <div class="faq-question" onclick="toggleFaq(4)">
        What payment methods do you accept?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>

    <div class="faq-question" onclick="toggleFaq(5)">
        Is there a minimum purchase amount for free shipping?
    </div>
    <div class="faq-answer">
        <!-- Answer will be here -->
    </div>
</div>

<!-- User Input Answer Section -->
<div class="user-answer-section">
    <h3>Ask a Question or Share an Answer</h3>
    <form method="POST" action="">
        <input type="text" name="userQuestion" id="userQuestion" placeholder="Your Question" required>
        <textarea name="userAnswer" id="userAnswer" placeholder="Your Answer" rows="5" required></textarea>
        <button type="submit">Submit</button>
        
        <!-- Display message area -->
        <?php if ($message): ?>
            <div class="alert <?php echo $messageType === 'success' ? 'alert-success' : 'alert-error'; ?>">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
    </form>
</div>

<!-- Shop Images -->
<div class="shop-images">
    <img src="https://coolplanet.lk/cdn/shop/files/Men_1100x1100_b9b2d7aa-7488-4b63-85a8-1c1c18b95404.jpg?v=1669980219&width=800" alt="Shop Image 1">
    <img src="https://coolplanet.lk/cdn/shop/files/79c2ecad-c0b7-4565-901a-329f890b47a4.jpg?v=1654934846&width=800" alt="Shop Image 2">
    <img src="https://coolplanet.lk/cdn/shop/files/Women_1100x1100_9a373dc8-5652-4f46-bcdc-4a3df66e71b9.jpg?v=1669980244&width=800" alt="Shop Image 3">
</div>

<script>
    // Toggle FAQ answers
    function toggleFaq(index) {
        const answers = document.querySelectorAll('.faq-answer');
        answers[index].style.display = answers[index].style.display === 'block' ? 'none' : 'block';
    }
</script>

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

<script src="scripts/script.js"></script>


</body>
</html>
