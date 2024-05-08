<?php
$title = "Get Quotes Details";
ob_start();

require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $qry = "SELECT * FROM get_quotes WHERE id=$id";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();
}

?>

<div class="content-wrapper p-3" style="min-height: 485px;">
    <div class="card px-3">
        <div class="d-flex  justify-content-between align-items-center">
            <h4> <strong> <?php echo $title  ?> </strong> </h4>
            <a href="contact-message.php" class="btn btn-sm btn-info">View List</a>
        </div>
        <table class="table table-striped table-bordered">

            <tbody>
                <tr>
                    <th>Name</th>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <tr>
                    <th>Service Type</th>
                    <td><?php echo $row['service_type'] ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $row['email'] ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $row['phone'] ?></td>
                </tr>
                <tr>
                    <th>Company Name</th>
                    <td><?php echo $row['company_name'] ?></td>
                </tr>
                <tr>
                    <th>Company Website</th>
                    <td><?php echo $row['company_website'] ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $row['address'] ?></td>
                </tr>
                <tr>
                    <th>Image File Link</th>
                    <td><?php echo $row['image_file_link'] ?></td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td><?php echo $row['message'] ?></td>
                </tr>
                <tr>
                    <th>File</th>
                    <td>
                        <?php
                        $jsonString = $row['files'];
                        $data = json_decode($jsonString, true);
                        if ($data != null) {
                        ?>
                            <ul>
                                <?php foreach ($data as $file) { ?>
                                    <li><a href="" download="<?php echo $file; ?>"><?php echo basename($file); ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Created At</th>

                    <?php
                    $dt = new DateTime($row['created_at'], new DateTimezone('Asia/Dhaka'));

                    ?>
                    <td><?php echo $dt->format('j F Y, g:i a'); ?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>