<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "data_resep";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

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
    <link rel="stylesheet" href="../styles/lihat.css">
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
                <input type="checkbox" onclick="setDark()">
            </ul>
        </nav>
    </header>
    <h1>Data Resep Makanan</h1>
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
