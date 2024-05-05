<?php
$title = "Add Office Location";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $address = $_POST['address'];

    if (empty($name)) {
        echo "<script>alert('Name field is required');</script>";
        echo "<script>window.location.href='office-add.php';</script>";
        exit;
    }

    if (empty($address)) {
        echo "<script>alert('Address field is required');</script>";
        echo "<script>window.location.href='office-add.php';</script>";
        exit;
    }

    $query = "INSERT INTO `our_offices`(`name`, `location`, `address`) VALUES ('$name', '$location', '$address')";
    $result = $conn->query($query);

    if ($result === TRUE) {
        header("Location: office.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="office.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="location">Map Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="location">
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