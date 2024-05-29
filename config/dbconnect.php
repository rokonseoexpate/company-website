<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class DB_con {
    private $conn;

    function __construct() {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "php_admin_panel";

        // Attempt to connect to the database
        $this->conn = mysqli_connect($server, $user, $password, $db);

        // Check connection
        if (!$this->conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }
    }

    public function get_connection() {
        return $this->conn;
    }
}
