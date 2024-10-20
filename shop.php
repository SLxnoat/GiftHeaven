<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop</title>

     
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <style>
          .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
          }

          #featured > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > nav > ul > li.page-item.active > a{
            background-color: black;
          }

          #featured > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > div.row.mx-auto.container > nav > ul > li:nth-child(n):hover>a{
            background-color: rgb(1, 90, 13);
            color: #fff;
          }

          .pagination a{
            color: #000;
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


        </nav>

        <section id="featured" class="my-5 py-5">
          <div class="container  mt-5 py-3">
            <h2 class="font-weight-bold">Our featured</h2>
            <hr>
            <p>Here you can check out our new products with fair price on promo</p>
          </div>
          <div class="row mx-auto container">
            <div onclick="window.location.href='sproduct.php'" class="product text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="shop/1.jpg" alt="">
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name">Embarco T-Shirt</h5>
              <h4 class="p-price">Rs 5,950</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div onclick="window.location.href='sproduct2.php'" class="product text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="shop/2.jpg" alt="">
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name">Adidas White Sneaker</h5>
              <h4 class="p-price">Rs 1,250</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div onclick="window.location.href='sproduct1.php'" class="product text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="watches/13.jpg" alt="">
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name">Classical Watches</h5>
              <h4 class="p-price">Rs 4,250</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div onclick="window.location.href='sproduct3.php'" class="product text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="shop/4.jpg" alt="">
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name">Emporio Armani Mens Shoe </h5>
              <h4 class="p-price">Rs 69,510</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="row mx-auto container">
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shop/5.jpg" alt="">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Espresso Hat</h5>
                <h4 class="p-price">Rs 5,950</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shop/6.jpg" alt="">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Candy Sprinkle Jacket</h5>
                <h4 class="p-price">Rs 1,250</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shop/7.jpg" alt="">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Colours In Love Shoes</h5>
                <h4 class="p-price">Rs 4,250</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="shop/8.jpg" alt="">
                <div class="star">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <h5 class="p-name">Emporio Armani Mens Wet Jacket </h5>
                <h4 class="p-price">Rs 69,510</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
              <div class="row mx-auto container">
                <div class="product text-center col-lg-3 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="shop/9.jpg" alt="">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <h5 class="p-name">Espresso Bag</h5>
                  <h4 class="p-price">Rs 5,950</h4>
                  <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="shop/10.jpg" alt="">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <h5 class="p-name">Candy Sprinkle Watches</h5>
                  <h4 class="p-price">Rs 1,250</h4>
                  <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="shop/11.jpg" alt="">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <h5 class="p-name">Colours In Love Hat</h5>
                  <h4 class="p-price">Rs 4,250</h4>
                  <button class="buy-btn">Buy Now</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                  <img class="img-fluid mb-3" src="shop/12.jpg" alt="">
                  <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <h5 class="p-name">Emporio Armani Mens Shoes</h5>
                  <h4 class="p-price">Rs 69,510</h4>
                  <button class="buy-btn">Buy Now</button>
                </div>
                <div class="row mx-auto container">
                  <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="shop/13.jpg" alt="">
                    <div class="star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="p-name">Espresso Watches</h5>
                    <h4 class="p-price">Rs 5,950</h4>
                    <button class="buy-btn">Buy Now</button>
                  </div>
                  <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="shop/14.jpg" alt="">
                    <div class="star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="p-name">Candy Sprinkle Boots</h5>
                    <h4 class="p-price">Rs 1,250</h4>
                    <button class="buy-btn">Buy Now</button>
                  </div>
                  <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="shop/15.jpg" alt="">
                    <div class="star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="p-name">Colours In Love Cap</h5>
                    <h4 class="p-price">Rs 4,250</h4>
                    <button class="buy-btn">Buy Now</button>
                  </div>
                  <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="shop/16.jpg" alt="">
                    <div class="star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h5 class="p-name">Emporio Armani T-Shirt </h5>
                    <h4 class="p-price">Rs 69,510</h4>
                    <button class="buy-btn">Buy Now</button>
                  </div>
                  <div class="row mx-auto container">
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="shop/17.jpg" alt="">
                      <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <h5 class="p-name">Espresso Jacket</h5>
                      <h4 class="p-price">Rs 5,950</h4>
                      <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="shop/18.jpg" alt="">
                      <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <h5 class="p-name">Candy Sprinkle Kid's Cap</h5>
                      <h4 class="p-price">Rs 1,250</h4>
                      <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="shop/19.jpg" alt="">
                      <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <h5 class="p-name">Colours In Love Hoodie</h5>
                      <h4 class="p-price">Rs 4,250</h4>
                      <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                      <img class="img-fluid mb-3" src="shop/20.jpg" alt="">
                      <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <h5 class="p-name">Emporio Armani Ladies Coat</h5>
                      <h4 class="p-price">Rs 69,510</h4>
                      <button class="buy-btn">Buy Now</button>
                    </div>
            
                    <nav aria-label="...">
                      <ul class="pagination mt-5">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item ">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
              


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

       


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>     
  </html>