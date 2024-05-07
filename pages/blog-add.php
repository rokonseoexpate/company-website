<?php
$title = "Add Blog";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$titleErr = "";
$description = "";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    $slug = trim($slug, '-') . random_int(11111, 99999);

    $blog_category_id = $_POST['blog_category_id'];
    // $type = $_POST['type'];
    $short = $_POST['short'];
    $description = $_POST['description'];

    $image = '';

    if (empty($title)) {
        $titleErr = "Title is required";
    } else {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $file = $_FILES['image']['name'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $image = '../uploads/' . $slug . '-' . rand(11111, 99999) . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }

        // Prepare and bind parameters for the query
        $query = "INSERT INTO blogs (title, slug, blog_category_id, short_description, description, image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssisss", $title, $slug, $blog_category_id, $short, $description, $image);
        
        // Execute the statement
        if ($stmt->execute()) {
            header("Location: blogs.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}


// Fetch blog categories
$blogCategoryQuery = "SELECT * FROM blog_categories";
$categories = $conn->query($blogCategoryQuery);

$conn->close();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5><strong><?php echo $title; ?></strong></h5>
            <a href="blogs.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" id="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="blog_category_id">Blog Category</label>
                        <select name="blog_category_id" id="blog_category_id" class="form-control" required>
                            <option value="">Select Category</option>
                            <?php while ($row = $categories->fetch_assoc()) { ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        <span class="text-danger"><?php echo $titleErr; ?></span>
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
                        <label for="short">Short Description</label>
                        <textarea name="short" class="form-control" id="shortDescription" cols="30" rows="5" placeholder="Short Description"></textarea>
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
