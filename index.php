<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Smart Farmer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" >
        <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css”>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/media.css">

    </head>
    <body>
        <section id="header">
            <a href="#" onclick="window.location.href='index.html';"><img src="img/logo.png" height="70" width="70" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li> <a class='active' href='/'>Home</a></li>
                    <li> <a href='/shop'>Shop</a></li>
                    <li> <a href='/blog'>Blog</a></li>
                    <li> <a href='/about'>About</a></li>
                    <li> <a href='/contact'>Contact</a></li>
                    <li id="lg-bag"> <a href='/cart'><i class="fas fa-cart-arrow-down"></i></a></li>
                    <a href="#" id="close" style="color: black;"> <p> &#127367;</p></a>
                    <li id="login"><a href='/login'><i class="fas fa-user"></i></a></li>
                    <li id="search">
                        <label>
                            <input type="text" placeholder="Search..">
                        </label>
                    </li>
                </ul>
            </div>

            <div id="mobile">
                <a href='/cart' style='color: black;'><i class="fas fa-cart-arrow-down"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="hero">
            <h4 style="color: aqua; font-size: 40px;"> Trade-in-offer</h4>
            <h2> Super value deals</h2>
            <h1>On all products</h1>
            <p style> <strong> Save more with coupons & up to 70%off!</strong></p>
            <button onclick="window.location.href='shop.html';">Shop Now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/freeshipping.jpg" alt="free shipping">
                <h6>Free shipping</h6>
            </div>
            <div class="fe-box">
                <img src="img/freeship2.jpeg" alt="Order online">
                <h6> Order online</h6>
            </div>
            <div class="fe-box">
                <img src="img/savemoney.jpeg" alt="Save money">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="img/promotions.jpeg" alt="promotions" height="100" width="100">
                <h6> Promotions </h6>
            </div>
            <div class="fe-box">
                <img src="img/happysells.jpeg" alt="Happy sells" height="100" width="100">
                <h6>Happy sells</h6>
            </div>
            <div class="fe-box">
                <img src="img/support.jpg" alt="support" height="100" width="100">
                <h6> 24/7 support</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2> Featured Products</h2>
            <p style="color: black; font-size: 26px;"> Seasonal Produce From the Orchard </p>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='singleproduct.html';">
                    <img  src="img/farm1.jpg" alt="">
                    <div class="des">
                        <h5> Organic Carrots</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/100kg</h4>
                    </div>
                    <a href="#"> <i class="fas fa-cart-plus cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='singlep2.html';">
                    <img  src="img/farm8.jfif" alt="">
                    <div class="des">
                        <span>By: Raymond</span>
                        <h5> Eggs</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K5000/100trays</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='singlep3.html';">
                    <img  src="img/farm8.jfif" alt="">
                    <div class="des">
                        <span> By: John</span>
                        <h5> Free range chickens</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K10000/100chickens</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='single4p.html';" >
                    <img  src="img/farm6.jfif" alt="">
                    <div class="des">
                        <span> By: Chama</span>
                        <h5> Mixed Beans</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/10kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/farm5.jfif" alt="">
                    <div class="des">
                        <span> BY: Chimfwembe</span>
                        <h5> Maize</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K200/50kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/farm2.jfif" alt="">
                    <div class="des">
                        <span></span>
                        <h5> Tomatoes </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K400/box</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/farm3.jpg" alt="">
                    <div class="des">
                        <span> By: Kalaba</span>
                        <h5> Potatoes</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K2500/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/farm0.jfif" alt="">
                    <div class="des">
                        <span> By: Lamuka</span>
                        <h5> Onions</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K5000/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
            </div>

        </section>

        <section id="banner" class="section-m1">
            <h4> Bang For Your Buck</h4>
            <h2> Up to <span>30% off </span>- All selected products </h2>
            <button class="normal">Explore more</button>
        </section>

        <section id="product1" class="section-p1">
            <h2> Fresh Form the Orchard</h2>
            <p style="color: black;"> Seasonal Produce From Trusted Farmers</p>
            <div class="pro-container">
                <div class="pro">
                    <img  src="img/new1.jfif" alt="">
                    <div class="des">
                        <span> By: Mwansa</span>
                        <h5> Soya Beans</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K600/50kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new2.jfif" alt="">
                    <div class="des">
                        <span>By: Ruth</span>
                        <h5> Cabbages</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/100 units</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new3.jpg" alt="">
                    <div class="des">
                        <span> By: Malama</span>
                        <h5> Buka Fish</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new4.jfif" alt="">
                    <div class="des">
                        <span> By: Lwimba</span>
                        <h5> Sunflower</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new5.jpg" alt="">
                    <div class="des">
                        <span> BY: Mainza</span>
                        <h5> Pigs</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K450/50kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new6.jpg" alt="">
                    <div class="des">
                        <span> By: Kateba</span>
                        <h5> Quails </h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K1000/50 birds</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new7.jpg" alt="">
                    <div class="des">
                        <span> By: Kalaba</span>
                        <h5> Cassava</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K2500/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
                <div class="pro">
                    <img  src="img/new8.jfif" alt="">
                    <div class="des">
                        <span> By: Lamuka</span>
                        <h5> Sweet Potatoes</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>K2500/100kg</h4>
                    </div>
                    <a href="#"><i class="fas fa-cart-plus cart" aria-hidden="true"></i></a>
                </div>
            </div>

        </section>

        <section id="sm-banner" class="section-p1">

         <div class="banner-box">
            <h4> Great deals</h4>
            <h2>Up to 30% more value</h2>
            <span>The best farm products on sale</span>
            <button class="white">Learn More</button>
         </div>
         <div class="banner-box banner-box2">
            <h4> Beef/Meat</h4>
            <h2> Coming Soon</h2>
            <span>The best farm beef products on sale</span>
            <button class="white"> Available Stock</button>
         </div>
        </section>



        <section id="banner3">
            <div class="banner-box">
                <h2>Limited Sale</h2>
                <h3>Seasonal Products -20% OFF</h3>
             </div>
             <div class="banner-box banner-box2">
                <h2> New Emergents</h2>
                <h3 >Consumer choice</h3>
             </div>
             <div class="banner-box banner-box3">
                <h2>Poultry</h2>
                <h3 >Choose Healthy birds</h3>
             </div>

        </section>


        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4> Sign up For Newsletters</h4>
                <p> Get Email updates about the latest in house <span>special offers.</span> </p>
            </div>
            <form action="">
             <div class="form">
                 <label>
                     <input type="email" placeholder="Your email address" required>
                 </label>
                 <button class="normal"> Sign Up</button>
             </div>
            </form>
        </section>
        <footer class="section-p1">
            <div class="col">
                <img onclick="window.location.href='index.html';" class="logo" src="img/logo.png" alt="logo" width="80" height="90">
                <h4>Contact</h4>
                <p> <strong>Address:</strong> Chilenje LUSAKA, ZAMBIA</p>
                <p> <strong>Phone:</strong> +260 979 466 069</p>
                <p> <strong>Hours:</strong> We are open 24/7</p>
                <div class="follow">
                    <h4>Follow us</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-youtube"></i>

                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#" onclick="window.location.href='about.html';">About Us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#" onclick="window.location.href='contact.html';">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#" onclick="window.location.href='login.html';">Sign In</a>
                <a href="#" onclick="window.location.href='cart.html';">View Cart</a>
                <a href="#">My Wishlist</a>
                <a href="#">Track My Order</a>
                <a href="#">Help</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p> From App Store or Google Play</p>
                <div class="row">
                    <img src="img/appstore.webp" alt="App Store" width="120" height="40">
                    <img src="img/googleapp.png" alt="Google Play" width="120" height="40">
                </div>
                <p> Secured Payment Gateways</p>
                <img src="img/paymentgatway.png" alt="Payment" width="250" height="60">
            </div>
            <div class="copyright">
                <p> &copy; 2023, Home of The Best Apples, Giving you joy through an Apple</p>
            </div>

        </footer>
        <script src="js/app.js"></script>
    </body>
</html>
