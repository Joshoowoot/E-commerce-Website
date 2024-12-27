<?php 
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
     header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style/style.css">
     <title>Change Profile</title>
     <style>
          /* Style for the Show Password toggle */
          .toggle-container {
               margin-top: 10px;
               display: flex;
               align-items: center;
          }

          .toggle-container input {
               margin-right: 5px;
          }

          .toggle-container label {
               font-size: 14px;
               color: #333;
               cursor: pointer;
          }

          .toggle-container label:hover {
               color: #007bff;
          }

          /* Style for the password input and the toggle */
          .field input {
               width: 100%;
               padding: 10px;
               margin: 8px 0;
               border: 1px solid #ccc;
               border-radius: 4px;
          }

          .btn {
               background-color: #178582;
               color: white;
               border: none;
               padding: 10px 20px;
               cursor: pointer;
               border-radius: 4px;
               font-size: 16px;
               color: #fff;
          }

          .btn:hover {
               background-color: blue;
          }
     </style>
     <script>
          // Function to toggle the password visibility
          function togglePassword() {
               var passwordField = document.getElementById("password");
               var toggleIcon = document.getElementById("toggle-icon");

                // Check if password field is currently in password mode (hidden), then switch to text mode
               if (passwordField.type === "password") {
                     passwordField.type = "text";  // Show the password
                     toggleIcon.textContent = "Hide"; // Change the toggle text
               } else {
                     passwordField.type = "password";  // Hide the password
                     toggleIcon.textContent = "Show";  // Change the toggle text
               }
          }
     </script>
</head>
<body>
     <div class="nav">
          <div class="right-links">
               <a href="Account.php">Change Profile</a>
               <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
          </div>
     </div>
     <div class="container">
          <div class="box form-box">
               <?php 
                    if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                     $password = $_POST['password']; // Password field
                    
                     // Check if the password is provided
                    if (!empty($password)) {
                         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                         $password_query = ", Password='$hashed_password'";
                    } else {
                         $password_query = "";
                    }

                    $id = $_SESSION['id'];

                     // Correct SQL query to update username, email, and optionally password
                    $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email' $password_query WHERE Id=$id");

                     // Check if the query was successful
                    if($edit_query){
                         echo "<div class='message'>
                                   <p>Profile Updated!</p>
                              </div><br>";
                         echo "<a href='home.php'><button class='btn'>Go Home</button></a>";
                    } else {
                         echo "<div class='message'>
                                   <p>Error occurred while updating profile.</p>
                              </div>";
                    }
                    } else {
                    $id = $_SESSION['id'];
                     $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id");

                    while($result = mysqli_fetch_assoc($query)){
                         $res_Uname = $result['Username'];
                         $res_Email = $result['Email'];
                    }
               ?>
               <header>Change Profile</header>
               <form action="" method="post">
                    <div class="field input">
                         <label for="username">Username</label>
                         <input type="text" name="username" id="username" placeholder="Enter new username" autocomplete="off">
                    </div>

                    <div class="field input">
                         <label for="email">Email</label>
                         <input type="email" name="email" id="email" placeholder="Enter new email" autocomplete="off">
                    </div>

                    <!-- Password field added -->
                    <div class="field input">
                         <label for="password">Password</label>
                         <input type="password" name="password" id="password" placeholder="Enter new password" autocomplete="off">
                    </div>

                    <!-- Styled toggle visibility -->
                    <div class="toggle-container">
                         <input type="checkbox" onclick="togglePassword()"> 
                         <label>Show Password</label>
                    </div>

                    <div class="field">
                         <input type="submit" class="btn" name="submit" value="Update" required>
                    </div>
                    <a href="Account.php" class="btn">Return</a>
               </form>
          </div>
          <?php } ?>
     </div>
</body>
</html>
