<?php
    $title = "Create Branch";
    ob_start();


    require_once '../config/dbconnect.php';  
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1><?php echo $title; ?></h1>
            <a href="branch-list.php" class="btn btn-sm btn-info">View List</a>
        </div>

            <form action="../controller/backend/branch.php" method="POST" enctype="multipart/form-data" id="submit">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Branch">
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" placeholder="image">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="map">Map</label>
                        <textarea name="map" placeholder="Map" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                    <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
                </div>
            </form>


    </div>

</div>

<?php
$content = ob_get_clean();

include '../layouts/master.php';  ?>