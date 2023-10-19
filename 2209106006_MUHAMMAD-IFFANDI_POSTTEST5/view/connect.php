<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_resep";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die(json_encode(array("success" => false, "message" => "Connection failed: " . $connection->connect_error)));
    }

    $judul = $connection->real_escape_string($_POST["judul"]);
    $kategori = $connection->real_escape_string($_POST["kategori"]);
    $bahan = $connection->real_escape_string($_POST["bahan"]);
    $instruksi = $connection->real_escape_string($_POST["instruksi"]);
    $gambar = $_FILES["gambar"]["name"];
    $gambar_tmp = $_FILES["gambar"]["tmp_name"];
    $destination = "images/" . $gambar;

    if (move_uploaded_file($gambar_tmp, $destination)) {
        $sql = "INSERT INTO resep VALUES ('', '$judul', '$kategori', '$bahan', '$instruksi', '$gambar')";

        if ($connection->query($sql)) {
            echo "<script>
            alert('data berhasil di tambah');
            document.location.href = 'lihat.php'
            </script>";
            json_encode(array("success" => true, "judul" => $judul, "kategori" => $kategori, "bahan" => $bahan, "instruksi" => $instruksi, "gambar" => $gambar));
        } else {
        json_encode(array("success" => false, "message" => "Error: " . $connection->error));
        }
    } else {
        echo json_encode(array("success" => false, "message" => "Failed to move the uploaded image."));
    }

    $connection->close();
}
