<?php
$title = "Update Office Location";
ob_start();
require_once '../config/dbconnect.php';

$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM our_offices WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $location = $_POST['location'];

    $sql = "UPDATE our_offices SET name='$name', location='$location', address='$address' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    header("Location: office.php");
    exit();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h4> <strong><?php echo $title; ?> </strong> </h4>
            <a href="office.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>" placeholder="title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="location">Map Location</label>
                        <input type="input" class="form-control " id="location" name="location" value="<?php echo  $row['location'] ?>" placeholder="location">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="input" class="form-control " id="address" name="address" value="<?php echo  $row['address'] ?>" placeholder="address">
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