
<?php
include "serverLK.php"; // koneksi ke db

// cek apakah ada id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ambil data pelanggan berdasarkan id
    $result = mysqli_query($conn, "SELECT * FROM customers WHERE id_user='$id'");
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Data tidak ditemukan!";
        exit;
    }
}

// jika form disubmit
if (isset($_POST['update'])) {
    $id       = $_POST['id_user'];
    $nama     = $_POST['nama_user'];
    $alamat   = $_POST['alamat'];
    $no_hp    = $_POST['no_hp'];
    $pesanan    = $_POST['pesanan'];

    // update data
    $sql = "UPDATE customers 
            SET nama_user='$nama', alamat='$alamat', no_hp='$no_hp', pesanan='$pesanan' 
            WHERE id_user='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil diperbarui!');
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
    <title>Update Data Pelanggan</title>
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
    <h2>✏️ Update Data Pelanggan</h2>
    <form method="POST">
        <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">

        <label>Nama</label>
        <input type="text" name="nama_user" value="<?= $row['nama_user'] ?>" required>

        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= $row['alamat'] ?>" required>

        <label>No HP</label>
        <input type="text" name="no_hp" value="<?= $row['no_hp'] ?>" required>

        <label>pesanan</label>
        <input type="text" name="pesanan" value="<?= $row['pesanan'] ?>" required>

        <button type="submit" name="update">Simpan Perubahan</button>
    </form>
</body>
