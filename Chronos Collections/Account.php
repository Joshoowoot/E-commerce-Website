<?php 
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page | Chronos Collection</title>
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
                        <li><a href="php/logout.php">Log Out</a></li>
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

<!----------------------- Account Page ----------------------->
    <div class="account-info"> 
        <div class="change-profile">
        <?php 
                
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT * FROM users WHERE Id = $id");

            // Fetch user data from the database
            while($result = mysqli_fetch_assoc($query)) {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Pass = $result['Password'];
                $res_id = $result['Id'];
            }
            echo '<a href="edit.php?Id=' . $res_id . '">Change Profile</a>';
        ?>
        </div>


                <h2>Hello there <ins><?php echo $res_Uname ?></ins></h2>
                <br>
                <br>
                <h2>Your email is <ins><?php echo $res_Email ?></ins>.</h2>
                <br>
                <br>
                <h2>Your password is <ins><?php echo $res_Pass ?></ins>.</h2>
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