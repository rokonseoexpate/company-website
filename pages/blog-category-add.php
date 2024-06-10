<?php
$title = "Add Blog Category";
ob_start();
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($name)));
    $slug = trim($slug, '-') . '-' . random_int(11111, 99999); // Corrected the concatenation here

    if (empty($name)) {
        $_SESSION['errorMessage'] = "Name is required"; // Corrected the field name here
    }

    if ($_SESSION['errorMessage'] == null) {
        $query = "INSERT INTO `blog_categories`(`name`, `slug`) VALUES('$name', '$slug')";
        $result = $conn->query($query);

        if ($result === TRUE) {
            $_SESSION['successMessage'] = "Blog Category Successfully";
        } 

        header("Location: blog-category.php");
        exit;
    } else {
        header("Location: blog-category-add.php");
        exit;
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5> <strong><?php echo $title; ?></strong></h5>
            <a href="blog-category.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" id="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="name">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button> <!-- changed type to 'submit' -->
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>