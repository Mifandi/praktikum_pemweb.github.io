<?php 
session_start();
require "conn.php";
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Ambil informasi dari session
$email = $_SESSION['email'];
$firstname = $_SESSION['firstname'];

$result = mysqli_query($conn, "SELECT * FROM resep");

$resep = [];

while ($row = mysqli_fetch_assoc($result)) {
    $resep[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/lihat2.css">
    <title>Data Resep Makanan</title>
</head>
<body>
    <header>
        <nav>
            <label class="logo">Kreasi Kuliner</label>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="form.php">Tambah Resep</a></li>
                <li><a href="logout.php">Logout</a></li>
                <input type="checkbox" onclick="setDark()">
            </ul>
        </nav>
    </header>
    <h1>Data Resep Makanan</h1>
    <div class="ttl">
        <?php
        date_default_timezone_set('Asia/Makassar'); // Mengatur zona waktu ke Asia/Makassar
        $currentDateTime = date('l, j F Y, H:i:s e');
        echo "<p>Tanggal dan Waktu Sekarang: $currentDateTime</p>";
        ?>
    </div>

    <div class="recipe-container" id="recipe-container">
        <?php foreach ($resep as $rp) : ?>
            <div class="recipe-data">
                <div class="recipe">
                    <img class="gambar" src="images/<?php echo $rp['gambar']; ?>" alt="<?php echo $rp['nama_resep']; ?>">
                    <h2 class="judul-resep"><?php echo $rp['nama_resep']; ?></h2>
                    <div class="action">
                        <ul>
                            <li><button class="view-recipe">Lihat Resep</button></li>
                            <li><a href="update.php?id=<?php echo $rp["id"] ?>"><button name="edit" class="edit-btn" id="edit-btn">Edit</button></a></li>
                            <li><a href="delete.php?id=<?php echo $rp["id"] ?>"><button name="hapus" class="delete-btn">Hapus</button></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
        <div class="modal-container">
            <?php foreach ($resep as $rp) : ?>
                <div class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2 class="modal-title"><?php echo $rp['nama_resep']; ?></h2>
                        <p class="modal-category"><b>Kategori: </b><?php echo $rp['kategori']; ?></p>
                        
                        <p class="modal-ingredients"><b>Bahan-bahan:</b></p>
                        <ol class="modal-ingredients">
                            <?php
                            $bahanArray = explode("\n", $rp['bahan']);

                            foreach ($bahanArray as $bahan) {
                                echo "<li>$bahan</li>";
                            }
                            ?>
                        </ol>
                        
                        <p class="modal-instructions"><b>Instruksi:</b></p>
                        <ol class="modal-instructions">
                            <?php
                            $instruksiArray = explode("\n", $rp['instruksi']);

                            foreach ($instruksiArray as $instruksi) {
                                echo "<li>$instruksi</li>";
                            }
                            ?>
                        </ol>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <script src="../scripts/lihat.js"></script>
</body>
</html>
