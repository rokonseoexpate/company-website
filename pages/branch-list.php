<?php
    $title = "Branch list";
    ob_start();
    $content = ob_get_clean();
    include '../layouts/master.php';
    require_once '../config/dbconnect.php';
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
                <?php
                   $i = 1;
                    $qry = "SELECT * FROM branches";
                    if ($result = $conn ->query($qry)) {
                        while ($row = $result -> fetch_assoc()) {  
                ?>
                <tr>
                    <th><?php echo $i++ ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['map']; ?></td>
                    <td><?php echo $row['image']; ?></td>
                    <td class="text-right">
                        <a href="branch-edit.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="../controller/backend/branch.php?id=<?php echo  $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
                <?php
                        } 
                    } 
                ?>  
            </tbody>
        </table>
    </div>

</div>