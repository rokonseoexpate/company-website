<?php
$title = "Add Product";
ob_start();
session_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$titleErr = "";
$description = "";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    $slug = trim($slug, '-') . random_int(11111, 99999);

    $short = $_POST['short_description'];
    $priority = $_POST['priority'];
    $link = $_POST['link'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];

    if (empty($title)) {
        $_SESSION['errorMessage'] = "Title is required";
    }
    if (empty($priority)) {
        $_SESSION['errorMessage'] = "Priority is required";
    }
    if (empty($status)) {
        $_SESSION['errorMessage'] = "Status is required";
    }

    if (!isset($_SESSION['errorMessage'])) {
        $image = null;
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $file = $_FILES['image']['name'];
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $image = '../uploads/' . $slug . '-' . rand(11111, 99999) . '.' . $extension;
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        }

        // Adjusted bind_param to include the image field
        $stmt = $conn->prepare("INSERT INTO products (title, slug, status, priority, short_description, description, image, alt_tag, alt_description, link) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Check if $stmt preparation is successful
        if ($stmt === false) {
            $_SESSION['errorMessage'] = "Error preparing statement: " . $conn->error;
        } else {
            $stmt->bind_param("ssisssssss", $title, $slug, $status, $priority, $short, $description, $image, $alt_tag, $alt_description, $link);

            if ($stmt->execute()) {
                $_SESSION['successMessage'] = "Product Created Successfully";
            } else {
                $_SESSION['errorMessage'] = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        header("Location: product-add.php");
        exit;
    }
    header("Location: products.php");
    exit;
}

$conn->close();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center py-2">
            <h5><strong><?php echo $title; ?></strong></h5>
            <a href="products.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" id="submitForm">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="link">Demo Link <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="link" required>
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="priority">Priority <span class="text-danger">*</span></label>
                        <input type="number" min="0" class="form-control" id="priority" name="priority" placeholder="Priority" required>
                        <span class="text-danger"><?php echo $titleErr; ?></span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" class="form-control" id="short_description" cols="30" rows="5" placeholder="Short Description"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="summernote" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_tag">Alt Text</label>
                        <input type="text" class="form-control" id="alt_tag" name="alt_tag" placeholder="Alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_description">Alt Description</label>
                        <textarea id="alt_description" name="alt_description" placeholder="Alt Description" class="form-control" cols="30" rows="10"></textarea>
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