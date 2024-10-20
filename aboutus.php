<!DOCTYPE html>
<html>
<head>

     <!-- Font Awesome CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- Link to CSS File -->
     <link rel="stylesheet" type="text/css" href="css\style.css">
    <style>
        .hero{
    background-color: #f8f8f8;
    overflow: hidden;
}

.heading h1{
    color:rgb(182, 0, 106);
    font-size: 55px;
    text-align: center;
    margin-top: 35px;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:90%;
    margin:65px auto;
}

.hero-content{
    flex:1;    
    width:600px;    
    margin:0px 25px;
    animation: fadeInUp 2s ease ;
}

.hero-content h2{
    font-size: 38px;
    margin-bottom: 20px;
    color: #333;

}

.hero-content p{
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 40px;
    color: #666;
}

.heading h1{
    background-color: rgb(182, 0, 106);
    color: #fff;
    padding: 12px 24px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
    font-size: 55px;
    text-align: center;
    margin-top: 35px;
}

.heading h1:hover{
    background-color: rgb(182, 0, 106);
    transform: scale(1.1);
}

.image{
    flex:1;
    width:600px;
    margin:auto;
    animation: fadeInRight 2s ease ;
}

img{
    width: 100%;
    height: auto;
    border-radius: 10px;
}

@media screen and (max-width: 768px){
    .heading h1{
        font-size: 45px;
        margin-top: 30px;

    }
    .hero{
        margin: 0px;
    }
    .container{
        width: 100%;
        flex-direction: column;
        margin: 0px;
        padding: 0px 40px;
    }
    .hero-content{
        width: 100%;
        margin: 35px 0px;
    }
    .hero-content h2{
        font-size: 30px;
    }
    .hero-content p{
        font-size: 18px;
        margin-bottom: 20px;
    }
    .image{
        width: 100%;
    }
}
@keyframes fadeInUp{
    0%{
        opacity: 0;
        transform: translateY(50px);
    }
    100%{
        opacity: 1;
        transform: translateY(0px);
    }
}
@keyframes fadeInRight{
    0%{
        opacity: 0;
        transform: translateX(-50px);
    }
    100%{
        opacity: 1;
        transform: translateX(0px);
    }
}

    </style>
    <title>About Us Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">+
</head>
<body>>

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

    <section class="hero">
    <div class="heading">
        <h1>About Us</h1>
    </div>
        <div class="container">
        <div class="hero-content">
            <h2>Welcome To GiftHeaven</h2>
                <p>A delightful online gift shop offering a curated selection of heartwarming gifts for friends and loved ones.
                    From personalized keepsakes to romantic tokens of affection, this store has everything you need to express your feelings.
                    Whether you're looking for charming presents for birthdays, anniversaries, or just to show you care, you'll find the perfect gift to make every moment memorable.
                </p>
                <br>
                <br>
                
                
        </div>
        <div class="image">
            <img src="About us.jpg">
        </div>
        </div>
        <div class="heading">
            <h1>VISION & MISSION</h1>
        </div>
        <div class="container">
        <div class="hero-content">
        <p>Vision - "To be the leading online destination for thoughtful and heartfelt gifts, bringing joy and love to every occasion by connecting people through meaningful gestures."</p>
        <p>Mission - "Our mission is to offer a carefully curated selection of unique and high-quality gifts that help customers express their love, appreciation, and care for friends and loved ones.
            We strive to create a seamless and enjoyable shopping experience, delivering happiness and spreading love one gift at a time."</p>
        </div>
        <div class="image">
            <img src="About us 2.avif">
        </div>
    </div>
</section>

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

</body>
</html>