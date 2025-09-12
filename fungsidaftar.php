
<?php
session_start();
include "serverLK.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // cek data di database
    $sql = "INSERT INTO akun (username, password, role) VALUES ('$username', '$password','user')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='LaundryKu.html';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
?>