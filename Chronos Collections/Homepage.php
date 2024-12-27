<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronos Collection: E-Commerce Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/favicon.ico" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <a href="Homepage.php">
                    <img src="Images/Logo.png" class="logo">
                </a>
                <!--<div class="search-bar">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                    <i class="fa fa-search";> </i>
                    </button>
                </div>  -->
                <nav>
                    <ul id="MenuItems">
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="All_Products.php">Products</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="Account.php">Account</a></li>
                    </ul>
                </nav>
                <a href="Cart.php">
                    <img src="Images/cart.png" width="30px" height="30px">
                </a>
                <img src="Images/menu.png" class="menu"
                onclick="menutoggle()">
            </div>
        </div>
    </div>

<!----------------------- Featured Brands ----------------------->
<h1 class="title">Featured Brands</h1>
    <div class="container1">
        <div class="brands">
            <a href="All_Products.php"><img src="Images/Brands/Cartier/cartier.jpg"></a>
            <a href="All_Products.php"><img src="Images/Brands/Rolex/rolex.jpg"></a>
            <a href="All_Products.php"><img src="Images/Brands/Iwc/iwc.jpg"></a>
            <a href="All_Products.php"><img src="Images/Brands/Omega/omega.jpg"></a>
            <a href="All_Products.php"><img src="Images/Brands/Panerai/panerai.jpg"></a>
        </div>
    </div> 

<!----------------------- Featured Products ----------------------->
    <div class="container2">
        <h1 class="title">Featured Products</h1>
        <div class="prow">   
            <div class="p4">    
                <a href="Order.php"><img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp"></a>
                <h4>Rolex YachtMaster<br>Rhodium<br>40mm 2021</h4>
                <p>Price: ₱829,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
            </div>  
            <div class="p4">
                <img src="Images/Brands/Rolex/Rolex Datejust 28 Two Tone Yellow Gold Choco Big Diamond 28mm 279171.webp">
                <h4>Rolex Datejust Yellow Gold Choco<br>28mm 2020</h4>
                <p>Price: ₱759,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
            </div>  
            <div class="p4">
                <img src="Images/Brands/Cartier/Cartier Tank Louis Calendar Aperture.webp">
                <h4>Cartier Tank Louis Calendar Aperture<br>W1560002</h4>
                <p>Price: ₱829,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
            </div>
            <div class="p4">
                <img src="Images/Brands/Omega/Omega Speedmaster Moonwatch Silver Snoopy 50th Award Anniv.webp">
                <h4>Omega Speedmaster Moonwatch Silver Snoopy 2024</h4>
                <p>Price: ₱989,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
            </div>  
        </div>
    </div>

    <div class="parallax1"></div>

<!----------------------- Latest Products ----------------------->
    <h2 class="title">Latest Products</h2>
    <div class="prow">
        <div class="p4">
            <img src="Images/Brands/Iwc/IWC Top Gun Mark XVIII JW324712 2022.webp">
            <h4>IWC Top Gun<br>Mark XVIII<br>2022</h4>
            <p>Price: ₱279,000.00</p>
            <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
        <div class="p4">
            <img src="Images/Brands/Iwc/IWC Portofino 150th Anniversary.webp">
            <h4>IWC Portofino 150th Anniversary<br>2024</h4>
            <p>Price: ₱168,000.00</p>
            <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
        <div class="p4">
                <img src="Images/Brands/Panerai/PANERAIBLACK1.webp">
                <h4>PANERAI PAM 384 Black Ceramic<br>PA384 2018</h4>
                <p>Price: ₱345,000.00   </p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div> 
        <div class="p4">
                <img src="Images/Brands/Panerai/Panerai Luminor White Dial 44mm PAM01314 2022.webp">
                <h4>Panerai Luminor White Dial 44mm<br>2022</h4>
                <p>Price: ₱349,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
    </div>
    <div class="prow">
        <div class="p4">
            <img src="Images/Brands/Omega/Omega Speedmaster Moon to Mars 35775000 2008.webp">
            <h4>Omega Speedmaster Moon to Mars<br>2008</h4>
            <p>Price: ₱495,000.00</p>
            <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
        <div class="p4">
            <img src="Images/Brands/Omega/Omega De Ville Blue Roman 39mm 42413402003001 2015.webp">
            <h4>Omega De Ville<br>Blue Roman<br>39mm 2015</h4>
            <p>Price: ₱99,000.00</p>
            <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
        <div class="p4">
                <img src="Images/Brands/Cartier/ROSEGOLDBALON.webp">
                <h4>Cartier Ballon Bleu<br>46mm Rose Gold 3376 W6920054</h4>
                <p>Price: ₱528,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div> 
        <div class="p4">
                <img src="Images/Brands/Cartier/DUMONT.webp">
                <h4>Cartier Santos<br>Dumont Large Quartz WSSA0022</h4>
                <p>Price: ₱238,000.00</p>
                <button class="btn" onclick="location.href='Order.php'">Buy Now</button>
        </div>  
    </div>

    <div class="parallax2"></div>

    <!----------------------- Offer ----------------------->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="p2">
                    <img src="Images/offer.webp">
                </div>
                <div class="p2">
                    <p>Exclusively Available on Chronos Collection</p>
                    <h1>Air-King</h1>
                    <p>Oyster, 40 mm, Oystersteel<br>Reference 126900<br>PHP 405,000</p>
                    <a href="Order.php" class="btn2">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

<!----------------------- Video ----------------------->
    <div>
        <video src="Images/vid.mp4" loop controls style="display: block; margin: 0 auto;"></video>
    </div>

<!----------------------- CEO ----------------------->
    <div class="ceo" id="about-us">
        <div class="container">
            <div class="prow">
                <div class="p4">
                    <a href="https://www.facebook.com/Joshoowott">
                    <img src="Images/ceo1.jpg">
                    </a>
                    <h2>Euan Josh<br>Amor</h2>
                    <p>CEO & Founder</p>
                    <a href="https://www.facebook.com/Joshoowott">Follow in Facebook</a>
                </div>
                <div class="p4">
                    <a href="https://www.facebook.com/isaacclint.beron1?mibextid=ZbWKwL">
                    <img src="Images/isaac.jpg">
                    </a>
                    <h2>Isaac Clint<br>Beron</h2>
                    <p>CEO & Founder</p>
                    <a href="https://www.facebook.com/isaacclint.beron1?mibextid=ZbWKwL">Follow in Facebook</a>
                </div>
                <div class="p4">
                    <a href="https://www.facebook.com/cherwyn.malquisto">
                    <img src="Images/cherwyn.jpg">
                    </a>
                    <h2>Cherwyn<br>Malquisto</h2>
                    <p>CEO & Founder</p>
                    <a href="https://www.facebook.com/cherwyn.malquisto">Follow in Facebook</a>
                </div>
            </div>
        </div>
    </div>

<!----------------------- Footer ----------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer1">
                    <img src="Images/logo.png">
                    <p>Chronos Collection is a trusted 100% authentic luxury watch dealer in the Philippines.</p>
                </div>
                <div class="footer2">   
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">
                Chronos Collection © 2024 | Joshoowoot.
            </p>
        </div>           
    </div>

<!----------------------- JS for Toggle Menu ----------------------->
    <script src="script.js"></script>

</body>
</html>