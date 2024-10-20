<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        header {
            padding: 20px 0; /* Adds padding to the header */
            background-color: #f8f8f8; /* Light background for the header */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            position: relative; /* Make sure it stacks correctly with the content */
        }

        /* Contact Us Section */
        .contact-section {
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin: 5px 0;
        }

        .contact-info a {
            color: rgb(182, 0, 106);
            font-size: 1.2rem;
            text-decoration: none;
        }

        /* Alert messages */
        .alert {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Contact Form */
        .contact-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .contact-form input, 
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .contact-form button {
            background-color: rgb(182, 0, 106);
            font-size: 2rem;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Table Styles */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: rgb(182, 0, 106);
            color: white;
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

        /* Location Section */
        .location-section {
            margin-top: 40px;
        }

        .location-info {
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .map {
            margin: 0 auto;
            max-width: 600px;
            border: 2px solid #ddd;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }
    </style>
</head>
<body>

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

<!-- Contact Us -->
<div class="contact-section">
    <h1>Contact Us</h1>

    <!-- Alert for Database Connection -->
    <?php
    // Database connection
    $host = 'localhost';
    $db = 'giftheaven_db'; 
    $user = 'root'; 
    $pass = ''; 
    $conn = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        echo '<div class="alert alert-error">Database connection failed: ' . $conn->connect_error . '</div>';
    } else {
        echo '<div class="alert alert-success">Database connected successfully!</div>';
    }

    // Fetch contacts from the database
    $result = $conn->query("SELECT * FROM contacts");
    ?>

    <!-- Contact Info -->
    <div class="contact-info">
        <p>General Hotline: <a href="tel:+94112867511">(011) 286 2311</a></p>
        <p>Order Updates: <a href="tel:+94773446447">(077) 344 7447</a></p>
        <p>General Email: <a href="mailto:online12@gmail.com">online12@gmail.com</a></p>
        <p>Order Email: <a href="mailto:info34@gmail.com">info34@gmail.com</a></p>
    </div>

    <!-- Contact Form -->
    <form id="contactForm" class="contact-form" onsubmit="submitForm(event)">
        <input type="text" id="name" placeholder="Your Name" required>
        <input type="email" id="email" placeholder="Your Email" required>
        <textarea id="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <p id="responseMessage"></p>

    <!-- Display Contacts Table -->
    <h2>Contacts Table</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['message']}</td>
                        <td>{$row['created_at']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No contacts found</td></tr>";
        }
        $conn->close(); // Close the connection
        ?>
    </table>

    <!-- Shop Images -->
    <div class="shop-images">
        <img src="Featured/1.jpg" alt="Shop Image 1">
        <img src="Featured/2.jpg" alt="Shop Image 2">
        <img src="Featured/3.jpg" alt="Shop Image 3">
    </div>

    <!-- Location Section -->
    <div class="location-section">
        <h2>Our Location</h2>
        <p class="location-info">123 Gift Lane, Malabe, Sri Lanka</p>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126687.8822701402!2d80.15424199065148!3d6.917695730147596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25962c703f169%3A0x35ebc497f1ab39c4!2sGift%20Heaven!5e0!3m2!1sen!2slk!4v1632029352284!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<script>
    function submitForm(event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Use backticks for string interpolation
        document.getElementById('responseMessage').innerHTML = `Thank you, ${name}! We will get back to you at ${email} soon.`;

        // Reset the form after submission
        document.getElementById('contactForm').reset();
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
