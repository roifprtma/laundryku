<<<<<<< HEAD
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "serverlk"; // Updated to match the database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
=======
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "serverlk"; // Updated to match the database name

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
>>>>>>> c69c8760651cd7f3727bc202db41c311aa6e8aad
?>