<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
    <script>
        // Client-side form validation
        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (username == "") {
                alert("Username is required.");
                return false;
            }
            if (email == "") {
                alert("Email is required.");
                return false;
            }
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }
            if (password == "") {
                alert("Password is required.");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters.");
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

        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Server-side validation
            if (empty($username) || empty($email) || empty($password)) {
                echo "<div class='message'>
                          <p>All fields are required!</p>
                      </div>";
            } else {
                // Verifying the unique email
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                              <p>This email is already used. Please try another one.</p>
                          </div>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                } else {
                    // Inserting the new user into the database
                    mysqli_query($con, "INSERT INTO users(Username, Email, Password) VALUES('$username', '$email', '$password')") 
                        or die("Error occurred while registering.");
                    echo "<div class='message'>
                              <p>Registration successful!</p>
                          </div>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
                }
            }
        } else {
        ?>

            <header>Sign Up</header>
            <form action="" method="post" onsubmit="return validateForm()">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
