<?php
//
//session_start(); // Start a session for managing user authentication
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (isset($_POST["action"])) {
//        if ($_POST["action"] == "login") {
//            // Handle login logic
//            $username = $_POST["username"];
//            $password = $_POST["password"];
//
//            // Connect to the database
//            $conn = new mysqli("localhost", "chanda", "Chanda@187.", "ict461");
//
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            }
//
//            $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ?");
//            $stmt->bind_param("s", $username);
//            $stmt->execute();
//
//            $result = $stmt->get_result();
//            $user = $result->fetch_assoc();
//
//            if ($user && password_verify($password, $user["Password"])) {
//
//                // Authentication successful, set session variables
//                $_SESSION["username"] = $user["Username"];
//                $_SESSION["role"] = $user["role"];
//
//                // Redirect to index.html
//                header("Location: ../index.php");
//                exit();
//            } else {
//                echo "Invalid username or password. Please try again.";
//            }
//
//            $stmt->close();
//            $conn->close();
//        }
//        elseif ($_POST["action"] == "register") {
//            // Handle registration logic
//            $username = $_POST["username"];
//            $fullName = $_POST["fullname"];
//            $contactNumber = $_POST["contact"];
//            $email = $_POST["email"];
//            $password = $_POST["password"];
//
//            // Validate and sanitize input here (e.g., check for empty fields, validate email format, etc.)
//
//
//            // Connect to the database
//            $conn = new mysqli("localhost", "chanda", "Chanda@187.", "ict461");
//
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            }
//
//            $stmt = $conn->prepare("INSERT INTO users (Username, FullName, ContactNumber, Email, Password) VALUES (?, ?, ?, ?, ?)");
//            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//            $stmt->bind_param("sssss", $username, $fullName, $contactNumber, $email, $hashedPassword);
//
//            if ($stmt->execute()) {
//                echo "New record created successfully";
//            } else {
//                echo "Error: " . $stmt->error;
//            }
//
//            $stmt->close();
//            $conn->close();
//        }
//    }
//}
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8" />-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" >-->
<!--  <link rel="stylesheet" href="../css/app.css">-->
<!--  <link rel="stylesheet" href="../css/style.css"/>-->
<!--  <link rel="stylesheet" href="../css/media.css">-->
<!--  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>-->
<!--  <title>Sign in & Sign up Form</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--  <section id="header">-->
<!--    <a href="#" onclick="window.location.href='index.html';"><img src="../img/logo.png" height="70" width="70" class="logo" alt=""></a>-->
<!--  </section>-->
<!---->
<!--  <div class="container">-->
<!--    <div class="forms-container">-->
<!--      <div class="signin-signup">-->
<!---->
<!--        <form action="" method="post" class="sign-in-form">-->
<!--          <input type="hidden" name="action" value="login"> <!-- Added hidden field for login -->-->
<!--          <h2 class="title">Sign in</h2>-->
<!--          <div class="input-field">-->
<!--            <i class="fas fa-user"></i>-->
<!--              <label>-->
<!--                  <input type="text" name="username" placeholder="Username" required/>-->
<!--              </label>-->
<!--          </div>-->
<!---->
<!--            <div class="input-field">-->
<!--            <i class="fas fa-lock"></i>-->
<!--              <label>-->
<!--                  <input type="password" name="password" placeholder="Password" required/>-->
<!--              </label>-->
<!--          </div>-->
<!---->
<!--          <button type="submit" class="btn solid">Login</button>-->
<!---->
<!--          <p class="social-text">Or Sign in with social platforms</p>-->
<!---->
<!--            <div class="social-media">-->
<!--            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-google"></i></a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>-->
<!--            </div>-->
<!--        </form>-->
<!---->
<!---->
<!--        <form action="" method="post" class="sign-up-form">-->
<!--          <input type="hidden" name="action" value="register"> <!-- Added hidden field for registration -->-->
<!--          <h2 class="title">Sign up</h2>-->
<!--<!--          <div class="select">-->-->
<!--<!--              <label for="select"></label><select id="select" name="Account-type" required>-->-->
<!--<!--              <option id="style1" value="" disabled selected hidden>Select Account Type</option>-->-->
<!--<!--              <option> Customer</option>-->-->
<!--<!--              <option> Supplier</option>-->-->
<!--<!--            </select>-->-->
<!--<!--          </div>-->-->
<!---->
<!--          <div class="input-field">-->
<!--            <i class="fas fa-user"></i>-->
<!--              <label><input type="text" name="username" placeholder="User Name" required /></label>-->
<!--          </div>-->
<!--          <div class="input-field">-->
<!--            <i class="fas fa-user"></i>-->
<!--              <label><input type="text" name="fullname" placeholder="Full Name" required/></label>-->
<!--          </div>-->
<!--          <div class="input-field">-->
<!--            <i class="fas fa-envelope"></i>-->
<!--              <label><input type="text" name="email" placeholder="Email" required/></label>-->
<!--          </div>-->
<!--             <div class="input-field">-->
<!--            <i class="fas fa-envelope"></i>-->
<!--              <label><input type="tel" name="contact" placeholder="Contact" required/></label>-->
<!--          </div>-->
<!--          <div class="input-field">-->
<!--            <i class="fas fa-lock"></i>-->
<!--              <label><input type="password" name="password" placeholder="Password" required/></label>-->
<!--          </div>-->
<!---->
<!--          <button type="submit" class="btn">Sign up</button>-->
<!---->
<!--          <p class="social-text">Or Sign up with social platforms</p>-->
<!---->
<!--          <div class="social-media"><a href="#" class="social-icon">-->
<!--              <i class="fab fa-facebook-f"></i>-->
<!--            </a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-google"></i></a>-->
<!--            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>-->
<!--          </div>-->
<!--        </form>-->
<!---->
<!--      </div>-->
<!--    </div>-->
<!---->
<!--    <div class="panels-container">-->
<!--      <div class="panel left-panel">-->
<!---->
<!--          <div class="content">-->
<!--          <h3>New here?</h3>-->
<!--          <p>Enter your details and start your journey with us</p>-->
<!---->
<!--              <button class="btn transparent" id="sign-up-btn">Sign up</button>-->
<!--          </div>-->
<!---->
<!--        <img src="../img/logo.png" class="image" alt="" />-->
<!--      </div>-->
<!--      <div class="panel right-panel"><div class="content">-->
<!--                <h3>One of us?</h3>-->
<!--          <p>To keep connected with us, please log in with your personal info</p>-->
<!--          <button class="btn transparent" id="sign-in-btn">-->
<!--            Sign in-->
<!--          </button>-->
<!--        </div>-->
<!--<!--        <img src="../img/register.svg" class="image" alt="" />-->-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!---->
<!--  <script src="../js/style.js"></script>-->
<!--  <script src="../js/app.js"></script>-->
<!--</body>-->
<!--</html>-->
