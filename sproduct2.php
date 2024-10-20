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
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .buy-btn:hover {
            background-color: #0d4c01;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
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

    <!-- Product Section -->
    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" src="shoes/1.jpg" id="MainImg" alt="Main Product Image">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="shoes/2.jpg" width="100%" class="small-img" alt="Product Image 1">
                    </div>
                    <div class="small-img-col">
                        <img src="shoes/3.jpg" width="100%" class="small-img" alt="Product Image 2">
                    </div>
                    <div class="small-img-col">
                        <img src="shoes/4.jpg" width="100%" class="small-img" alt="Product Image 3">
                    </div>
                    <div class="small-img-col">
                        <img src="shoes/5.jpg" width="100%" class="small-img" alt="Product Image 4">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>Home / Shoes</h6>
                <h3 class="py-4">Adidas Shoes</h3>
                <h2>Rs. 2500</h2>
                <select class="my-3">
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1" min="1">
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
                <h5 class="p-name">Fresh Flower Bouquet</h5>
                <h4 class="p-price">Rs 6,250</h4>
                <button class="buy-btn">Buy Now</button>
            </div>
        </div>
    </section>

    <script>
        // Image Switcher
        var MainImg = document.getElementById('MainImg');
        var smallImgs = document.getElementsByClassName('small-img');
        for (let i = 0; i < smallImgs.length; i++) {
            smallImgs[i].onclick = function () {
                MainImg.src = smallImgs[i].src;
            };
        }

        // Add to Cart Function with Redirection to Cart Page
        function addToCart() {
            const size = document.querySelector('.sproduct select').value;
            const quantity = document.querySelector('.sproduct input[type="number"]').value;

            if (size === "Select Size" || quantity < 1) {
                alert("Please select a size and a valid quantity.");
                return;
            }

            // Display an alert to confirm the item was added
            alert(`Added to cart:\nSize: ${size}\nQuantity: ${quantity}`);

            // Redirect to the cart page with query parameters
            window.location.href = `cart.php?size=${size}&quantity=${quantity}`;
        }
    </script>

    <!-- JavaScript at the end of the body -->
    <script src="scripts/script.js"></script>
</body>
</html>
