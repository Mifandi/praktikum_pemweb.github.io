<?php
// Perform database connection and query to fetch data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_resep";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM resep"; // Adjust this query to match your database structure
$result = $connection->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$connection->close();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
