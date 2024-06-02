<?php
$title = "Update Certificates";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM trusted_bies WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $imagePath = $row['image'];
    $imageName = basename($imagePath);
    $newImagePath = '../uploads/' . $imageName;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $orderBy = $_POST['orderBy'];
    $alt_tag = $_POST['alt_tag'];
    $alt_description = $_POST['alt_description'];


    if (empty($name)) {
        $_SESSION['errorMessage'] = 'Name field is required';
    } elseif (empty($orderBy)) {
        $_SESSION['errorMessage'] = 'OrderBy field is required';
    } else {
        if ($_FILES['image']['name'] != '') {
            $id = $_GET['id'];
            $sql = "SELECT * FROM trusted_bies WHERE id=$id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            $imagePath = $row['image'];
            $imageName = basename($imagePath);
            $newImagePath = '../uploads/' . $imageName;

            // Remove old image file
            if (file_exists($newImagePath)) {
                unlink($newImagePath);
            }


            $photo = $_FILES['image']['name'];
            $extension = pathinfo($photo, PATHINFO_EXTENSION);
            $path = '../uploads/' . str_replace(' ', '-', strtolower($name)) . '-' . random_int(10000, 99999) . '.' . $extension;

            move_uploaded_file($_FILES['image']['tmp_name'], $path);
        } else {
            $path = $imagePath;
        }
    }

    if (empty($_SESSION['errorMessage'])) {
        // Update record in the database
        $sql = "UPDATE trusted_bies SET name='$name', orderBy='$orderBy' ,image='$path' , alt_tag='$alt_tag', alt_description='$alt_description' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['successMessage'] = "Record updated successfully";
        } else {
            $_SESSION['errorMessage'] = "Error updating record: " . $conn->error;
        }
    }
    header("Location: trusted.php");
    exit();
}
?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="trusted.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required value="<?php echo $row['name'] ?>" placeholder="name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="orderBy">Priority <span class="text-danger">*</span></label>
                        <input type="number" min="1" class="form-control" required id="orderBy" name="orderBy" value="<?php echo $row['orderBy'] ?>" placeholder="Priority">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Exiting Image</label>
                        <img class="w-25" src="<?php echo $newImagePath ?>" alt="">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" value="<?php echo $row['alt_tag']?>" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control"  cols="30" rows="10"><?php echo $row['alt_description']?></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3" name="submit">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>