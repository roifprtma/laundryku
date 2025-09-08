<?php
session_start();
include "serverLK.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // cek data di database
    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // ambil data user
        $row = mysqli_fetch_assoc($result);

        // simpan ke session
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['admin'];

        if ($row['role'] == "admin") {          
            header("Location: dashboard.php");
            exit;
        } elseif ($row['role'] == "user") {  
            header("Location: user.php");
            exit;
        }
    } else {
        echo "<script>alert('Login gagal! Username/Password salah'); window.location='LaundryKu.html';</script>";
    }
}
?>
