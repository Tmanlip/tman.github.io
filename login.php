<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.html">
                UTM TrackParc
            </a>
        </div>
        <div class="navbar-nav">
            <a href="track-options.html">Services</a>
        </div>
    </div>

    <div class="container">
        <div class="overlay">
            <div class="header">Login to Your Account</div>
            <div class="login-content">
                <?php
                // Check if form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];

                    // Verify against hardcoded credentials (replace with database check)
                    if ($user === 'tengku' && $pass === 'Tengku') {
                        echo "Login successful!";
                        session_start();
                        $_SESSION['username'] = $user;
                        header("Location: StaffChoose.html");
                        exit();
                    } else {
                        echo "Invalid username or password.";
                    }
                }
                ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"; width = "100%"; height = "100%">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>Customer Service: +60 11-1868 7083 | Email: onestoputm@gmail.com</p>
        <p>&copy; 2024 Parcel Management Center. All rights reserved.</p>
    </footer>
    
    <script>
        function logout() {
            alert('Logging out...');
        }
    </script>
</body>
</html>
