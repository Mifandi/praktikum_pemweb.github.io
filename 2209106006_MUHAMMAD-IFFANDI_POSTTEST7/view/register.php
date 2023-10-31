<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM akun WHERE email = '$email'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "Akun dengan email tersebut sudah terdaftar";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO akun (id, firstname, lastname, email, pass) VALUES ('', '$firstname', '$lastname', '$email', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Akun Berhasil Dibuat!');
                    document.location.href = 'login.php'
                </script>";
        } else {
            echo "<script>
                    alert('Terjadi Kesalahan!');
                    document.location.href = 'register.php'
                </script>";
        }
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
        <h2>Form Pendaftaran</h2>
        <form action="" method="post">
            <div class="form-group">
                <div class="half">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="half">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Daftar">
            </div>
        </form>

        <a href="#" class="login-link">Sudah memiliki akun? Masuk di sini</a>
    </div>
</div>

</body>
</html>
