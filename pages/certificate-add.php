<?php
$title = "Add Certificates";
ob_start();

require_once '../config/dbconnect.php';  
$db = new DB_con();
$conn = $db->get_connection();
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="certificates.php" class="btn btn-sm btn-info">View List</a>
        </div>

        <form action="../controller/backend/certificates.php" method="POST" enctype="multipart/form-data" id="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                        <div id="titleError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="Image" required>
                        <div id="imageError" class="error text-danger"></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="shortDescription">Description</label>
                        <textarea id="summernote" name="description" placeholder="Description" class="form-control"  cols="30" rows="10"></textarea>
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
                <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
            </div>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';
?>

<script>
    $(document).ready(function() {
        $('#submit').on('submit', function(event) {
            var title = $('#title').val().trim();
            var image = $('#image').val().trim();

            var isValid = true;

            if (title === '') {
                $('#titleError').html('Title is required!');
                isValid = false;
            } else {
                $('#titleError').html('');
            }

            if (image === '') {
                $('#imageError').html('Image is required!');
                isValid = false;
            } else {
                $('#imageError').html('');
            }

            if (!isValid) {
                event.preventDefault(); 
            }
        });
    });
</script>
