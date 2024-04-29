<?php
    $title = "Add new page";
    ob_start();
    $content = ob_get_clean();
    include '../layouts/master.php';
    include '../controller/backend/branch.php';
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Update list</h1>
            <a href="branch-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Branch</label>
                <input type="text" class="form-control" id="name" placeholder="Branch">
            </div>
            <div class="form-group">
                <label for="map">Map</label>
                <input type="text" class="form-control" id="map" placeholder="Map">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" placeholder="image">
            </div>
            <button type="submit" class="btn btn-primary my-3">Create</button>
        </form>
    </div>

</div>
