<?php
$title = "Update Blog";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$titleErr = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM blogs WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    $slug = trim($slug, '-') . random_int(11111, 99999);
    $short_description = $_POST['short_description'];
    $description = $_POST['description'];
    $blogCategoryId = $_POST['blog_category_id'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];


    if (empty($title)) {
        $_SESSION['errorMessage'] = "Title is required";
    }
    if (empty($blogCategoryId)) {
        $_SESSION['errorMessage'] = "Blog Category is required";
    }


    $imagePath = $row['image'];
    $path = $imagePath;

    if ($_FILES['image']['name'] != '') {
        // Handle image upload
        $file = $_FILES['image']['name'];
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $path = '../uploads/' . strtolower(str_replace(' ', '-', $title)) . '-' . random_int(10000, 99999) . '.' . $extension;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);

        // Delete existing image if present
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }
    if ($_SESSION['errorMessage'] == null) {
        // Update record in the database using prepared statement
        $sql = "UPDATE blogs SET blog_category_id=?, title=?, description=?, slug=?, short_description=?, image=?, alt_tag=?, alt_description=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isssssssi", $blogCategoryId, $title, $description, $slug, $short_description, $path, $alt_tag, $alt_description, $id);

        if ($stmt->execute()) {
            $_SESSION['successMessage'] = "Successfully updated record!";
        } else {
            $_SESSION['errorMessage'] = "Error updating record: " . $stmt->error;
        }
    } else {
        header("Location: blog-edit.php?id=".$row['id']);
        exit;
    }
    // Redirect to the list page after updating
    header("Location: blogs.php");
    exit();
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

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="blog_category_id">Blog Category</label>
                        <select name="blog_category_id" id="blog_category_id" class="form-control" >
                            <option value="">Select Category</option>
                            <?php while ($value = $categories->fetch_assoc()) { ?>
                                <option value="<?php echo $value['id']; ?>" <?php echo $value['id'] == $row['blog_category_id'] ? 'selected' : ''; ?>>
                                    <?php echo $value['name']; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" placeholder="Title">
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" placeholder="Short Description" class="form-control" id="shortDescription" cols="30" rows="10"><?php echo $row['short_description']; ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control" id="summernote" cols="30" rows="10"><?php echo $row['description']; ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group" style="height:200px; width:200px; object-fit:cover">
                        <label for="image">Existing Image</label>
                        <img class="w-100 h-100" src="<?php echo $row['image']; ?>" alt="">
                    </div>
                </div>


                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $row['alt_tag'] ?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="imageDes">Alt Description</label>
                        <textarea id="imageDes" name="alt_description" placeholder="Description" class="form-control" cols="30" rows="10"><?php echo $row['alt_description'] ?></textarea>
                    </div>
                </div>

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