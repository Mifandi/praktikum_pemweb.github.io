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

if (isset($_POST['edit'])) {
    $judul = $_POST["judul"];
    $kategori = $_POST["kategori"];
    $bahan = $_POST["bahan"];
    $instruksi = $_POST["instruksi"];
    
    if ($_FILES["gambar"]["size"] > 0) {
        $img = $_FILES["gambar"]["name"];
        $tempName = $_FILES["gambar"]["tmp_name"];
        move_uploaded_file($tempName, "image/" . $img);
        $result = mysqli_query($conn, "UPDATE resep SET nama_resep = '$judul', kategori = '$kategori', bahan = '$bahan', instruksi = '$instruksi', gambar = '$img' WHERE id = '$id'");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil Diubah!');
                document.location.href = 'lihat.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'update.php?id=$id'
            </script>";
        }

    } else {
        $result = mysqli_query($conn, "UPDATE resep SET nama_resep = '$judul', kategori = '$kategori', bahan = '$bahan', instruksi = '$instruksi' WHERE id = '$id'");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil Diubah!');
                document.location.href = 'lihat.php'
            </script>";
        } else {
            echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'update.php?id=$id'
            </script>";
        }
    }
}

$result = mysqli_query($conn, "SELECT * FROM resep where id=$id");
$resep = [];

while ($row = mysqli_fetch_assoc($result)) {
    $resep[] = $row;
}

$resep = $resep[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Form Resep Makanan</title>
</head>
<body class="container">
    <div class="background"></div>
    <div class="form-container">
        <h1>Form Resep Makanan</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="judul">Judul Resep:</label>
            <input type="text" id="judul" name="judul" value="<?php echo $resep['nama_resep']?>" required>
            
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori">
                <option value="Makanan Ringan" <?php if ($resep['kategori'] === 'Makanan Ringan') echo 'selected'; ?>>Makanan Ringan</option>
                <option value="Makanan Berat" <?php if ($resep['kategori'] === 'Makanan Berat') echo 'selected'; ?>>Makanan Berat</option>
                <option value="Minuman" <?php if ($resep['kategori'] === 'Minuman') echo 'selected'; ?>>Minuman</option>
            </select>

            <label for="bahan">Bahan-bahan:</label>
            <textarea id="bahan" name="bahan" rows="4" required><?php echo $resep['bahan']?></textarea>

            <label for="instruksi">Instruksi:</label>
            <textarea id="instruksi" name="instruksi" rows="6" required><?php echo $resep['instruksi']?></textarea>

            <label for="gambar">Gambar Resep:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">

            <a href="lihat.php" class="back-button">Kembali</a>
            <input type="submit" name="edit" value="Submit">
        </form>
    </div>
</body>
</html>
