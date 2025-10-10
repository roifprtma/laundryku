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

    $sql = "UPDATE customers 
            SET nama_user='$nama', alamat='$alamat', no_hp='$no_hp' 
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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Data Pelanggan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="update.css">

</head>
<body>
    <div class="form-container">
        <div class="icon">✏️</div>
        <h2>Update Data Pelanggan</h2>
        <form method="POST">
            <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">

            <label>Nama</label>
            <input type="text" name="nama_user" value="<?= $row['nama_user'] ?>" required>

            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $row['alamat'] ?>" required>

            <label>No HP</label>
            <input type="text" name="no_hp" value="<?= $row['no_hp'] ?>" required>

            <button type="submit" name="update">💾 Simpan Perubahan</button>
        </form>
        <div class="note">Pastikan data pelanggan sudah benar sebelum disimpan.</div>
    </div>
</body>
</html>
