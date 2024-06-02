<?php
$title = "History Page";
session_start();
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

// Fetch data from the database
$sql = "SELECT * FROM histories WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $title = $_POST['title'];
    $title_tagline = $_POST['title_tagline'];
    $title_tagline_after = $_POST['title_tagline_after'];
    $title_tagline_after_details = $_POST['title_tagline_after_details'];
    $hero_button_link = $_POST['hero_button_link'];
    $accelerating_title = $_POST['accelerating_title'];
    $accelerating_year = $_POST['accelerating_year'];
    $accelerating_details = $_POST['accelerating_details'];
    $accelerating_image_alt_text = $_POST['accelerating_image_alt_text'];
    $accelerating_image_alt_description = $_POST['accelerating_image_alt_description'];
    $accelerating_details = $_POST['accelerating_details'];
    $accelerating_button_link = $_POST['accelerating_button_link'];
    $journey_title = $_POST['journey_title'];
    $journey_title_tagline = $_POST['journey_title_tagline'];
    $journey_title_details = $_POST['journey_title_details'];
    $overview_success = $_POST['overview_success'];
    $overview_success_details = $_POST['overview_success_details'];
    $great_success = $_POST['great_success'];
    $great_success_details = $_POST['great_success_details'];
    $introduction_title = $_POST['introduction_title'];
    $introduction_title_tagline = $_POST['introduction_title_tagline'];
    $introduction_details = $_POST['introduction_details'];
    $introduction_year = $_POST['introduction_year'];
    $introduction_country = $_POST['introduction_country'];
    $introduction_projects = $_POST['introduction_projects'];
    $introduction_clients = $_POST['introduction_clients'];
    $customers_title = $_POST['customers_title'];
    $customers_details = $_POST['customers_details'];
    $highlighted_title = $_POST['highlighted_title'];
    $highlighted_details = $_POST['highlighted_details'];

    // Check if a new image is uploaded
    if ($_FILES["accelerating_image"]["size"] > 0) {
        // Sanitize and upload the new image file
        $image_name = $_FILES["accelerating_image"]["name"];
        $image_name = preg_replace("/[^\w\-\.]/", "-", $image_name);
        $image_name = preg_replace("/\s+/", "-", $image_name);
        $target_dir = "../uploads/";
        $target_file = $target_dir . $image_name;
        move_uploaded_file($_FILES["accelerating_image"]["tmp_name"], $target_file);
        $image_path = $target_file;
    } else {
        // If no new image uploaded, retain the existing image path
        $image_path = $row['accelerating_image'];
    }

    // SQL query to update the record
    $sql = "UPDATE histories SET 
                title='$title',
                title_tagline='$title_tagline',
                title_tagline_after='$title_tagline_after',
                title_tagline_after_details='$title_tagline_after_details',
                hero_button_link='$hero_button_link',
                accelerating_title='$accelerating_title',
                accelerating_year='$accelerating_year',
                accelerating_details='$accelerating_details',
                accelerating_image_alt_text='$accelerating_image_alt_text',
                accelerating_image_alt_description='$accelerating_image_alt_description',
                accelerating_image='$image_path',
                accelerating_button_link='$accelerating_button_link',
                journey_title='$journey_title',
                journey_title_tagline='$journey_title_tagline',
                journey_title_details='$journey_title_details',
                overview_success='$overview_success',
                overview_success_details='$overview_success_details',
                great_success='$great_success',
                great_success_details='$great_success_details',
                introduction_title='$introduction_title',
                introduction_title_tagline='$introduction_title_tagline',
                introduction_details='$introduction_details',
                introduction_year='$introduction_year',
                introduction_country='$introduction_country',
                introduction_projects='$introduction_projects',
                introduction_clients='$introduction_clients',
                customers_title='$customers_title',
                customers_details='$customers_details',
                highlighted_title='$highlighted_title',
                highlighted_details='$highlighted_details'
            WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the same page to reload it
        $_SESSION['successMessage'] = "Record Updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>


