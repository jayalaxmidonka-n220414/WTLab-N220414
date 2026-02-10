<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$conn = new mysqli("localhost", "root", "", "cyberdb");
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (strcmp($password, $user['password']) !== 0) {
            echo "❌ Error: Passwords do not match."; 
            exit();
        } else {
            echo "✅ LOGIN SUCCESS. WELCOME " . strtoupper($user['username']);
        }
    } else {
        print "❌ Error: Email not found.";
    }
}
?>
