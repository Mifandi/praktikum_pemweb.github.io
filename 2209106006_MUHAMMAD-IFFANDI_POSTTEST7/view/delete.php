<?php
require "conn.php";

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