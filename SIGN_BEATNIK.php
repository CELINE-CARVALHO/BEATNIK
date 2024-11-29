<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    // Database connection
    $con = new mysqli("localhost", "root", "the8@21052005", "beatnik");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Prepare SQL statement
    $sql = "INSERT INTO signup_beatnik_data (username, password_hash) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing SQL statement: " . $con->error);
        echo "An error occurred. Please try again.";
        exit;
    }

    $stmt->bind_param("ss", $username, $password_hash);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        error_log("Error executing SQL statement: " . $stmt->error);
        echo "An error occurred. Please try again.";
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>



// Close connections
$sql->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeatNik - Sign Up</title>
    <link rel="stylesheet" href="SIGNUP_BEATNIK.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kMVqzEfjU2g4Wou+T7Dj6GWVxY9nV1UJhw4ULKp00jtCSdE7V0z1ueSvKmxTaf9eMVN9SNqIEgHVA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Background Video -->
    <div class="video-container">
        <video autoplay muted loop id="bgVideo">
            <source src="assets/background_beatnik.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <!-- Sign Up Overlay -->
    <div class="overlay">
        <div class="signup-container">
            <h2>Join BeatNik</h2>
            <p>Create an account to access unlimited music</p>
            <form id="signupForm">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="new-username" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="new-password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="signup-btn"><i class="fas fa-user-plus"></i> Sign Up</button>
                <p id="signup-error" class="error-message hidden">An error occurred. Please try again.</p>
                <p id="signup-success" class="success-message hidden">Account created successfully!</p>
            </form>
            <p class="login-link">Already have an account? <a href="LOGIN_BEATNIK.php">Login</a></p>
        </div>
    </div>

    <script src="SIGNUP_BEATNIK.js"></script>
</body>
</html>
