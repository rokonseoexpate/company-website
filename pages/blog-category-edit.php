<?php
$title = "Update Blog";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blog_categories WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {

    $titleErr = "";
    $name = $_POST['name'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($name)));
    $slug = trim($slug, '-') . random_int(11111, 99999);

    if (empty($name)) {
        $titleErr = "Title is required";
    } else {
        // Update record in the database
        $sql = "UPDATE blog_categories SET name='$name', slug='$slug' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            $successMessage = "Successfully updated record!";
            // Redirect to the list page after updating
            header("Location: blog-category.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong> <?php echo $title; ?></strong> </h5>
            <a href="blog-category.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="title" name="name" value="<?php echo $row['name'] ?>" placeholder="title">
                        <span id="titleErr" class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <?php if (!empty($successMessage)) { ?>
                    <div class="col-lg-12 mt-3">
                        <div class="alert alert-success" role="alert">
                            <?php echo $successMessage; ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-lg-12 mt-3">
                    <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>