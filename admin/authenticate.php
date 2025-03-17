?php
// authenticate.php
session_start();

// In a real application, you would validate against a database
// This is just a simple example
$valid_username = "admin";
$valid_password = "securepassword123"; // In production, use password_hash and password_verify

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        
        // Redirect to dashboard
        header("Location: /admin/dashboard.php");
        exit;
    } else {
        // Invalid login
        header("Location: /admin/login.html?error=invalid");
        exit;
    }
}
?>