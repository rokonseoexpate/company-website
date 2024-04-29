<?php
    $title = "Add new page";
    ob_start();
    $content = ob_get_clean();
    include '../layouts/master.php';
?>

<div class="content-wrapper p-3" style="min-height: 485px;">

    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h1>Branch list</h1>
            <a href="branch-add.php" class="btn btn-sm btn-info">Add New</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Map</th>
                    <th>Image</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td class="text-right">
                        <a href="branch-edit.php" class="btn btn-sm btn-info">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
