<?php
require_once '../../config/dbconnect.php';

//  =========  Add Data ===================
if (isset($_POST['submit'])) {
    $title   = $_POST['title'];
    $description    = $_POST['description'];
    $image;

    if (isset($_FILES['image'])) {
        $photo = $_FILES['image']['name'];
        $extension = pathinfo($photo, PATHINFO_EXTENSION);
        $image = '../../uploads/'. random_int(10000, 99999) . '.' . $extension;
    
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
    
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }


    $sql = "INSERT INTO `certificates`(`title`, `description`, `image`) VALUES ('$title','$description','$image')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: ../../pages/certificates.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}







//  =========  Edit Data ==================



//  =========  Delete Data ===================

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM branches WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
