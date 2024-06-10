<?php
$title = "Add Trusted By";
session_start();
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $orderBy = $_POST['orderBy'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];

    if (empty($name) ) {
        $_SESSION['errorMessage'] = "Name is required!";
    } else if (empty($orderBy)) {
        $_SESSION['errorMessage'] = "priority  is required!";
    } else {

        if (isset($_FILES['image'])) {
            $photo = $_FILES['image']['name'];
            $extension = pathinfo($photo, PATHINFO_EXTENSION);
            $image = '../uploads/' . strtolower(str_replace(' ', '-', $name)) . '-' . random_int(10000, 99999) . '.' . $extension;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                $sql = "INSERT INTO `trusted_bies`(`name`, `orderBy`,`image`, `alt_tag`,`alt_description`) VALUES ('$name','$orderBy','$image', '$alt_tag', '$alt_description')";
                $result = $conn->query($sql);

                if ($result === TRUE) {
                    $_SESSION['successMessage'] = "Record Created successfully!";


                } else {
                    $_SESSION['errorMessage'] = "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $_SESSION['errorMessage'] = "Failed to upload image!";
            }
        } else {
            $_SESSION['errorMessage'] = "Please select an image!";
        }
        header("Location: trusted.php");
        exit;
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="trusted.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form id="submitFrom" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" placeholder="Name">
                        <div id="nameError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="orderBy">Priority <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="orderBy" required value="<?php echo isset($orderBy) ? htmlspecialchars($orderBy) : ''; ?>" name="orderBy" placeholder="Priority" min="1">
                        <div id="orderByError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image" required>
                        <div id="imageError" class="error text-danger"></div>
                    </div>
                </div>

                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="summernote" name="alt_description" placeholder="Description" class="form-control"  cols="30" rows="10"></textarea>
                    </div>
                </div>

                <button type="submit" id="submit" class="btn btn-primary my-3">Submit</button>

            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>
