<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Buy the latest Men's Fashion T-Shirts and more from our online store. Affordable prices with high-quality products.">
        <meta name="keywords" content="Men's Fashion, T-shirts, Clothing, eCommerce, GiftHeaven, Shop Online">
        <meta name="author" content="GiftHeaven">
        <title>Product Details - GiftHeaven</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
         <!-- Font Awesome CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .small-img-group {
                display: flex;
                justify-content: space-between;
            }
            .small-img-col {
                flex-basis: 24%;
                cursor: pointer;
            }
            .sproduct select {
                display: block;
                padding: 5px 10px;
            }
            .sproduct input {
                width: 50px;
                height: 40px;
                padding-left: 10px;
                font-size: 16px;
                margin-right: 10px;
            }
            .sproduct input:focus {
                outline: none;
            }
            .buy-btn {
                background-color: #0f5601;
                opacity: 1;
                transition: 0.3s ease;
            }
        </style>
        
    </head>

    <body>
        <!--Navigation-->
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
          

            <!-- Search Form -->
            <form class="search-form">
                <input type="search" id="search-box" placeholder="Search here....">
                <label for="search-box" class="fa fa-search"></label>
            </form>

            <!-- User Login Form -->
            <form action="#" class="login-form">
                <h3>login now</h3>
                <input type="email" placeholder="enter your email" class="box">
                <input type="password" placeholder="enter password" class="box">
                <p>Forgot your password? <a href="#">Click Here</a></p>
                <p>Don't have an account? <a href="signup.php">Create Now</a></p>
                <input type="submit" value="login now" class="btn">
            </form>
        </header>
    <!-- Header Section End -->


        <!-- Product Section -->
        <section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid w-100 pb-1" src="shop/1.jpg" id="MainImg" alt="Main Product Image">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="shop/1.jpg" width="100%" class="small-img" alt="Product Image 1">
                        </div>
                        <div class="small-img-col">
                            <img src="shop/24.jpg" width="100%" class="small-img" alt="Product Image 2">
                        </div>
                        <div class="small-img-col">
                            <img src="shop/25.jpg" width="100%" class="small-img" alt="Product Image 3">
                        </div>
                        <div class="small-img-col">
                            <img src="shop/26.jpg" width="100%" class="small-img" alt="Product Image 4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <h6>Home / T-Shirt</h6>
                    <h3 class="py-4">Men's Fashion T-Shirts</h3>
                    <h2>Rs. 2500</h2>
                    <select class="my-3">
                        <option>Select Size</option>
                        <option>XL</option>
                        <option>XXL</option>
                        <option>Small</option>
                        <option>Large</option>
                    </select>
                    <input type="number" value="1">
                    <button class="buy-btn" onclick="addToCart()">Add to Cart</button>
                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span>
                        Stylish and comfortable slim fit chino pant to suit any day, any occasion. <br>
                        Fabric composition: 98/2 Cotton/ Spandex <br>
                        Waist: Mid-Rise <br>
                        Fit type: Slim <br>
                        Length: Regular <br>
                        Pocket styling: Slant pocket <br>
                        Waistband closure: Centre front button with zip fly <br>
                        Wash care instructions: Machine wash <br>
                        Please note that the actual color of the item may vary due to lighting or monitor display settings.
                    </span>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-3">
              <h3>Related Products</h3>
              <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">
              <!-- Product 1 -->
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="Featured/1.jpg" alt="Espresso Chocolate Cake">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Espresso Chocolate Cake with Almond Thins</h5>
                <h4 class="p-price">Rs 5,950</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <!-- Product 2 -->
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="Featured/2.jpg" alt="Candy Sprinkle Meringue Kisses">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Candy Sprinkle Meringue Kisses</h5>
                <h4 class="p-price">Rs 1,250</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <!-- Product 3 -->
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="Featured/3.jpg" alt="Fresh Flower Bouquet">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Colours In Love Fresh Flower Bouquet</h5>
                <h4 class="p-price">Rs 4,250</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <!-- Product 4 -->
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="Featured/4.jpg" alt="Emporio Armani Chronograph">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Emporio Armani Chronograph</h5>
                <h4 class="p-price">Rs 75,900</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
            </div>
        </section>

        <!-- Footer -->
         <!-- Footer Section-->
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

     <!-- JavaScript at the end of the body -->
     <script src="scripts\script.js"></script>
        

        <!-- Scripts -->
        <script>
            // Main product image update
            var MainImg = document.getElementById('MainImg');
            var smallimg = document.getElementsByClassName('small-img');

            smallimg[0].onclick = function() {
                MainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function() {
                MainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function() {
                MainImg.src = smallimg[2].src;
            }
            smallimg[3].onclick = function() {
                MainImg.src = smallimg[3].src;
            }
        </script>

        <script>
          // Initialize an empty cart if one doesn't already exist in localStorage
          let cart = JSON.parse(localStorage.getItem("cart")) || [];

          // Function to add a product to the cart
          function addToCart() {
              // Get product details (you can adjust these values to dynamically match your product info)
              let product = {
                  id: 1, // Example ID, replace with real product ID
                  name: "Emporio Armani Mens T-Shirt ", 
                  price: 25000,
                  size: document.querySelector('select').value, // Get selected size
                  quantity: parseInt(document.querySelector('input[type="number"]').value), // Get quantity
                  imgSrc: document.getElementById('MainImg').src // Get the current product image
              };

              // Check if product is already in the cart
              let existingProductIndex = cart.findIndex(item => item.id === product.id && item.size === product.size);

              if (existingProductIndex !== -1) {
                  // If product already exists in cart, increase its quantity
                  cart[existingProductIndex].quantity += product.quantity;
              } else {
                  // If product is not in cart, add it
                  cart.push(product);
              }

              // Save updated cart to localStorage
              localStorage.setItem("cart", JSON.stringify(cart));

              // Optionally, show confirmation to the user
              alert("Product added to cart!");
          }

          // Function to display cart count (optional)
          function updateCartCount() {
              let cartCount = document.getElementById('cart-count');
              let totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
              cartCount.innerText = totalItems;
          }

          // Run on page load to update cart count
          window.onload = function() {
              updateCartCount();
          }
        </script>

          <!-- JavaScript at the end of the body -->
        <script src="scripts/script.js"></script>
    </body>
</html>
