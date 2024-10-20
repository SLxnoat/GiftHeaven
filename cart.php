<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GiftHeaven.com</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Link to CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container {
            min-height: 100vh; /* Takes full height of the window */
            display: flex;
            flex-direction: column;
            padding: 20px; /* Adds padding to the container */
        }

        header {
            padding: 20px 0; /* Adds padding to the header */
            background-color: #f8f8f8; /* Light background for the header */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            position: relative; /* Make sure it stacks correctly with the content */
        }

        #cart-container {
            margin-top: 30px; /* Space above the cart section */
            padding: 20px; /* Padding inside the cart section */
            background-color: #fff; /* Background for the cart section */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        }

        table {
            width: 100%; /* Full width */
            border-collapse: collapse; /* Remove double borders */
        }

        th, td {
            padding: 10px; /* Padding inside table cells */
            text-align: left; /* Left align text */
            border-bottom: 1px solid #ddd; /* Border between rows */
        }

        th {
            background-color: #f2f2f2; /* Header background color */
        }

        .total {
            font-weight: bold; /* Make total text bold */
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
    <!-- Header Section End -->
  
    <!-- Cart Section -->
    <section id="cart-container" class="container my-5 py-5">
        <h2 class="text-center">Your Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Cart Items will be dynamically inserted here by JavaScript -->
            </tbody>
        </table>
        
        <div class="total my-5 text-right"><h4 id="total-price">Total: LKR 0/=</h4></div>
        <div class="text-right">
            <button id="checkout-btn" class="btn btn-primary">Checkout</button>
        </div>
    </section>

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
            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>
    <!-- Footer Section End -->

    <!-- JavaScript for cart functionality -->
    <script>
        // Function to load cart items from localStorage and display them in the cart
        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartContainer = document.querySelector("tbody");
            let total = 0;

            cart.forEach((product, index) => {
                const totalPrice = product.price * product.quantity;
                total += totalPrice;

                // Create a row for each product
                const row = `
                    <tr>
                        <td><a href="#" onclick="removeItem(${index})"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        <td><img src="${product.image}" alt="${product.name}" width="50"></td>
                        <td><h5>${product.name}</h5></td>
                        <td><h5>Rs. ${product.price}</h5></td>
                        <td><input class="w-25 pl-1" type="number" value="${product.quantity}" onchange="updateQuantity(${index}, this.value)"></td>
                        <td><h5>Rs. ${totalPrice}</h5></td>
                    </tr>
                `;
                cartContainer.innerHTML += row;
            });

            document.getElementById('total-price').innerHTML = `Total: LKR ${total}/=`;
            document.getElementById('cart-data').value = JSON.stringify(cart);
        }

        // Function to remove a product from the cart
        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart'));
            cart.splice(index, 1); // Remove item at index
            localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart
            location.reload(); // Reload page to update cart
        }

        // Function to update the quantity of a product
        function updateQuantity(index, newQuantity) {
            let cart = JSON.parse(localStorage.getItem('cart'));
            cart[index].quantity = parseInt(newQuantity);
            localStorage.setItem('cart', JSON.stringify(cart));
            location.reload(); // Reload page to update cart totals
        }

        // Load cart when the page loads
        window.onload = loadCart;

        // Handle checkout with AJAX and display alert
        document.getElementById('checkout-btn').addEventListener('click', function() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert("Your cart is empty.");
                return;
            }

            // Send AJAX request to checkout.php
            fetch('checkout.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ cart_data: cart })
            })
            .then(response => response.text())
            .then(data => {
                // Show success alert and clear the cart
                alert(data);
                localStorage.removeItem('cart'); // Clear the cart
                location.reload(); // Reload the page to update the cart display
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

    <script src="scripts/script.js"></script>

</body>
</html>
