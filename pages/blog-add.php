<?php
$title = "Add Blog";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$titleErr = ""; // Changed $nameErr to $titleErr

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    $slug = trim($slug, '-') . random_int(11111, 99999);
    $short_description = $_POST['short_description'];
    $description = $_POST['short_description'];
    $image;

    if (empty($title)) {
        $titleErr = "Title is required"; // Changed $nameErr to $titleErr
    } else {
        if ($_FILES['image']) {
            $file = $_FILES['image']['name'];
            $extension =  pathinfo($file, PATHINFO_EXTENSION);
            $image = '../uploads/' .  $slug  . '-' . rand(11111, 99999) . $extension;

            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }

        $query = "INSERT INTO `blogs`(`title`, `slug`, `short_description`, `description`, `image`) VALUES('$title', '$slug', '$short_description' , '$description', '$image')";

        $result = $conn->query($query);

        if ($result === TRUE) {
            $referrer = $_SERVER['HTTP_REFERER'];
            header("Location: blogs.php");
            exit;
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }

    $conn->close();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h5> <strong> <?php echo $title; ?></strong></h5>
            <a href="blogs.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" id="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="title">
                        <span id="titleErr" class="text-danger"></span>
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
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" placeholder="Short Description" class="form-control" id="shortDescription" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <button type="button" class="btn btn-primary my-3" onclick="validateForm()" name="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        var title = document.getElementById("title").value;
        if (title.trim() == "") {
            document.getElementById("titleErr").innerText = "Title is required";
        } else {
            document.getElementById("submitForm").submit();
        }
    }
</script>

<?php
$content = ob_get_clean();

include '../layouts/master.php';  ?>
