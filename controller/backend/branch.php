<?php
    require_once '../../config/dbconnect.php';

    //  =========  Add Data ===================
    if (isset($_POST['submit'])) {
      $name   = $_POST['name'];
      $map    = $_POST['map'];
      $image  = $_POST['image'];
  
      $sql = "INSERT INTO `branches`(`name`, `map`, `image`) VALUES ('$name','$map','$image')";
      $result = $conn->query($sql);
  
      if ($result === TRUE) {
          $referrer = $_SERVER['HTTP_REFERER'];
          header("Location: $referrer");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      $conn->close(); 
  }
  






      //  =========  Edit Data ==================



      //  =========  Delete Data ===================
      
      if(isset($_GET['id'])) {
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
?>
