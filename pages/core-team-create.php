<?php
$title = "Add Core Team";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$orderBy = isset($_POST['orderBy']) ? $_POST['orderBy'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$designation = isset($_POST['designation']) ? $_POST['designation'] : '';
$website = isset($_POST['website']) ? $_POST['website'] : '';
$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : '';
$linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : '';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $orderBy = $_POST['orderBy'];
    $type = $_POST['type'];
    $designation = $_POST['designation'];
    $website = $_POST['website'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];

    $errorMessage = '';

    if (empty($name)) {
        $errorMessage = "Name is required!";
    } elseif (empty($orderBy)) {
        $errorMessage = "Priority is required!";
    } elseif (empty($type)) {
        $errorMessage = "Type is required!";
    } elseif (empty($designation)) {
        $errorMessage = "Designation is required!";
    } else {
        $image = '';

        if (isset($_FILES['image'])) {
            $photo = $_FILES['image']['name'];
            $extension = pathinfo($photo, PATHINFO_EXTENSION);
            $image = '../uploads/' . strtolower(str_replace(' ', '-', $name)) . '-' . random_int(10000, 99999) . '.' . $extension;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                $sql = "INSERT INTO `teams`(`name`, `order_by`,`type`, `designation`, `website`, `facebook`, `linkedin`, `image`, `alt_tag`,`alt_description`) VALUES ('$name','$orderBy','$type','$designation','$website','$facebook','$linkedin','$image', '$alt_tag', '$alt_description')";
                
                $result = $conn->query($sql);

                if ($result === TRUE) {
                    header("Location: core-team.php");
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
            <a href="core-team.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form id="submitFrom" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($name); ?>">
                        <div id="nameError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="orderBy">Priority <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="orderBy" name="orderBy" placeholder="Priority" value="<?php echo htmlspecialchars($orderBy); ?>">
                        <div id="orderByError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Type <span class="text-danger">*</span></label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select Type</option>
                            <option value="core_team" <?php if ($type == 'core_team') echo 'selected'; ?>>Core Team</option>
                            <option value="advisor" <?php if ($type == 'advisor') echo 'selected'; ?>>Advisor</option>
                        </select>
                        <div id="typeError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="designation">Designation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo htmlspecialchars($designation); ?>">
                        <div id="designationError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="website">Website Link</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Website Link" value="<?php echo htmlspecialchars($website); ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="facebook">Facebook Link</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Link" value="<?php echo htmlspecialchars($facebook); ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="linkedin">Linkedin Link</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin Link" value="<?php echo htmlspecialchars($linkedin); ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image">
                        <div id="imageError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alt_text">Alt Text</label>
                        <input type="text" class="form-control" id="alt_text" name="alt_tag" placeholder="alt Text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Alt Description</label>
                        <textarea id="shortDescription" name="alt_description" placeholder="Description" class="form-control"  cols="30" rows="10"></textarea>
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
