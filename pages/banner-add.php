<?php
$title = "Add Banner";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$pageError = "";
$titleError = "";
if (isset($_POST['submit'])) {
    $page = $_POST['page'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = '';

    if (empty($title)) {
        $pageError = "Title is required";
    } else {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $file = $_FILES['image']['name'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $image = '../uploads/' . $title . '-' . rand(11111, 99999) . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }

        // Prepare and bind parameters for the query
        $query = "INSERT INTO banners (title, page, description, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $title, $page, $description, $image);

        
        // Execute the statement
        if ($stmt->execute()) {
            header("Location: banner.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5><strong><?php echo $title; ?></strong></h5>
            <a href="banner.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" id="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page">Page </label>
                        <select name="page" id="page" class="form-control" required>
                            <option value="certificate">Certificate</option>
                        </select>
                        <span class="text-danger"><?php echo $pageError; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        <span class="text-danger"><?php echo $titleError; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="summernote" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>
