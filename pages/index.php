<?php
session_start();

// Redirect to dashboard if user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');

}else{
    header('Location: login.php');
}
?>