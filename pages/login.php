<?php
session_start();

// Redirect to dashboard if user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h2 class="mb-3">Login</h2>
            <?php
                // Check if there's an error message in the session
                if (isset($_SESSION['login_error'])) {
                    echo '<p style="color: red;">' . $_SESSION['login_error'] . '</p>';
                    unset($_SESSION['login_error']); // Clear the error message
                }
            ?>
            <form action="post_login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JTOsrmF5C1CotvhYTbmspLluVrDv+t5SLjx2O/nJw0Z4PR3mv+6Dm12W1F54IWbG" crossorigin="anonymous"></script>
</body>
</html>
