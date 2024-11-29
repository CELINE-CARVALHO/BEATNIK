<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];  // Assuming 'signupName' is coming from the form field
    $password = $_POST['password'];  // Assuming 'signupPassword' is coming from the form field

    // Database connection
    $con = new mysqli("localhost", "root", "the8@21052005", "beatnik");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO signup_beatnik_data (username, password_hash) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $username, $password_hash);

    // Execute and check if insertion was successful
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatNik - Login</title>
    <link rel="stylesheet" href="LOGIN_BEATNIK.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kMVqzEfjU2g4Wou+T7Dj6GWVxY9nV1UJhw4ULKp00jtCSdE7V0z1ueSvKmxTaf9eMVN9SNqIEgHVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Background Video -->
    <div class="video-container">
        <video autoplay muted loop id="bgVideo">
            <source src="assects/background beatnik.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <!-- Login Overlay -->
    <div class="overlay">
        <div class="login-container">
            <div class="login-form">
                <h2>Welcome Back!</h2>
                <p>Login to access your music library</p>
                <form id="loginForm">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Username" required aria-required="true" aria-label="Username">
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required aria-required="true" aria-label="Password">
                    </div>
                    <button type="submit" class="login-btn"><i class="fas fa-sign-in-alt"></i> Login</button>
                    <p id="login-error" class="error-message hidden">Invalid username or password.</p>
                </form>
                <p class="signup-link">Don't have an account? <a href="SIGNUP_BEATNIK.php">Sign Up</a></p>
            </div>
        </div>
    </div>

    <!-- JavaScript File -->
    <script src="LOGIN_BEATNIK.js"></script>
</body>
</html>
