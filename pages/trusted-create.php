<?php
$title = "Add Trusted By";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    if (empty($name)) {
        $successMessage = "Successfully inserted record!";
        echo "<script>window.location.href='trusted-create.php';</script>";
        exit;
    }

    $image;
    if (isset($_FILES['image'])) {
        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $image = '../uploads/' . strtolower(str_replace(' ', '-', $name) )  . '-' . random_int(10000, 99999) . '.' . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    
    $sql = "INSERT INTO `trusted_bies`(`name`, `image`) VALUES ('$name','$image')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: trusted.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="trusted.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';  ?>