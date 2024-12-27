<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page | Chronos Collection</title>
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
                <a href="Cart.html">
                    <img src="Images/cart.png" width="30px" height="30px">
                </a>
                <img src="Images/menu.png" class="menu"
                onclick="menutoggle()">
            </div>
        </div>
    </div>

<!----------------------- Cart Items Details ----------------------->
    <div class="container cartpage">
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp">
                        <div>
                            <p>Rolex YachtMaster Rhodium 40mm 2021</p>
                            <small>Price: ₱829,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₱ 829,000.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp">
                        <div>
                            <p>Rolex YachtMaster Rhodium 40mm 2021</p>
                            <small>Price: ₱829,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₱ 829,000.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="Images/Brands/Rolex/Rolex YachtMaster 40 Rhodium 40mm 126622 2021.webp">
                        <div>
                            <p>Rolex YachtMaster Rhodium 40mm 2021</p>
                            <small>Price: ₱829,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>₱ 829,000.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td>₱ 829,000.00</td>
                </tr>
            </table>
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