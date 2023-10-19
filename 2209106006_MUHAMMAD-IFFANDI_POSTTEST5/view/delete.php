<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "data_resep"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM resep WHERE id = '$id'");

if ($result) {
    echo "
    <script>
        alert('Data berhasil Hapus!');
        document.location.href = 'lihat.php'
    </script>";
} else {
    echo "
    <script>
        alert('Data Gagal Hapus!');
        document.location.href = 'lihat.php'
    </script>";
}

?>