<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="card-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Hero Section</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="History" value="<?php echo $row['title']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title_tagline">Title Tagline</label>
                                    <input type="text" class="form-control" name="title_tagline" id="title_tagline" placeholder="Title Tagline" value="<?php echo $row['title_tagline']; ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title_tagline_after">Title Tagline after short heading</label>
                                    <input type="text" class="form-control" name="title_tagline_after" id="title_tagline_after" value="<?php echo $row['title_tagline_after']; ?>" placeholder="Title Tagline after short heading">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title_tagline_after_details">Hero Section Details</label>
                                    <textarea name="title_tagline_after_details" id="title_tagline_after_details" cols="30" rows="10" class="form-control" placeholder="Hero Section Details"><?php echo $row['title_tagline_after_details']; ?></textarea>
                                </div>
                                <div class="form-group  col-md-12">
                                    <label for="hero_button_link">Button Link</label>
                                    <input type="text" name="hero_button_link" class="form-control" id="hero_button_link" value="<?php echo $row['hero_button_link']; ?>" placeholder="Button Link">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Accelerating Innovation
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="accelerating_title">Title</label>
                                    <input type="text" name="accelerating_title" class="form-control" id="accelerating_title" placeholder="Accelerating Innovation" value="<?php echo $row['accelerating_title']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="accelerating_year">After Title</label>
                                    <input type="text" name="accelerating_year" class="form-control" id="accelerating_year" placeholder="Since 2013" value="<?php echo $row['accelerating_year']; ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="accelerating_details">Details</label>
                                    <textarea name="accelerating_details" id="accelerating_details" cols="30" rows="10" class="form-control" placeholder="Accelerating Innovation Details"><?php echo $row['accelerating_details']; ?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="accelerating_image">Image</label>
                                    <input type="file" name="accelerating_image" id="accelerating_image" accept="image/*" class="form-control" placeholder="image">
                                    <img src="<?php echo $row['accelerating_image']; ?>" alt="" width="250px">
                                </div>
                                <div class="form-group  col-md-12">
                                    <label for="accelerating_button_link">Button Link</label>
                                    <input type="text" name="accelerating_button_link" class="form-control" id="accelerating_button_link" placeholder="Button Link" value="<?php echo $row['accelerating_button_link']; ?>">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="form-group">
                                        <label for="alt_text">Alt Text</label>
                                        <input type="text" class="form-control" id="accelerating_image_alt_text" name="accelerating_image_alt_text" value="<?php echo $row['accelerating_image_alt_text']; ?>" placeholder="alt Text">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shortDescription">Alt Description</label>
                                        <textarea id="shortDescription" name="accelerating_image_alt_description" placeholder="Description" class="form-control" cols="30" rows="10"><?php echo $row['accelerating_image_alt_description']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>


                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Journey Section
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="journey_title">Title</label>
                                    <input type="text" name="journey_title" class="form-control" id="journey_title" placeholder="Accelerating Innovation" value="<?php echo $row['journey_title']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="journey_title_tagline">After Title</label>
                                    <input type="text" name="journey_title_tagline" class="form-control" id="journey_title_tagline" placeholder="Since 2013" value="<?php echo $row['journey_title_tagline']; ?>">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="journey_title_details">Details</label>
                                    <textarea name="journey_title_details" id="journey_title_details" cols="30" rows="10" class="form-control" placeholder="Accelerating Innovation Details"><?php echo $row['journey_title_details']; ?></textarea>
                                </div>


                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Overview of Success</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="overview_success">Title</label>
                                    <input type="text" name="overview_success" class="form-control" id="overview_success" placeholder="Overview of Success" value="<?php echo $row['overview_success']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="overview_success_details">Details</label>
                                    <textarea name="overview_success_details" id="overview_success_details" cols="30" rows="10" class="form-control" placeholder="Overview of Success Details"><?php echo $row['overview_success_details']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>


                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Our Great Start</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="great_success">Title</label>
                                    <input type="text" name="great_success" class="form-control" id="great_success" placeholder="Our Great Start" value="<?php echo $row['great_success']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="great_success_details">Details</label>
                                    <textarea name="great_success_details" id="great_success_details" cols="30" rows="10" class="form-control" placeholder="Our Great Start Details"><?php echo $row['great_success_details']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>


                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Introduction Section</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="introduction_title">Title</label>
                                    <input type="text" class="form-control" name="introduction_title" id="introduction_title" placeholder="Introduction Section Title" value="<?php echo $row['introduction_title']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="introduction_title_tagline">Title Tagline</label>
                                    <input type="text" class="form-control" name="introduction_title_tagline" id="introduction_title_tagline" placeholder="Title Tagline" value="<?php echo $row['introduction_title_tagline']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="introduction_details">Details</label>
                                    <textarea name="introduction_details" id="introduction_details" cols="30" rows="10" class="form-control" placeholder="Introduction Section Details"><?php echo $row['introduction_details']; ?></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="introduction_year">Year</label>
                                    <input type="text" class="form-control" name="introduction_year" id="introduction_year" placeholder="Year" value="<?php echo $row['introduction_year']; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="introduction_country">Country</label>
                                    <input type="text" class="form-control" name="introduction_country" id="introduction_country" placeholder="Country" value="<?php echo $row['introduction_country']; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="introduction_projects">Projects</label>
                                    <input type="text" class="form-control" name="introduction_projects" id="introduction_projects" placeholder="Projects" value="<?php echo $row['introduction_projects']; ?>">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="introduction_clients">Clients</label>
                                    <input type="text" class="form-control" name="introduction_clients" id="introduction_clients" placeholder="Clients" value="<?php echo $row['introduction_clients']; ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Customers Section</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="customers_title">Title</label>
                                    <input type="text" class="form-control" name="customers_title" id="customers_title" placeholder="Customers Title" value="<?php echo $row['customers_title']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="customers_details">Details</label>
                                    <textarea name="customers_details" id="customers_details" cols="30" rows="10" class="form-control" placeholder="Customers Details"><?php echo $row['customers_details']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Highlighted Section</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="highlighted_title">Title</label>
                                    <input type="text" name="highlighted_title" class="form-control" id="highlighted_title" placeholder="Highlighted Title" value="<?php echo $row['highlighted_title']; ?>">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="highlighted_details">Details</label>
                                    <textarea name="highlighted_details" id="highlighted_details" cols="30" rows="10" class="form-control" placeholder="Highlighted Details"><?php echo $row['highlighted_details']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>


            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>


    </div>

</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>