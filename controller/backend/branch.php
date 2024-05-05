<?php
    require_once '../../config/dbconnect.php';
    $db = new DB_con();
    $conn = $db->get_connection();


      //  =========  Delete Data ===================
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_select = "SELECT image FROM branches WHERE id = $id";
    $result_select = $conn->query($sql_select);

    if ($result_select->num_rows > 0) {
        // Get the image file path
        $row = $result_select->fetch_assoc();
        $image_path = $row['image'];

        // Delete the image file from the server
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Delete the record from the database
        $sql_delete = "DELETE FROM branches WHERE id = $id";

        if ($conn->query($sql_delete) === TRUE) {
            $referrer = $_SERVER['HTTP_REFERER'];
            header("Location: $referrer");
            ?>
            <script>
                // Show iziToast message
                iziToast.success({
                    title: 'Success',
                    message: 'Successfully Deleted!',
                });
            </script>
            <?php
            exit(); // Exit to prevent further execution
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found.";
    }

}
    $conn->close();
?>
