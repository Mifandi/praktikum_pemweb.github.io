<?php
session_start();
require 'conn.php'; // Menghubungkan ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM akun WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['pass'])) {
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $row['firstname'];
            header("Location: lihat.php");
        } else {
            echo "<script>
                    alert('Password Salah!');
                    document.location.href = 'login.php'
                </script>";
        }
    } else {
        echo "Akun dengan email tersebut tidak ditemukan";
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran</title>
  <link rel="stylesheet" type="text/css" href="../styles/register.css">
</head>
<body>

<div class="background">
    <img src="../assets/bacl.jpg" alt="">
</div>
<div class="login-container">
    <div class="container">
        <h2>Form Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>

        <a href="register.php" class="login-link">Belum memiliki akun? Buat di sini</a>
    </div>
</div>

</body>
</html>
