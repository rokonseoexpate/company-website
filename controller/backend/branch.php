<?php
    require_once '../config/dbconnect.php';

    //  =========  Add Data ===================
    if (isset($_POST['submit'])) {

        $name   = $_POST['name'];
        $map    = $_POST['map'];
        $image  = $_POST['image'];

        $sql = "INSERT INTO `branches`(`name`, `map`, `image`) VALUES ('$name','$map','$image')";
        $result = $conn->query($sql);
    
        if ($result == TRUE) {
          echo "New record created successfully.";
    
        }else{
          echo "Error:". $sql . "<br>". $conn->error;
        }

        $conn->close(); 
      }




      

      //  =========  Edit Data ==================

      //  =========  GET Data ===================
      
?>
