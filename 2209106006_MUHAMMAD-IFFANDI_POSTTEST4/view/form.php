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
        <form action="connect.php" method="post" enctype="multipart/form-data">
            <label for="judul">Judul Resep:</label>
            <input type="text" id="judul" name="judul" required>
            
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori">
                <option value="makanan_ringan">Makanan Ringan</option>
                <option value="makanan_berat">Makanan Berat</option>
                <option value="minuman">Minuman</option>
            </select>

            <label for="bahan">Bahan-bahan:</label>
            <textarea id="bahan" name="bahan" rows="4" required></textarea>

            <label for="instruksi">Instruksi:</label>
            <textarea id="instruksi" name="instruksi" rows="6" required></textarea>

            <label for="gambar">Gambar Resep:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">

            <a href="lihat.php" class="back-button">Kembali</a>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
