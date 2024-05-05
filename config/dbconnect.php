<?php

class DB_con {
    private $conn;

    function __construct() {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "php_admin_panel";

        $this->conn = mysqli_connect($server, $user, $password, $db);

        if (!$this->conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }
    }
    public function get_connection() {
        return $this->conn;
    }

    public function branches($name, $image, $map) {
        $sql = "INSERT INTO branches (name, image, map) VALUES ('$name', '$image', '$map')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    // Add other methods for database operations here
}

?>
