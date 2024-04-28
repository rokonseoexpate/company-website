<?php 
session_start();
$file_path = '../config/dbconnect.php';
require_once($file_path);

if (file_exists($file_path)) {
    require_once($file_path);
} else {
    echo "Error: The file '$file_path' does not exist.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sanitized_username =  mysqli_real_escape_string($conn, $username); 
    $sanitized_password =  mysqli_real_escape_string($conn, $password); 
        
    $sql = "SELECT * FROM users WHERE username = '"
        . $sanitized_username . "' AND password = '"
        . md5($sanitized_password) . "'"; 
        
    $result = mysqli_query($conn, $sql) 
        or die(mysqli_error($conn)); 
        
    $num = mysqli_fetch_array($result); 

        
    if($num > 0) { 
        $_SESSION['username'] = $username;
        header('Location: dashboard');
    } 
    else { 
        $_SESSION['login_error'] = "Invalid username or password";
        header('Location: login');
        exit();
    } 
}

?> 
