<?php
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $conn->real_escape_string($_POST["judul"]);
    $kategori = $conn->real_escape_string($_POST["kategori"]);
    $bahan = $conn->real_escape_string($_POST["bahan"]);
    $instruksi = $conn->real_escape_string($_POST["instruksi"]);
    $tanggal = date("Y-m-d");
    $gambar = $_FILES["gambar"]["name"];
    $nama_file_baru = $tanggal . " " . $gambar;
    
    $destination = "images/" . $nama_file_baru;
    
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $destination)) {
        $sql = "INSERT INTO resep VALUES ('', '$judul', '$kategori', '$bahan', '$instruksi', '$nama_file_baru')";
        
        if ($conn->query($sql)) {
            echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'lihat.php'
            </script>";
        } else {
            echo json_encode(array("success" => false, "message" => "Error: " . $conn->error));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memindahkan file yang diunggah."));
    }
    
    $conn->close();
}

