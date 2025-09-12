<?php
include "serverLK.php"; // koneksi database

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_user'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];
    $pesanan  = $_POST['pesanan'];

    // query insert
    $sql = "INSERT INTO customers (nama_user, alamat, no_hp, pesanan) 
            VALUES ('$nama', '$alamat', '$no_hp', '$pesanan')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location='pelanggan.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pelanggan</title>
    <style>
        body {font-family: Arial; margin: 20px;}
        form {max-width: 400px; margin: auto;}
        label {display: block; margin-top: 10px;}
        input {width: 100%; padding: 8px; margin-top: 5px;}
        button {margin-top: 15px; padding: 10px; width: 100%;
                background: #1b61b1; color: white; border: none; border-radius: 5px;}
        button:hover {background: #0d47a1;}
    </style>
</head>
<body>
    <h2>➕ Tambah Data Pelanggan</h2>
    <form method="POST">
        <label>Nama</label>
        <input type="text" name="nama_user" required>

        <label>Alamat</label>
        <input type="text" name="alamat" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>

        <label>pesanan</label>
        <input type="text" name="pesanan" required>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
