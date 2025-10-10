<?php
include "serverLK.php"; // koneksi database

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_user'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];
    $pesanan  = $_POST['pesanan'] ?? '';

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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Pelanggan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0f7fa, #bbdefb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        h2 {
            color: #1565c0;
            font-weight: 600;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-weight: 500;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #b0bec5;
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
        }

        input:focus {
            border-color: #1565c0;
            outline: none;
            box-shadow: 0 0 4px #90caf9;
        }

        button {
            margin-top: 20px;
            padding: 12px;
            width: 100%;
            background: #1565c0;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0d47a1;
            transform: translateY(-2px);
        }

        .icon {
            font-size: 28px;
            color: #1565c0;
            margin-bottom: 10px;
        }

        .note {
            font-size: 13px;
            color: #78909c;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="icon">🧺</div>
        <h2>Tambah Data Pelanggan</h2>
        <form method="POST">
            <label>Nama</label>
            <input type="text" name="nama_user" placeholder="Masukkan nama pelanggan..." required>

            <label>Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan alamat pelanggan..." required>

            <label>No HP</label>
            <input type="text" name="no_hp" placeholder="Masukkan nomor HP aktif..." required>

            <button type="submit" name="simpan">💾 Simpan</button>
        </form>
        <div class="note">Pastikan data pelanggan benar sebelum disimpan.</div>
    </div>
</body>
</html>
