<?php
    $title = "Add new page";
    ob_start();
    $content = ob_get_clean();
    include '../layouts/master.php'; 
    require_once '../config/dbconnect.php';  
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Add New Branch</h1>
            <a href="branch-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form action="../controller/backend/branch.php" method="POST" enctype="multipart/form-data" id="submit">
            <div class="form-group">
                <label for="name">Branch</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Branch">
            </div>
            <div class="form-group">
                <label for="map">Map</label>
                <input type="text" class="form-control" id="map" name="map" placeholder="Map">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="image">
            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">Create</button>
        </form>
    </div>

</div>
