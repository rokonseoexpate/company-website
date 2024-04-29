<?php
    $title = "Add new page";
    ob_start();
    $content = ob_get_clean();
    include '../layouts/master.php';
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center ">
            <h1>Update Employ</h1>
            <a href="employ-list.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Designation">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="branch">Branch</label>
                    <select id="branch" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="ein">EIN No</label>
                    <input type="number" class="form-control" id="ein" placeholder="Ein No">
                </div>
                
                <div class="form-group col-md-2">
                    <label for="team">Team No</label>
                    <input type="text" class="form-control" id="team" placeholder="Team No">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" placeholder="image">
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Create</button>
        </form>
    </div>

</div>
