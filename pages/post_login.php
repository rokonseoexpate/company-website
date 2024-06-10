<?php

session_start();

// Path to the file
$file_path = '../config/dbconnect.php';

// Check if the file exists
if (file_exists($file_path)) {
    require_once($file_path);
} else {
    echo "Error: The file '$file_path' does not exist.";
}

$db = new DB_con();
// Get database connection
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $sanitized_username = mysqli_real_escape_string($conn, $username);
    $sanitized_password = mysqli_real_escape_string($conn, $password);

    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE username = '"
        . $sanitized_username . "' AND password = '"
        . md5($sanitized_password) . "'";

    // Execute the query
    $result = mysqli_query($conn, $sql)
    or die(mysqli_error($conn));

    // Check if user exists
    $num = mysqli_num_rows($result);

    if($num > 0) {
        // User exists, set session and redirect to dashboard
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit();
    } else {
        // User does not exist, set error message and redirect to login page
        $_SESSION['login_error'] = "Invalid username or password";
        header('Location: login.php');
        exit();
    }
}

?> 
