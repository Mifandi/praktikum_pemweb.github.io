<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_resep";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die(json_encode(array("success" => false, "message" => "Connection failed: " . $conn->connect_error)));
    }
?>