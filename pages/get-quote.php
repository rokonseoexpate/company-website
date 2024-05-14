<?php
$title = "Get Quotes List";
ob_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

$qry = "SELECT * FROM get_quotes order by id DESC";

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center py-2">
            <h4> <strong> <?php echo $title  ?> </strong> </h4>
            <a href="add-get-quote.php" class="btn btn-sm btn-info"><i class="fa-solid fa-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered" id="example1">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Company Name</th>
                    <th>Service Type</th>
                    <th>Date</th>
                    <th class="text-right px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                if ($result = $conn->query($qry)) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['company_name']; ?></td>
                            <td><?php
                                $service = $row['service_type'];
                                $dd = json_decode($service, true); ?>
                                <?php foreach ($dd as $file) { ?>
                                    <span class="badge badge-btn badge-primary">
                                        <?php echo basename($file); ?>
                                    </span>
                                <?php } ?>
                            </td>
                            <td><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                            <td class="text-right">
                                <a href="get-quote-details.php?id=<?php echo  $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
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

<?php
$content = ob_get_clean();
include '../layouts/master.php';
?>