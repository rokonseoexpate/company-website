<?php
$title = "Certificates Details";
ob_start();
session_start();
require_once '../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM contacts WHERE id=$id";
    $result = $conn->query($qry);
    $row = $result->fetch_assoc();

    // print_r($row['attachments']);
    // die();
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
                    <th>Type</th>
                    <td><?php echo $row['type'] ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $row['email'] ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $row['phone'] ?></td>
                </tr>
                <?php if ($row['type'] == 'hire') {
                ?>
                    <tr>
                        <th>Stuff</th>
                        <td><?php echo $row['stuf'] ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <th>Company Name</th>
                    <td><?php echo $row['company_name'] ?></td>
                </tr>
                <tr>
                    <th>Company Website</th>
                    <td><?php echo $row['company_website'] ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $row['description'] ?></td>
                </tr>


                <tr>
                    <td>Attachment</td>

                    <?php $images = json_decode($row['attachments']); ?>
                    <?php if (isset($images) && !empty($images)) { ?>
                        <td>
                            <?php foreach ($images as $image) { ?>
                                <a href="<?php echo $image; ?>" download>
                                    <img src="<?php echo $image; ?>" alt="image" style="height: 100px; width: 120px; margin-bottom: 5px;">
                                </a>
                            <?php } ?>
                        </td>
                    <?php } ?>


                </tr>
                <tr>

                    <th>Created At</th>
                    <td><?php echo !empty($row['created_at']) ? date('d M Y', strtotime($row['created_at'])) : 'Not available'; ?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<?php
$content = ob_get_clean();
include '../layouts/master.php';

?>