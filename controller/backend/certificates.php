<?php
require_once '../../config/dbconnect.php';
$db = new DB_con();
$conn = $db->get_connection();

//  =========  Add Data ===================
if (isset($_POST['submit'])) {
    $title   = $_POST['title'];
    $description    = $_POST['description'];
    $alt_tag    = $_POST['alt_tag'];
    $alt_description    = $_POST['alt_description'];
    $image;

    if (isset($_FILES['image'])) {
        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $image = '../../uploads/' . str_replace(' ', '-',  strtolower($title)) .'-' . random_int(10000, 99999) . '.' . $extension;

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }


    $sql = "INSERT INTO `certificates`(`title`, `description`, `image`, `alt_tag`, `alt_description` ) VALUES ('$title','$description','$image', '$alt_tag', '$alt_description')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: ../../pages/certificates.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
