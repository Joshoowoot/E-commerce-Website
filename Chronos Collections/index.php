<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
    <script>
        // Client-side validation (JavaScript)
        function validateForm() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            // Validate email format
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }

            // Validate password (at least 6 characters)
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
              include("php/config.php");

              // Server-side validation
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                // Ensure email and password are not empty
                if (empty($email) || empty($password)) {
                    echo "<div class='message'>
                          <p>Email and Password cannot be empty.</p>
                          </div>";
                } else {
                    // Validate email format on server-side as well
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<div class='message'>
                              <p>Invalid email format.</p>
                              </div>";
                    } else {
                        // Query to check if the user exists
                        $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                        $row = mysqli_fetch_assoc($result);

                        if (is_array($row) && !empty($row)) {
                            $_SESSION['valid'] = $row['Email'];
                            $_SESSION['username'] = $row['Username'];
                            $_SESSION['id'] = $row['Id'];
                            header("Location: Homepage.php");
                        } else {
                            echo "<div class='message'>
                                  <p>Wrong Username or Password</p>
                                  </div>";
                            echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                        }
                    }
                }
              } else {
            ?>
            <header>Login</header>
            <form action="" method="post" onsubmit="return validateForm()">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
