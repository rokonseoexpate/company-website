<?php
session_start();
$file_path = '../config/dbconnect.php';


if (file_exists($file_path)) {
    require_once($file_path);
} else {
    echo "Error: The file '$file_path' does not exist.";
}

$db = new DB_con();
$conn = $db->get_connection();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize input and hash passwords
    $oldpass = mysqli_real_escape_string($conn, $_POST['opwd']);
    $newpassword = mysqli_real_escape_string($conn, $_POST['npwd']);
    $username = $_SESSION['username'];

    $sanitized_username =  mysqli_real_escape_string($conn, $username);
    $sanitized_password =  mysqli_real_escape_string($conn, $oldpass);

    $sql = "SELECT * FROM users WHERE username = '"
        . $sanitized_username . "' AND password = '"
        . md5($sanitized_password) . "'";

    $result = mysqli_query($conn, $sql)
    or die(mysqli_error($conn));

    $num = mysqli_fetch_array($result);


    // Check if the query was successful
    if ($result) {

        if ($num > 0) {
            // Update the user's password
            $update_sql = "UPDATE users SET password = '" . md5($newpassword) . "' WHERE username = '$username'";
            $update_result = mysqli_query($conn, $update_sql);

            if ($update_result) {
                $_SESSION['msg1'] = "Password Changed Successfully";
                header('Location: changePassword.php');
                exit();
            } else {
                $_SESSION['msg1'] = "Failed to update password";
                header('Location: changePassword.php');
                exit();
            }
        } else {
            $_SESSION['msg1'] = "Invalid username or password";
            header('Location: changePassword.php');
            exit();
        }
    } else {
        $_SESSION['msg1'] = "Error: " . mysqli_error($conn);
        header('Location: changePassword.php');
        exit();
    }
}

?>