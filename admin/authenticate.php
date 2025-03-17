?php
// authenticate.php
session_start();


$valid_username = "admin";
$valid_password = "admin"; // i know, will add hashing later

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        
        // Redirect
        header("Location: /admin/dashboard.php"); // does not excist yet, soon...
        exit;
    } else {
        // Invalid login
        header("Location: /admin/login.html?error=invalid");
        exit;
    }
}
?>