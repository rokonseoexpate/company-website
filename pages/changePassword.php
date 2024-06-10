<?php
$title = "Change Password";
ob_start();
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
                $_SESSION['successMessage']  = "Password Changed Successfully";
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit();
            } else {
               $_SESSION['errorMessage'] = "Failed to update password";
                    header("Location: " . $_SERVER['PHP_SELF']);
                     exit();
            }
        } else {
           $_SESSION['errorMessage'] = "Invalid username or password";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    } else {
       $_SESSION['errorMessage'] = "Error: " . mysqli_error($conn);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

?>

<div class="content-wrapper" style="min-height: 485px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">

                        <div class="card-header">
                            <form action="" method="POST" class="mx-auto mt-2 mb-2">
                                <div class="form-group">

                                    <label for="opwd">Old Password : </label>
                                    <input type="password" name="opwd" class="form-control" id="opwd" required>
                                </div>
                                <div class="form-group">
                                    <label for="npwd">New Password :</label>
                                    <input type="password" name="npwd" class="form-control" id="npwd" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpwd">Confirm Password :</label>
                                    <input type="password" name="cpwd" class="form-control" id="cpwd" required>
                                </div>
                                <button type="submit" name="Submit" class="btn btn-primary">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
