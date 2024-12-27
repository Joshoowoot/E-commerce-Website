<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form | Chronos Collection</title>
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
                <nav>
                    <ul id="MenuItems">
                        <li><a href="Homepage.php">Home</a></li>
                        <li><a href="All_Products.php">Products</a></li>
                        <li><a href="Homepage.php">About Us</a></li>
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

<!----------------------- Order Page ----------------------->

    <div class="container order">
        <div class="row">
            <div class="p2">
                <img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp">
            </div>
            <div class="p2">
                <h1>Rolex YachtMaster 40 Rhodium 40mm 126622 2021</h1>
                <h4>Price: ₱829,000.00</h4>
                <input type="number" value="1">
                <a href="" class="btn2">Add To Cart</a> 
                <h3>Product Details</h3>
                <p>Rolex YachtMaster 40 Rhodium 40mm 126622 2021<br>
                    #A1238 / H11179-8<br>
                    Year Model 2021<br>
                    Case Size 40mm <br>
                    Reference 126622<br>
                    Sapphire Crystal Glass<br>
                    Inclusions: Complete Set w/ Original Papers</p>
            </div>
        </div>
    </div>

<!----------------------- Related Products ----------------------->
    <div class="container2">
        <h1 class="title">Related Products</h1>
        <div class="prow">   
            <div class="p4">
                <img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp">
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