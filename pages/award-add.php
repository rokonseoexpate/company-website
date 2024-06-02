<?php
$title = "Add Award";
ob_start();
session_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];

    $image;

    if (empty($title)) {
        $errorMessage = "Title field is required.";
    } else {
        if ($_FILES['image']) {
            $file = $_FILES['image']['name'];
            $extension =  pathinfo($file, PATHINFO_EXTENSION);
            $image = '../uploads/' . strtolower(str_replace(' ', '-', $title)) . '-' . rand(11111, 99999) .'.' . $extension;

            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }
    }

    if (empty($errorMessage)) {
        $query = "INSERT INTO `awards`(`title`, `description`, `image`,`alt_tag`, `alt_description`) VALUES ('$title', '$description', '$image', '$alt_tag', '$alt_description')";
        $result = $conn->query($query);

        if ($result === TRUE) {
            $_SESSION['successMessage'] = "Record Created successfully!";

        } else {
            $_SESSION['errorMessage'] =  "Error: " . $query . "<br>" . $conn->error;
        }
    }
    header("Location: award.php");
    exit();


}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong> <?php echo $title; ?></strong></h5>
            <a href="award.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="summernote" cols="30" rows="10"></textarea>
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
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control"  cols="30" rows="10"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';  ?>