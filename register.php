<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="POST" action="register.php">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>

    <?php
    include "db.php"; 

    if (isset($_POST['register'])) {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $username = strtolower($username);
        if (strlen($username) < 5) {
            die("<b>Error:</b> Username must be at least 5 characters long.");
        }
        $safe_username = htmlspecialchars($username);
        $safe_email = addslashes($email);
        $display_name = ucwords($safe_username);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$safe_username', '$safe_email', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<p>Registration Successful for: " . $display_name . "</p>";
        } else {
            print "<p>Error: Could not save to database.</p>";
        }
    }
    ?>
</body>
</html>
