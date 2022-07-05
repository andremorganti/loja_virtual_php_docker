<?php
    require('config/database.php');
    $database = new Database();
    $conn = new mysqli(
        $database->get_servername(),
        $database->get_username(),
        $database->get_password(),
        $database->get_database_name(),
    );

    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
    }
    
?>