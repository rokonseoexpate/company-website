<?php
$title = "Add Trusted By";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $orderBy = $_POST['orderBy'];
    $errorMessage = '';
    if (empty($name) ) {
        $errorMessage = "Name is required!";
    } else if (empty($orderBy)) {
        $errorMessage = "priority  is required!";
    } else {
        $image = '';

        if (isset($_FILES['image'])) {
            $photo = $_FILES['image']['name'];
            $extension = pathinfo($photo, PATHINFO_EXTENSION);
            $image = '../uploads/' . strtolower(str_replace(' ', '-', $name)) . '-' . random_int(10000, 99999) . '.' . $extension;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                $sql = "INSERT INTO `trusted_bies`(`name`, `orderBy`,`image`) VALUES ('$name','$orderBy','$image')";
                $result = $conn->query($sql);

                if ($result === TRUE) {
                    header("Location: trusted.php");
                    exit;
                } else {
                    $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $errorMessage = "Failed to upload image!";
            }
        } else {
            $errorMessage = "Please select an image!";
        }
    }
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="trusted.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form id="submitFrom" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <div id="nameError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="orderBy">Priority</label>
                        <input type="text" class="form-control" id="orderBy" name="orderBy" placeholder="Priority">
                        <div id="orderByError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image">
                        <div id="imageError" class="error text-danger"></div>
                    </div>
                </div>

                <button type="submit" id="submit" class="btn btn-primary my-3">Submit</button>

            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            var name = $('#name').val().trim();
            var orderBy = $('#orderBy').val().trim();
            var image = $('#image').val().trim();

            var isValid = true;

            // Client-side validation
            if (name === '') {
                $('#nameError').html('Name is required!');
                isValid = false;
            } else {
                $('#nameError').html('');
            }

            if (orderBy === '') {
                $('#orderByError').html('Priority is required!');
                isValid = false;
            } else {
                $('#orderByError').html('');
            }

            if (image === '') {
                $('#imageError').html('Image is required!');
                isValid = false;
            } else {
                $('#imageError').html('');
            }

            if (isValid) {
                $('#submitFrom').submit();
            }
        });
    });
</script> -->