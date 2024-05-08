<?php
$title = "Add Award";
ob_start();


require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image;

    if (empty($title)) {
        echo "<script>alert('Name field is required');</script>";
        echo "<script>window.history.back();</script>"; // Go back to the previous page
        exit;
    }

    if ($_FILES['image']) {
        $file = $_FILES['image']['name'];
        $extension =  pathinfo($file, PATHINFO_EXTENSION);
        $image = '../uploads/' . strtolower(str_replace(' ', '-', $title)) . '-' . rand(11111, 99999) . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    $query = "INSERT INTO `awards`(`title`, `description`, `image`) VALUES ('$title', '$description', '$image')";
    $result = $conn->query($query);

    if ($result === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: award.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
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
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="title">
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

                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';  ?>